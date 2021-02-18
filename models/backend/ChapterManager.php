 <?php
    require('models/connect.php');

    class ChapterManagerBackend
    {
        function createChapter($title, $body, $published_date, $number) 
        {
            function createChapter($title, $body, $published_date, $number) 
            {
              global $db; // defined in models/connect.php
              $chapter= $db->prepare('INSERT INTO chapters(title, body, published_date, number) VALUES(?, ?, NOW(), ?');
              $affectedLines = $chapter->execute(array($title, $body, $number));
            //   return $result; 
            } 
           
            // global $db; // defined in models/connect.php
            // insert image then get image_id
            // insert chapter with function parameters plus image_id
            // $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            // $affectedLines = $comments->execute(array($postId, $author, $comment));
            // return $result; 
        }       
        function getChapter($id) {
            // use global $conn object in function
            global $db;
            $sql = "SELECT * FROM chapters WHERE id = $id";
            $result = mysqli_query($db, $sql);
        
            // fetch all posts as an associative array called $posts
            $chapters= mysqli_fetch_all($result, MYSQLI_ASSOC);
        
            return $chapters;
        }

        function deleteChapter($id) {
            // use global $conn object in function
            global $db;
            $sql = "DELETE FROM chapters WHERE id= $id";
            if (mysqli_query($db, $sql)) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . mysqli_error($db);
            }
        }
        function getLatestChapters() {
          global $db;
          $sql = "SELECT * FROM chapters ORDER BY published_date DESC LIMIT 2";
          $result = mysqli_query($db, $sql);
          $chapters= mysqli_fetch_all($result, MYSQLI_ASSOC);
      
          return $chapters;
      }

        // function editChapter($id, $title, $body, $published_date, $number)
        // {
          
        // }

        // function deleteChapter($id)
        // {
        // }
    }
?>