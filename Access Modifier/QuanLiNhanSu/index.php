<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
use Services\EmployeeManager;
use Models\Employee;
EmployeeManager::add(new Employee("Truong", "Vo", "13/11", "28NTP", "CEO"));
EmployeeManager::add(new Employee("Qui", "Hoang", "09/06", "28NTP", "Manager"));
$employees = EmployeeManager::getEmployee();
foreach ($employees as $employee) {
    echo $employee->getName() . "<br/>";
    echo $employee->getLastname() . "<br/>";
    echo $employee->getDob() . "<br/>";
    echo $employee->getAdress() . "<br/>";
    echo $employee->getJob() . "<br/>";
}