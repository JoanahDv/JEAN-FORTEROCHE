<?php
 
class commentManagerFrontend
{
    public function getCommentsForChapter($chapter_id) {
        global $db;
        $sql = $db->prepare('SELECT * FROM comment WHERE chapter_id = ?');
        $sql->execute(array($chapter_id));
        $comments = $sql->fetchall();
        return $comments;
    }

    public function createComment($comment, $author,  $email, $chapter_id) {
        // function creatcomment($comment, $comment_date,$comment_time, $author)
        
          global $db; // defined in models/connect.php
          $sql = $db->prepare('
            INSERT INTO comment (comment, author, email, comment_date,chapter_id) 
            VALUES(?, ?, ?, NOW(), ?)
          ');
          $affectedLines = $sql->execute(array($comment, $author, $email, $chapter_id));
          //result is commented out
    }

    public function flagComment($comment) {
      // function creatcomment($comment, $comment_date,$comment_time, $author)
      
        global $db; // defined in models/connect.php
        $sql = $db->prepare('
          INSERT INTO comment (comment, author, email, comment_date,chapter_id) 
          VALUES(?, ?, ?, NOW(), ?)
        ');
        $affectedLines = $sql->execute(array($comment));
        //result is commented out
  }



    // public function getCommentPagination()
    // {
    //     global $db;
    //     // count all chapters
    //     $req = $db->query('
    //         SELECT COUNT(*)
    //         FROM comments
    //     ');
    //     $numberOfComments = $req->fetch()[0]; // fetch result
    //     $numberOfComments = ceil($numberOfChapters/6);
    //     return $numberOfPages;
    // }
}
?>