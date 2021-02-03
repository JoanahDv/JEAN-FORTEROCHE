<?php

require('models/frontend/ChapterManager.php');

function author ()
{
    require('views/frontend/author.php');
}

function chapter($id)
{
    $chapterManager = new ChapterManager();
    $chapter = $chapterManager->getChapter($id);
    require('views/frontend/chapter.php');
}

function chapters()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapters();
    require('views/frontend/chapters.php');
}

function contact()
{

    require('views/frontend/contact.php');

}

function welcome()
{
    require('views/frontend/welcome.php');

}



// require 'models/frontend/model.php';

// function author() {
//     require 'views/frontend/author.php';
// }
// function chapter(){
//     $chapters = getChapters();
//     require 'views/frontend/chapter.php';
    
// }
// function contact(){
//     require 'views/frontend/contact.php';
    
// }
// function welcome(){
//     require 'views/frontend/welcome.pho';
// }

?>