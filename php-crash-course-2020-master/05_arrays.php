<?php

// Create array
$fruits = ["php", "apple", "reaect"];


// Print the whole array
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Get element by index
echo $fruits[1];

// Set element by index
$fruits[1] = 'js';
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Check if array has element at index 2
var_dump(isset($fruits[2]));
// Append element

$fruits[] = 'orange'; // array damateba
echo '<pre>';
print_r($fruits);
echo '</pre>';

// Print the length of the array
// Add element at the end of the array
echo count($fruits).'<br>';

// Remove element from the end of the array
echo array_pop($fruits).'<br>';  // bolo elementis amogeba masividan;

echo '<pre>';
    print_r($fruits);
'</pre>';

// masividan bolo elementis amogeba;
array_unshift($fruits, 'alloft'); // massivshi pirvel elementad damateba;

echo '<pre>';
print_r($fruits);
'</pre>';
// Add element at the beginning of the array
// Remove element from the beginning of the array

  echo array_shift($fruits); // pirveli elementis camogeba

  echo '<pre>';
  print_r($fruits);
  '</pre>';

// Split the string into an array
    $string = "Banana,Apple,Peach";  // cvladebis masivebshi gadakvana;
    $fruits2 = explode(',', $string);

    echo '<pre>';
        print_r($fruits2);
    '</pre>';

// Combine array elements into string
    echo implode("&", $fruits2).'<br>'; // cladebis sheerteba  (Banana&Apple&Peach);
// Check if element exist in the array
    var_dump(in_array('Apple', $fruits2)); // arsebobs tu ara 'Apple' romelime function shi;
    in_array('black', $fruits2); // false;
// Search element index in the array

    echo array_search('Apple', $fruits2); // meramdene elementia apple fruits2 cvladidan;
// Merge two arrays

// $newArray = array_merge($fruits, $fruits2); 
$newArray = [...$fruits, ...$fruits2]; // masivebis gaertianeba;


echo '<pre>';
    print_r($newArray);
'</pre>';


// Sorting of arry (Reverse order also)

echo '<pre>';
    print_r($fruits2);
'</pre>';
sort($fruits2);     // shetanili stringebis change
echo '<pre>';
    print_r($fruits2);
'</pre>';
rsort($fruits2);
echo '<pre>';
    print_r($fruits2);
'</pre>';

// https://www.php.net/manual/en/ref.array.php

    $numbers = [1,2,3,4,5,6,7,8];
    // $events = array_filter($numbers, function($n) {
    //     return $n % 2 === 0; // tu n is 2 gakofis shedegad migebuli nashti tolia 0 is anu nashti ar aris mashin function aris true da dabechdavs mxolod luc cifrebs
    // });

    $events = array_filter($numbers, fn($n) => $n % 2 === 0);

    echo '<pre>';
        print_r($events);
    '</pre>';



   $newArray = array_map(fn($n) => $n + 1, $numbers);  // map methodi 1+;
   echo '<pre>';
   print_r($newArray);
   '</pre>';


    $sum = array_reduce($numbers, fn($carry, $n) => $carry + $n);  // jami numberis
    echo $sum;


// ============================================
// Associative arrays
// ============================================

// Create an associative array

$personOne = [
    'name' => 'data',
    'username' => 'gvaradze',
    'age' => 19,
    'hobbies' => ['Tennis']
];


echo '<pre>';
   print_r($personOne);
'</pre>';

echo $personOne['name'].'<br/>';

$personOne['name'] = 'react';

echo '<pre>';
    print_r($personOne);
'</pre>';

// Get element by key

 echo'<pre>';
     var_dump(isset($personOne['age']));
'</pre>';

// Set element by key

echo '<pre>'; 
    print_r(array_keys($personOne));   // array key amogeba;
'</pre>';


echo '<pre>';
    print_r(array_values($personOne)); //values amogeba ;
'</pre>';

ksort($personOne);

echo '<pre>';
print_r($personOne);
 '</pre>';




 $todos = [
    ['title' => 'todo 1', 'completed' => true],
    ['title' => 'todo 2', 'completed' => false]
 ];

 echo '<pre>';
    var_dump($todos);
 '</pre>';
