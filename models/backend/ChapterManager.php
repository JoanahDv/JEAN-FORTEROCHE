<?php
require('models/connect.php');

class ChapterManagerBackend
{
  function createChapter($title, $body, $image, $draft)
  {
    global $db; // defined in models/connect.php
    $numberQuery = $db->query('SELECT MAX(number) FROM chapter'); // select max chapter number
    $number = $numberQuery->fetch()[0];
    $query = $db->prepare('
        INSERT INTO chapter(title, body, published_date, number, draft, image)
        VALUES(?, ?, NOW(), ?, ?, ?)
      ');
    $result = $query->execute(array($title, $body, $number + 1, (int) $draft, $image));
    return $result;
  }

  function getChapter($id)
  {
    // use global $conn object in function
    global $db;
    $req = $db->prepare('
        SELECT * 
        FROM chapter
        WHERE id = ?
    '); // build prepared statement
    $req->execute(array($id)); // bind parameters and execute query ($id replaces the question mark "?")
    $result = $req->fetch(); // fetch result
    $req->closeCursor();
    return $result;
  }

  function getChapters()
  {
    global $db;
    $req = $db->prepare('
      SELECT *
      FROM chapter');
    $req->execute();
    $chapters = $req->fetchAll();
    $req->closeCursor();
    return $chapters;
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
  function getLatestNumber()
  {
    global $db;
    $sql = "SELECT * FROM chapters ORDER BY published_date DESC LIMIT 2";
    $result = mysqli_query($db, $sql);
    $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

  function editChapter($title, $body, $draft, $image, $id)
  {
    global $db; // defined in models/connect.php
    $query = $db->prepare('
        UPDATE chapter
        SET title = ?, body = ?, draft = ?, image = ?
        WHERE id = ?
      ');
    $result = $query->execute(array($title, $body, (int)$draft, $image, $id));
    return $result;
  }

  // function editChapter($id,)

  // {
  //   global $db;
  //   $$sql = "UPDATE";
  //   $result = mysqli_query($db, $sql);
  //   $chapters = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //   return $chapters;
  // }

}
