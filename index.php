<?php


require 'controller/calculator.php';

$a = new \controller\Calculator();

$a->addition(5, 2);
$a->subtraction(5, 2);
$a->multiplication(5, 2);
$a->division(5, 2);