<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>


<?php
include "Models/Employee.php";
include "Services/EmployeeManager.php";

use Services\EmployeeManager;
use Model\Employee;

$employeeManager = new EmployeeManager();
$employeeManager->addEmployee(new Employee('Gate', 'Bill', '15-03-1968','New York', 'CEO Microsoft'));
$employeeManager->addEmployee(new Employee('Bezos', 'Jeff', '19-05-1972','California', 'CEO Amazone'));
$employees = $employeeManager->displayDetail();
foreach ($employees as $employee){
    echo $employeeManager->displayDetail()."<br>";
}

foreach ($employees as $employee){
    if ($employee->getName() !== 'Bill'){
        $employeeManager = array_splice
    }
}
?>