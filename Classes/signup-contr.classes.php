<?php

class SignupContr extends Signup
{

    private $name;
    private $libid;
    private $email;
    private $pwd;
    private $pwdRepeat;
    private $role; // TODO check role

    public function __construct($name, $libid, $email, $pwd, $pwdRepeat)
    {
        $this->name = $name;
        $this->libid = $libid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidlibid() == false) {
            // echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if ($this->libidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->name, $this->libid, $this->email, $this->pwd);
    }

    private function emptyInput()
    {

        if (empty($this->name) || empty($this->libid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidlibid()
    {

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->libid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {

        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function libidTakenCheck()
    {

        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
