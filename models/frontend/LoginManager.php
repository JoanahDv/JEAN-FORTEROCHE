<?php
require('models/connect.php');

class LoginManagerFrontend
{
    public function getUser($username, $password)
    {
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM user
            WHERE username = ? AND password = ?
        ');
        $result = $req->execute(array($username, $password));
        $req->closeCursor();
        return $result;
    }
    
}
?>
