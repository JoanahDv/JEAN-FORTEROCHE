<?php

class ChapterManagerBackend
{
    function createChapter($title, $body, $published_date) 
    {
        $db = $this->dbConnect();
        // insert image then get image_id
        // insert chapter with function parameters plus image_id
        // $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        // $affectedLines = $comments->execute(array($postId, $author, $comment));
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