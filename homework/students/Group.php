<?php
require_once "autoload.php";
require_once "Student.php";
class Group
{
    private $group_name, $students = [];
    public function __construct($group_name, $students)
    {
        $this->group_name = $group_name;
        $this->students = $students;
    }
    public function getStudents()
    {
        return $this->students;
    }
    public function setStudents($students): self
    {
        $this->students = $students;
        return $this;
    }
    public function getGroup_name()
    {
        return $this->group_name;
    }
    public function setGroup_name($group_name): self
    {
        $this->group_name = $group_name;
        return $this;
    }
    public function get_average_year()
    {
        $a_year = 0;
        foreach ($this->students as $key => $student) {
            $a_year += $student->getYear();
        }
        return $a_year / count($this->students);
    }
    public function get_min_year()
    {
        $min_year = $this->students[0]->getYear();
        foreach ($this->students as $key => $student) {
            if ($student->getYear() < $min_year) {
                $min_year = $student->getYear();
            }
        }
        return $min_year;
    }
    public function get_max_year()
    {
        $max_year = $this->students[0]->getYear();
        foreach ($this->students as $key => $student) {
            if ($student->getYear() > $max_year) {
                $max_year = $student->getYear();
            }
        }
        return $max_year;
    }
    public function get_longest_surname()
    {
        $ls_student = $this->students[0];
        foreach ($this->students as $key => $student) {
            if (strlen($student->getSurname()) > strlen($ls_student->getSurname())) {
                $ls_student = $student;
            }
        }
        return $ls_student;
    }
    public function get_students_by_first_name_letter($letter)
    {
        $students = [];
        foreach ($this->students as $key => $student) {
            if ($student->getName()[0] == $letter) {
                $students[] = $student;
            }
        }
        return $students;
    }
    public function get_students_by_first_surname_letter($letter)
    {
        $students = [];
        foreach ($this->students as $key => $student) {
            if ($student->getSurname()[0] == $letter) {
                $students[] = $student;
            }
        }
        return $students;
    }
    public function get_max_comments_words()
    {
        $student_target = $this->students[0];
        foreach ($this->students as $key => $student) {
            $new_comment = $student->getComment();
            if (strlen($new_comment) > strlen($student_target->getComment())) {
                $student_target = $student;
            }
        }
        return $student_target;
    }
}

$group = new Group("C# Asp.Net", $array_students);
echo $group->get_average_year();
var_dump($group->get_max_comments_words());
echo $group->get_max_year();
echo $group->get_min_year();
print_r($group->get_students_by_first_surname_letter("S"));
print_r($group->get_students_by_first_name_letter("B"));
print_r($group->get_longest_surname());