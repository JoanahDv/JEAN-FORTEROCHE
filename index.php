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

    //comment form
    // } else if ($_GET)
    } elseif ($_GET['action'] == 'chapters'){
        chapters($_GET['page']);
    } elseif ($_GET['action'] == 'new_chapter') {
        newChapter($_POST);
    }
    elseif($_GET['action'] == 'comment'){
        comment($_POST);

        // CONTACT FORM
    }elseif ($_GET['action'] == 'contact') {
        contact($_POST); // adding all parameters in contact.php front end
    
    } elseif ($_GET['action'] == 'login'){
        login($_POST);

    } elseif ($_GET['action'] == 'dashboard') {
        dashboard($_POST);
        
        //backend 

    }elseif ($_GET ['action'] == 'comments'){
        // comments($_POST);
    
    } else { // unknown action
        echo 'error';
        die();
    }
}
else { // no action is set
    welcome(); // default to welcome page
}

?>