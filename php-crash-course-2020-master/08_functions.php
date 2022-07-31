<?php

// Function which prints "Hello I am Zura"
    function name($script)
    {
        echo "hello am $script".'<br>';
    };

    name('data');
    name('react');

// Function with argument

function sum(...$nums)
 {
    echo '<pre>';
        print_r($nums).'<br>';
    '</pre>';
 };

 sum(22,40);

 function names($two)
 {
    echo '<pre>';
        print_r($two);
    '</pre>';
 }

 names('data');
 names('react');

// Create sum of two functions

// Create function to sum all numbers using ...$nums

// Arrow functions
