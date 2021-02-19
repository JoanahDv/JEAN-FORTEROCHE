<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');
require('controllers/backend/login.php');
 

if (isset($_GET['action'])) { // action is set
    if ($_GET['action'] == 'author') {
        author();
    } elseif ($_GET['action'] == 'chapter') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            chapter($_GET['id']);
        } else {
            chapters();
        }
    } elseif ($_GET['action'] == 'contact') {
        contact();
    } elseif ($_GET['action'] == 'new_chapter') {
        newChapter($_POST);
    } elseif ($_GET['action'] == 'login'){
        login($_POST);
    } else { // unknown action
        echo 'Erreur : action inconnue';
        die();
    }
} else { // no action is set
    welcome(); // default to welcome page
}
?>