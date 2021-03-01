<?php

require('models/frontend/ChapterManager.php');
require('models/frontend/LoginManager.php');
 

function author ()
{
    require('views/frontend/author.php');
}

function chapter($id)
{
    $chapterManager = new ChapterManagerFrontend();
    $chapter = $chapterManager->getChapter($id);
    require('views/frontend/chapter.php');
}

function chapters()
{
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getChapters();
    require('views/frontend/chapters.php');
}

function contact()
{

    require('views/frontend/contact.php');

}

function welcome()
{   
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getRecentChapters();
    require('views/frontend/welcome.php');
   
}

function login($form_info)
{
    $LoginManager = new LoginManagerFrontend();
    $username = $form_info['username'];
    $password = $form_info['password'];
    $user = $LoginManager->getUser($username, $password);
    require('views/frontend/login.php');
}

?>

