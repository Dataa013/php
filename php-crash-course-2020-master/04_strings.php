<?php

// Create simple string
// $name = 'php';
// $string = 'hello '.$name.' i am 19';
// $string2 = "hello $name i am 19" ;

// echo $string.'<br/>';
// echo $string2.'<br/>';
// String concatenation

// String functions

// echo "hello "." php" . " bye ";

// Multiline text and line breaks

// $object = "      hello php      ";
// echo "1 - " . strlen($object) . '<br>' ;
// echo "1 - " . trim($object) . '<br>' ; // space delete   
// echo "1 - " . rtrim($object) . '<br>' ; // space delete right 
// echo "1 - " . ltrim($object) . '<br>' ; // space delete   left
// echo "1 - " . str_word_count($object) . '<br>' ; // how many word 



// Mu
// $number1 = 100;
// $number2 = 400200;
// echo str_pad($number1, 10, '0', STR_PAD_LEFT).'<br>';
// echo str_pad($number2, 10, '0', STR_PAD_LEFT);


// $longText = "hello,
//  my name is data,
//   i love my self,
//   opppps";


$longText = "hello,
 my name is <b>data</b>,
  i love my <b>self</b>,
  opppps";

    echo nl2br($longText).'<br>'; 
    echo htmlentities($longText).'<br>';
    echo nl2br(htmlentities($longText)).'<br>';
    echo html_entity_decode("i love my &lt;b&gt;self&lt;/b&gt;,").'<br>';
    echo html_entity_decode("my name is &lt;b&gt;data&lt;/b&gt;,").'<br>';
    // echo html_entity_decode(htmlentities($longText));
    echo html_entity_decode(htmlentities($longText));



// https://www.php.net/manual/en/ref.strings.php