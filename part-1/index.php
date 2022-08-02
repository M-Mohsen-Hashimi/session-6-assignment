<?php

include('calculator.php');
include('multiplication_table.php');
include('rectangle.php');

MultiplicationTable::create();

$rectangle_obj = new Rectangle();
$rectangle_obj->draw_rectangle(9,9);

$calculator_obj= new Calculator();

$calculator_obj->sum(30, 20);
$calculator_obj->sub(30, 20);
$calculator_obj->multiplication(30, 20);
$calculator_obj->division(30, 20);