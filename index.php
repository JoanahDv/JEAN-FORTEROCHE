<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');


// require('controllers/frontend/login.php');

if (isset($_GET['action'])) { // action is set
    //show author page
    if ($_GET['action'] == 'author') {
        author();
        //get chapter and chapter id
    } elseif ($_GET['action'] == 'chapter') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            chapter($_GET['id']);
        }
        //get all chapters and pages
    } elseif ($_GET['action'] == 'chapters') {
        chapters($_GET['page']);
    } elseif ($_GET['action'] == 'comment') {
        comment($_POST);
    } elseif ($_GET['action'] == 'contact') {
        contact($_POST);
    } elseif ($_GET['action'] == 'login') {
        login($_POST);

        // BACKEND  ACTIONS
    } elseif ($_GET['action'] == 'new_chapter') {
        newChapter($_POST);

    } elseif ($_GET['action'] == 'dashboard') {
        dashboard();

    } elseif ($_GET['action'] == 'logout') {
        logout();
    
    }elseif($_GET['action'] == 'editChapter') {
        editChapter($_POST);
        
    } elseif ($_GET['action'] == 'deleteChapter') {
        deleteChapter($_POST);

    } elseif ($_GET['action'] == 'deleteComment') {
        deleteComment($_POST);

        //FLAG THE COMMENT FRONT END 
    } elseif ($_GET['action'] == 'flagComment') {
        flagComment($_POST);

        //VALIDATE THE COMMENT BACK END 
    } elseif ($_GET['action'] == 'validateComment') {
        validateComment($_POST);

    } else { // unknown action
        echo 'Error : unknown action : ' . $_GET['action'];
        die();
    }
} else { // no action is set
    welcome(); // default to welcome page
}

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
