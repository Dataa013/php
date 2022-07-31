<?php

// What is a variable
$name = 'Data';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = 'php';
$number = 300;

// Variable types

echo $name.'<br/>';
echo $age.'<br/>';
echo $isMale.'<br/>';
echo $height.'<br/>';
echo $salary.'<br/>';
echo $number.'<br/>' ;

// Declare variables

// Print the variables. Explain what is concatenation

// Print types of the variables
echo gettype($number).'<br/>';
echo gettype($name).'<br/>';
echo gettype($age).'<br/>';
echo gettype($isMale).'<br/>';
echo gettype($height).'<br/>';
echo gettype($salary).'<br/>';

// Print the whole variable

// var_dump($name, $height, $age , $isMale).'<br/>';

// Change the value of the variable
$name = false;
$number = true;
// Print type of the variable
echo gettype($name).'<br/>';
echo gettype($number).'<br/>';
// Variable checking functions
// Check if variable is defined
var_dump(isset($number)).'<br/>';
var_dump($age).'<br/>';

echo is_string($salary).'<br/>';
// Constants

define('PI', 'hello');
echo PI;
echo defined('PI').'<br/>';


// Using PHP built-in constants

echo SORT_ASC;
echo SORT_DESC;
echo PHP_INT_MAX;
