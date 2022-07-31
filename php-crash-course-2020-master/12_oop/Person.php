<?php

class Person {
    public $name;
    public $username;
    private $age; // private gvadzlevs mxolod am fileshi gastilvis da gamokenebis uflebas konkretuli cvladis arc shvilobilshi sheidzleba amis gamokeneba;
    // protected $age; //protected gvadzlevs mxolod am fileshi da shvilobi klasshi gamokenebis da gastilvis uflebas (da sxva arcert fileshi);
        public function __construct($name, $username)  // public cvladebi;
        {
            $this->name = $name;
             $this->username = $username;
        }

         public function hello() 
         {
             return 'Hello I am '.$this->name. ' ' .$this->username.' ';
         }

        public function setAge($age)
        {   
            if($age > 0) {
                $this->age = $age;
            } else {
                // echo "Invalid age";
                throw new Exception(); // Exception isvris errors da kodi agar grdzeldeba sanam problema ar agmoifxvreba;
            }
        }

        public function getAge()
        {
            return $this->age;
        }
}