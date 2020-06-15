<?php 

class Mother {
  public function getEyeCount()
  {
    return 2;
  }
}

class Child extends Mother {

}

$child = new Child();

var_dump($child->getEyeCount());
