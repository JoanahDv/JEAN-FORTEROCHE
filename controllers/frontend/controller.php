<?php

require('models/frontend/ChapterManager.php');
require('models/frontend/LoginManager.php');
require('models/frontend/contactManager.php');
require('models/frontend/commentManager.php');
 


 

function author ()
{
    require('views/frontend/author.php');
}

function chapter($id)
{
    $chapterManager = new ChapterManagerFrontend();
    $chapter = $chapterManager->getChapter($id);
    $commentManagerFrontend = new CommentManagerFrontend();
    $chapterComments = $commentManagerFrontend->getCommentsForChapter($id);

    require('views/frontend/chapter.php');
}

function chapters($page)
{
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getChapters($page); // get chapters
    $numberOfPages = $chapterManager->getChapterPagination(); // get page numbers
    require('views/frontend/chapters.php');
}

function contact($post_parameters)
    {
        if (!empty($post_parameters)) {  // if form is submitted
            $contactManager = new contactUs();
            $contactManager->sendMessage(
                $post_parameters['firstname'],
                $post_parameters['lastname'],
                $post_parameters['email'],
                $post_parameters['subject'],
                $post_parameters['messagebox']

            );
            echo 'ok';
            die();
        }
        
    require('views/frontend/contact.php');

}
function welcome()
{   
    $chapterManager = new ChapterManagerFrontend();
    $chapters = $chapterManager->getRecentChapters();
    require('views/frontend/welcome.php');
   
}

function login($post_parameters)
{
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();
   
        $username = $post_parameters['uname'];
         $password = $post_parameters['psw'];
         $user = $LoginManager->getUser($username, $password);
         if($user) 
        {   
            session_start();
            $_SESSION['loggedin'] = True;
            header('Location:/index.php?action=dashboard'); // redirect

            exit();
        }
        else $message = "Username and Password is incorrect";
    }
    require('views/frontend/login.php');

}
// function login($post_parameters)
// {
//     if (!empty($post_parameters)) {  // if form is submitted
//         // $LoginManager = new LoginManagerFrontend();
//         // $username = $form_info['uname'];
//         // $password = $form_info['psw'];
//         // $user = $LoginManager->getUser($username, $password);
//         header('Location:/index.php?action=dashboard');  // redirect
//         exit();
//     }
//     require('views/frontend/login.php');
// }
function comment($post_parameters)
{
    if (!empty($post_parameters)) {  // if form is submitted
        $commentManager = new commentManagerFrontend();
        $commentManager->createComment(
            $post_parameters['comment'],
            $post_parameters['comment_author'],
            $post_parameters['email'],
            $post_parameters['chapterid']
        );
    }
    require('views/frontend/comment.php');
}
  
?>

