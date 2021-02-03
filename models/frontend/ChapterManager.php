<?php

class ChapterManager
{
    function getChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query('
            SELECT *
            FROM chapter
        ');
        $result = $req->fetchall();
        $req->closeCursor();
        return $result;
    }

    function getChapter($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('
            SELECT *
            FROM chapter
            WHERE id = ?
        '); // build prepared statement
        $req->execute(array($id)); // bind parameters and execute query
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        return $result;
    }

    private function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $db;
    }
}

?>