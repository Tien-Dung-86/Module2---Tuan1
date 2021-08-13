<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator) : float|int
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
            case '-':
                return $firstOperand - $secondOperand;
            case '*':
                return $firstOperand * $secondOperand;
            case '/':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}