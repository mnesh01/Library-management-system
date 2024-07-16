<?php

class Signup extends Dbh
{

    protected function setUser($name, $libid, $email, $pwd)
    {
        $stmt = $this->connect();
        
        $stmt = $this->connect()->prepare("INSERT INTO users (name, libid, email, pwd) VALUES (?, ?, ?, ?);");
        if (!$stmt->execute(array($name, $libid, $email, $pwd))) {
            echo "IF ";
            $stmt = null;
            exit();
        }
    }

    protected function checkUser($libid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT libid FROM users WHERE libid = ? OR email = ?;');

        if (!$stmt->execute(array($libid, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }


        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
