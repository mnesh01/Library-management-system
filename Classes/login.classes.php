<?php
session_start();
class Login extends Dbh
{

    protected function getUser($libid, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT libid,Roles FROM users WHERE libid = ? OR email = ?;');

        if (!$stmt->execute(array($libid, $libid))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            echo "$libid , $pwd";
            header("location: ../index.php?error=usernotfound");
            
            exit();
        }

        $pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $pwd = $pwd[1]["pwd"];
        


        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE libid = ? OR email = ? AND pwd = ?;');

        if (!$stmt->execute(array($libid, $libid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($user as $user){
            $userid=$user['users_id'];
            $roles = $user['Roles'];
            $name=$user['name'];
        }

        session_start();
        $_SESSION['users_id'] = $userid;
        $_SESSION['name'] = $name;
        $_SESSION['role']=$roles;
       
       

        $stmt = null;
    }
}
