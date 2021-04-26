<?php
 require('models/connect.php');

  class ChapterManagerBackend
  {
    function createChapter($title, $body, $draft)
    {
      global $db; // defined in models/connect.php
      $numberQuery = $db->query('SELECT COUNT(*) FROM chapter');
      $number = $numberQuery->fetch()[0];
      $query = $db->prepare('
        INSERT INTO chapter(title, body, published_date, number, draft)
        VALUES(?, ?, NOW(), ?, ?)
      ');
      $result = $query->execute(array($title, $body, $number+1, (int) $draft));
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
    function getLatestChapters()
    {
      global $db;
      $sql = "SELECT * FROM chapters ORDER BY published_date DESC LIMIT 1";
      $result = mysqli_query($db, $sql);
      $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);

      return $chapters;
      // add to post "latest chapter considering the draft.
    }
    function getLatestNumber(){
      global $db;
      $sql = "SELECT * FROM chapters ORDER BY published_date DESC LIMIT 2";
      $result = mysqli_query($db, $sql);
      $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    function editChapter ($id)
    
    {
      global $db;
      $$sql = "SELECT FROM chapters WHERE id= $id";
      $result = mysqli_query($db, $sql);
      $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);
      return $chapters;
    }

  }
