<?php

require('models/backend/ChapterManager.php');
require('models/backend/commentManager.php');


function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=login'); // redirect
        exit();
    }
}


function newChapter($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $chapterManager = new ChapterManagerBackend();
        $chapterManager->createChapter(
            $post_parameters['title'],
            $post_parameters['body'],
            $post_parameters['number'],
            $post_parameters['draft'],
        );
        $successMessage = "Chapter created";
    }
    require('views/backend/chapter.php');
}

function login($post_parameters)
{
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();

        $username = $post_parameters['uname'];
        $password = $post_parameters['psw'];
        $user = $LoginManager->getUser($username, $password);
        if ($user) {
            session_start();
            $_SESSION['loggedin'] = True;
            header('Location:/index.php?action=dashboard'); // redirect backend

            exit();
        } else $message = "Username and Password is incorrect";
    }
    require('views/frontend/login.php');
}

    function logout()
    {
        redirectIfNotLoggedin();
        session_destroy();
        header('Location:/index.php?action=login'); // redirect to frontend
        exit();
    }
function dashboard()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    $chapterManager = new ChapterManagerBackend();
    $chapters = $chapterManager->getChapters();
    $commentManager = new commentManagerBackend();
    $comments = $commentManager->getComments();
   
    // $numberOfPages = $chapterManager->getChapterManagerPagination();
    require('views/backend/dashboard.php');
}

function deleteChapter($post_parameters)
{
    redirectIfNotLoggedin();
    $chapterManager = new ChapterManagerBackend();
    $id = $post_parameters['id'];
    $chapterManager->deleteChapter($id);
    header('Location:/index.php?action=dashboard&successMessage=chapter has been deleted'); // redirect
    exit();
}

function deleteComment($post_parameters)
{
    redirectIfNotLoggedin();
    $commentManager = new commentManagerBackend();
    $id = $post_parameters['id'];
    $commentManager->deleteComment($id);
    header('Location:/index.php?action=dashboard#commentList');
    exit();

}
//redirect 

function validateComment($post_parameters)
{
    redirectIfNotLoggedin();
    $flagCommentManager = new commentManagerBackend();
    $id = $post_parameters['id'];
    $flagCommentManager->validateComment($id);
    header('Location:/index.php?action=dashboard#commentList');
    exit();
 }
 


