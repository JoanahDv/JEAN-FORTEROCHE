<?php
    require('models/connect.php');
     class ContactManagerBackend
    {
       
        public function getContact($id)
        {
            // use global $conn object in function
            global $db;
            $sql = "SELECT * FROM contact WHERE id = $id";
            $result = mysqli_query($db, $sql);
        
            // fetch all posts as an associative array called $posts
            $contact= mysqli_fetch_all($result, MYSQLI_ASSOC);
         
            return $contact;
        }
        public function getContacts(){
            global $db;
            $req = $db->prepare('
          SELECT *
          FROM contact');
            $req->execute();
            $contacts = $req->fetchAll();
            $req->closeCursor();
            return $contacts;
    
         }
    }
    ?>