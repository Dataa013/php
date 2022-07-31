<?php


// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic 

    // $a += $b; echo $a;

// Assignment with math operators
//
// Increment operator

// $a++;
// echo $a;

// Decrement operator

// $a--;
// echo $a;
// echo ++$a;
// Number checking functions
 
// Conversion

    $strNumber = '12.34';

    $number = floatval($strNumber);
    $int = intval($strNumber);
    $num = (float)$strNumber; // modern method ;

    var_dump($num);
    var_dump($number).'<br/>';
    var_dump($int);

// Number functions
echo '<br/>';
echo abs(-15);
echo pow(5, 2).'<br/>'; // kvadratshi akvana 5 - aris cifri - 2 aris kvadrati ;
echo pow(11, 2).'<br/>';
echo sqrt(16).'<br/>'; // fesvis amogeba;


// Formatting numbers

$number = 123456.12345;
echo number_format($number, 4, '.', ',');

// https://www.php.net/manual/en/ref.math.php,