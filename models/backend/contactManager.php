<?php
    require('models/connect.php');

    class contactManagerBackend
    {
        public function sendMessage($id)
        {
            // use global $conn object in function
            global $db;
            $sql = "SELECT * FROM contact WHERE id = $id";
            $result = mysqli_query($db, $sql);

        }
    }
    ?>