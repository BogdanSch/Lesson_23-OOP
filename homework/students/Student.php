<?php
class Student
{
    private $name, $surname, $year, $address, $comment;
    public function __construct($name, $surname, $year, $address, $comment)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->year = $year;
        $this->address = $address;
        $this->comment = $comment;
    }
	public function getName() {
		return $this->name;
	}
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	public function getSurname() {
		return $this->surname;
	}
	public function setSurname($surname): self {
		$this->surname = $surname;
		return $this;
	}
	public function getYear() {
		return $this->year;
	}
	public function setYear($year): self {
		$this->year = $year;
		return $this;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setAddress($adres): self {
		$this->address = $adres;
		return $this;
	}
	public function getComment() {
		return $this->comment;
	}
	public function setComments($comment): self {
        $this->comment = $comment;
		return $this;
	}
}

$studen1 = new Student("Bohdan", "Scherbak", 2007, "Address", "My comment top");
$studen2 = new Student("Yana", "Novosad", 2006, "Address", "My comment here");
$studen3 = new Student("Yevhen", "Tutuinik", 2008, "Address", "My comment the best");
$studen4 = new Student("Igor", "Balitskyi", 2005, "Address", "My comment the longest");

$array_students = [
    $studen1,
    $studen2,
    $studen3,
    $studen4
];