<?php 

if ($_GET['action'] == 'Author') {
    require 'views/frontend/Author.php';
} else {
    require 'welcome.php'; 
}

?>