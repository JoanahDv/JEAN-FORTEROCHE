<?php

require('models/backend/ChapterManager.php');
require('models/backend/commentManager.php');
require('models/backend/contactManager.php');



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
        $draft = 0; // draft won't be sent by the form if it's not checked, default to "not-draft"
        if (isset($post_parameters['draft']) && $post_parameters['draft'] == 'on') { // if draft is checked in the form
            $draft = 1;
        }
        $chapterManager->createChapter(
            $post_parameters['title'],
            $post_parameters['body'],
            $post_parameters['image'],
            $draft
        );
        $successMessage = "Your New Chapter has been created.";
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
        } else {
            $message = "Username and Password is incorrect";
        }
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
    $commentManager = new CommentManagerBackend();
    $comments = $commentManager->getComments();
    $contactManager = new ContactManagerBackend();
    $contacts = $contactManager->getContacts();
    // $numberOfPages = $chapterManager->getChapterManagerPagination();
    require('views/backend/dashboard.php');
}

function chapterList()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    $chapterManager = new ChapterManagerBackend();
    $chapters = $chapterManager->getChapters();
    require('views/backend/chapterPage.php');
}
function commentList()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    $commentManager = new CommentManagerBackend();
    $comments = $commentManager->getComments();
    require('views/backend/commentPage.php');

}
function contactList()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    $contactManager = new ContactManagerBackend();
    $contacts = $contactManager->getContacts();
    require('views/backend/contactPage.php');
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

function editChapter($id, $post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $chapterManager = new ChapterManagerBackend();
        $draft = 0; // draft won't be sent by the form if it's not checked, default to "not-draft"
        if (isset($post_parameters['draft']) && $post_parameters['draft'] == 'on') { // if draft is checked in the form
            $draft = 1;
        }
        $title = $post_parameters['title'];
        $body = $post_parameters['body'];
        $image = $post_parameters['image'];
        $chapterManager->editChapter($title,$body,$draft,$image,$id);
        $successMessage = "This Chapter has been edited.";
    }
    $chapterManager = new ChapterManagerBackend();
    // get chapter after saving modifications
    $chapter = $chapterManager->getChapter($id);
 

    
    require('views/backend/chapterEdit.php');

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

function uploadFile($post_parameters)
{
    redirectIfNotLoggedin();
    if (isset($_FILES['file'])) {
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
    }
   
    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    //Taille max que l'on accepte
    $maxSize = 4000000;
    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
        move_uploaded_file($tmpName, 'public/images/' . $name);
        echo $name;
        exit();
    } else {
        http_response_code(400); // http error code to let the javscript know there's been an error
        echo "Une erreur est survenue";
        exit();
    }
}
