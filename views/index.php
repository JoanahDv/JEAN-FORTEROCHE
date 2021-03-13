<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');
// require('controllers/frontend/login.php');
 

if (isset($_GET['action'])) { // action is set
    if ($_GET['action'] == 'author') {
        author();
    } elseif ($_GET['action'] == 'chapter') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            chapter($_GET['id']);
        }
    } elseif ($_GET['action'] == 'chapters') {
        chapters($_GET ['page']);
    } elseif ($_GET['action'] == 'contact') {
        contact($_POST);
    } elseif ($_GET['action'] == 'new_chapter') {
        newChapter($_POST);
    
    }elseif($_GET['action'] == 'comment'){
            comment($_POST);
    } elseif ($_GET['action'] == 'login'){
        login($_POST);
    } else { // unknown action
        echo 'Erreur : action inconnue : ' . $_GET['action'];
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

