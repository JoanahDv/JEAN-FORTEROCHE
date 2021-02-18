<?php
    require('models/connect.php');

    class CommentManagerBackend
    {
        function creatcomment($comment, $comment_date, $author) 
        {
            function creatcomment($comment, $comment_date, $author) 
            {
              global $db; // defined in models/connect.php
              $comment= $db->prepare('INSERT INTO comments(comment, comment_date, author) VALUES(?, ?, NOW(), ?');
              $affectedLines = $comment->execute(array($comment, $comment_date, $author));
            //   return $result; 
            } 
           
            // global $db; // defined in models/connect.php
            // insert image then get image_id
            // insert chapter with function parameters plus image_id
            // $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            // $affectedLines = $comments->execute(array($postId, $author, $comment));
            // return $result; 
        }       
        function getComment($id) {
            // use global $conn object in function
            global $db;
            $sql = "SELECT * FROM comments WHERE id = $id";
            $result = mysqli_query($db, $sql);
        
            // fetch all posts as an associative array called $posts
            $comments= mysqli_fetch_all($result, MYSQLI_ASSOC);
        
            return $comments;
        }
        

        function deleteComment($id) {
            // use global $conn object in function
            global $db;
            $sql = "DELETE FROM comments WHERE id= $id";
            if (mysqli_query($db, $sql)) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . mysqli_error($db);
            }
        }

        // function editChapter($id, $title, $body, $published_date, $number)
        // {
        // }

        // function deleteChapter($id)
        // {
        // }
    }
?>