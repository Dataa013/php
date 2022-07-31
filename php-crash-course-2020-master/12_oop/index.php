<?php

require_once 'Person.php';
require_once 'Student.php';


$student = new Student('Data', 'Gvaradze', '1234');
echo $student->hello();





// What is class and instance
   
    // $person = new Person('React', 'php');

    // echo $person->hello().'<br>';
     

    // $personTwo = new Person('VsCode','PhpStrom');
    // echo $personTwo->hello();
 

    // $person->setAge(28);  // es ukve aris privete akedan gamomdinare am functens calke schirdeba stili;
    // echo $person->getAge().'<br>';

    // $personTwo->setAge(42);
    // echo $personTwo->getAge();




// $person = new Person();
// $person->name = 'Data';
// $person->username = 'Gvaradze';
// echo $person->hello().'<br>';

// $personTwo = new Person();
// $personTwo->name = 'Php';
// $personTwo->username = 'Code';
// echo $personTwo->hello();

