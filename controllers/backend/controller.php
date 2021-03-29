<?php

require('models/backend/ChapterManager.php');
require('models/backend/commentManager.php');


function newChapter($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $chapterManager = new ChapterManagerBackend();
        $chapterManager->createChapter(
            $post_parameters['title'],
            $post_parameters['body'],
            $post_parameters['number']
        );
    }
    require('views/backend/chapter.php');
}
function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=login'); // redirect
        exit();
    }
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
