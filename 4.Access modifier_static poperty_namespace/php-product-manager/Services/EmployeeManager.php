<?php

namespace Services;

use Model\Employee;

class EmployeeManager
{
    protected array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee){
        $this->employees[] = $employee;
    }

    public function getEmployee(){

    }

    public function displayDetail($employee){
        echo getName();
    }

    public function delEmployee(){
        if(count($this->employees) > 0){
            $this->employees = array_pop($this->employees);
        }
    }

}