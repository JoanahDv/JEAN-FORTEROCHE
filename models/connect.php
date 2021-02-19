<?php

try
{
    $db = new PDO('mysql:host=' . DB_HOSTNAME . ';dbname=' . DB_NAME . ';charset=utf8', DB_USERNAME, DB_PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
