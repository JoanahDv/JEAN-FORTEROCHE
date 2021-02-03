<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
