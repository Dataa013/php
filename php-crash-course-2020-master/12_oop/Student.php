<?php

require_once 'Person.php';

class Student extends Person 
{
    public $studentId;

    public function __construct($name, $username, $studentId)  
    {
        $this->studentId = $studentId;
        parent::__construct($name,$username);
    }

    public function hello() 
    {
        $hello = parent::hello();  // mshobeli classhi an fileshi (ertidaigivea) shetanili hello() function is gatoleba anu $hello = mshobel elementsi anu(Person.php) shi shetanil hello() function s;
        return $hello.' my student number is '.$this->studentId;
    }
}