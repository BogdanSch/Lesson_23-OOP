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
        $this->users[] = $user;
    }
    public function __toString()
    {
        return "{$this->name}";
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

$users = new Users("PHP WEB", [$user, $user1, $user2, $user3]);
echo $users;
print $users->IsValid("b.sch20", "qwerty") ? "Correct" : "Incorrect";
$users->AddUser(new User("omg2", "admin"));

