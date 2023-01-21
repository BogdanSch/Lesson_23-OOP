<?php

class User
{
    protected $age;
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function GetLogin()
    {
        return $this->login;
    }
    public function SetLogin($login)
    {
        $this->login = $login;
    }
    public function SetPassword($password)
    {
        return $this->password = $password;
    }
    public function IsValid($login, $password)
    {
        return $this->login == $login && $this->password == $password;
    }
    public function __toString()
    {
        return $this->login . " " . $this->password;
    }
}

// $user = new User("b.sch20", "password");
// echo $user . "\n";
// $user->SetPassword("qwerty");
// // if ($user->IsValid("b.sch20", "qwerty")){
// //     echo "\nUser profile is correct";
// // }
// print $user->IsValid("b.sch20", "qwerty") ? "Correct" : "Incorrect";