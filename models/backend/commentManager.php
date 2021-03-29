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
            $comments= mysqli_fetch_all($result, MYSQLI_ASSOC);
        
            return $comments;
        }

       
        public function getComments(){
            global $db;
            $req = $db->prepare('
          SELECT *
          FROM comment');
            $req->execute();
            $comments = $req->fetchAll();
            $req->closeCursor();
            return $comments;
    
         }
        
        public function deleteComment($id)
        {
            // use global $conn object in function
            global $db;
            $sql = "DELETE FROM comment WHERE id= $id";
            if (mysqli_query($db, $sql)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting comment: " . mysqli_error($db);
            }
        }

        public function validateComment($id)
        {
            // use global $conn object in function
            global $db;
            $sql = "VALIDATE FROM comments WHERE id= $id";
            if (mysqli_query($db, $sql)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($db);
            }
        }
       
    }
?>