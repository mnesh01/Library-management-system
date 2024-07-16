<?php
session_start();
class loginContr extends Login
{

    private $libid;
    private $pwd;

    public function __construct($libid, $pwd)
    {
        $this->libid = $libid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        
        $this->getUser($this->libid, $this->pwd);
    }

    private function emptyInput()
    {

        if (empty($this->libid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
