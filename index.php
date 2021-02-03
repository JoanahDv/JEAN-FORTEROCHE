<?php


 
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');


if (isset($_GET['action'])) {   
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
    }elseif ($_GET['action'] == 'login'){
        login();

    } else {
        echo 'Erreur : action inconnue';
        die();
    }
} else {
    welcome();
}
?>