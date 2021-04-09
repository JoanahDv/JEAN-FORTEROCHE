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
        $req->execute(array($username, $password));
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        return $result;
    }

    
    
}
?>
