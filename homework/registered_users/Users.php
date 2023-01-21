<?php
require_once "User.php";
class Users
{
    private $name;
    private $users = [];

    public function __construct($name = "", array $users)
    {
        $this->name = $name;
        $this->users = $users;
    }
	public function getUsers() {
		return $this->users;
	}
    public function getUser($index) {
        try {
            $user = $this->users[$index];
            return $user;
        } catch (Exception $e) {
            echo "Index's out of range";
        }
	}
	public function setUsers($users): self {
		$this->users = $users;
		return $this;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
    public function AddUser(User $user){
        if($this->checkLogin($user->GetLogin())){
            echo "User with this login already exists!";
        }else{
            $this->users[] = $user;
        }
    }
    public function RemoveUser($index){
        try {
            unset($this->users[$index]);
        } catch (Exception $e) {
            echo "Index's out of range";
        }
    }
    public function __toString()
    {
        $str = "{$this->name} ";
        foreach ($this->users as $key => $user) {
            $str .= "{$user->GetLogin()} ";
        }
        return $str;
    }
    private function CheckLogin($login){
        foreach ($this->users as $key => $user) {
            if ($user->GetLogin() == $login)
                return true;
        }
        return false;
    }
    public function IsValid($login, $password){
        foreach ($this->users as $key => $user) {
            if ($user->IsValid($login, $password))
                return true;
        }
        return false;
    }
}
$user = new User("b.sch20", "qwerty");
$user1 = new User("s.sch20", "password");
$user2 = new User("g.hch20", "password");
$user3 = new User("fun20", "password");

$users = new Users("PHP-WEB", [$user, $user1, $user2, $user3]);
echo $users."\n";
print $users->IsValid("b.sch20", "qwerty") ? "Correct" : "Incorrect";
$users->AddUser(new User("omg2", "admin"));
$users->RemoveUser(1);
echo $users."\n";
echo $users->getUser(0);

