<?php

class Person {

  public $name;
  
  public $age;

   public function __construct($name)
   {
     $this->name = $name;
   }

   public function getAge()
   {
     return $this->age * 365;
   }

   public function setAge($age)
   {
     if ($age < 18) 
     {
       throw new Exception("Person is to young to club");
     }
     $this->age =$age;
   }
}

$noah = new Person('Noah Osuolale');

$noah->setAge(19);

$noah->age = 2;

var_dump($noah->getAge());

// Inorder to make all of this meaningful encapsulation has to be involved.