<?php
require_once "autoload.php";
// require_once "Employee.php";
// require_once "Company.php";

$employee = new Employee("Vyacheslav", "Shcherbak");
// $employee->name = "Bohdan";
$employee->set_age(22);

$employee1 = new Employee("Yana", "Butova");
$employee1->set_age(23);
// echo "Welcome ".$employee->get_name()." ".$employee->get_surname()."!\n";
// echo "You're, ".$employee->get_age()." years old!\n";
// echo $employee;

$company = new Company("RoCorp", [$employee, $employee1]);
echo $company."\n";
$employee = new Employee("Yarik", "Dudka");
$company->add_employee($employee);
echo $company;