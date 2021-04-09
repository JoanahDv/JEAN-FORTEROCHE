<?php
 require('models/connect.php');

  class ChapterManagerBackend
  {
    function createChapter($title, $body, $number, $draft)
    {
      global $db; // defined in models/connect.php
      $query = $db->prepare('
            INSERT INTO chapter(title, body, published_date, number, draft)
            VALUES(?, ?, NOW(), ?, ?)
          ');
      $result = $query->execute(array($title, $body, $number, (bool) $draft));
      return $result;
    }

    function getChapter($id)
    {
      // use global $conn object in function
      global $db;
      $sql = "SELECT * FROM chapters WHERE id = $id";
      $result = mysqli_query($db, $sql);

      // fetch all posts as an associative array called $posts
      $chapter = mysqli_fetch_all($result, MYSQLI_ASSOC);

      return $chapter;
    }

    function getChapters(){
        global $db;
        $req = $db->prepare('
      SELECT *
      FROM chapter');
        $req->execute();
        $chapters = $req->fetchAll();
        $req->closeCursor();
        return $chapters;

     }
      

     public function deleteChapter($id)
    {
        global $db;
        $req = $db->prepare('
            DELETE 
            FROM chapter
            WHERE id = ?
        '); // build prepared statement
        $req->execute(array($id)); // bind parameters and execute query ($id replaces the question mark "?")
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        return $result;
    }


    // function deleteChapter($id)
    // {
    //   // use global $conn object in function
    //   global $db;
    //   $sql = "DELETE FROM chapters WHERE id= $id";
    //   if (mysqli_query($db, $sql)) {
    //     echo "Record deleted successfully";
    //   } else {
    //     echo "Error deleting record: " . mysqli_error($db);
    //   }
    // }

    function getLatestChapters()
    {
      global $db;
      $sql = "SELECT * FROM chapters ORDER BY published_date DESC LIMIT 2";
      $result = mysqli_query($db, $sql);
      $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);

      return $chapters;
    }
    
    function editChapter ($id)
    
    {
      global $db;
      $$sql = "SELECT FROM chapters WHERE id= $id";
      $result = mysqli_query($db, $sql);
      $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);
      return $chapters;
    }

    
    //FOR COMMENT

    function addComment($chapter_id, $comment, $author)
    {
      global $db; // defined in models/connect.php
      $comment = $db->prepare('INSERT INTO comments (chapter_id, comment, comment_date, author) VALUES (?,?,NOW(),?)');
      $affectedLines = $comment->execute(array($chapter_id, $comment, $author));
    }
    // function editChapter($id, $title, $body, $published_date, $number)
    // {

    // }

    // function deleteChapter($id)
    // {
    // }
  }
  ?>