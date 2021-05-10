<?php
require('models/connect.php');

class CommentManagerBackend
{

    public function getComment($id)
    {
        // use global $conn object in function
        global $db;
        $sql = "SELECT * FROM comment WHERE id = $id";
        $result = mysqli_query($db, $sql);

        // fetch all posts as an associative array called $posts
        $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $comments;
    }


    public function getComments()
    {
        global $db;
        $req = $db->prepare('
          SELECT *  
          FROM comment');
        $req->execute();
        $comments = $req->fetchAll();
        $req->closeCursor();
        // get chapter for each comment
        foreach ($comments as &$comment) { // reference to comment to be able to add the chapter of each comment
            $chapterManager = new ChapterManagerBackend();
            $chapter = $chapterManager->getChapter($comment["chapter_id"]);
            $comment["chapter"] = $chapter; // add chapter to comment array
        }
        return $comments;
    }

    public function deleteComment($id)
    {
        global $db;
        $sql = $db->prepare('DELETE FROM comment WHERE id = ?');
        $affectedLines = $sql->execute(array($id));
    }

    public function validateComment($id)
    {
        global $db;
        $sql = $db->prepare('UPDATE comment SET flag = 0, to_validate = 0 WHERE id = ?');
        $affectedLines = $sql->execute(array($id));
    }
    
}
