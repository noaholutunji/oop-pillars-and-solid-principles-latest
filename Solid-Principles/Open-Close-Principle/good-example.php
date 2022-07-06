<?php

interface Shape {
  public function area();
}

class AreaCalculator {

  protected $shapes;

  public function __construct($shapes = array()) {
      $this->shapes = $shapes;
  }

  public function calculate() {
      $area = [];

      foreach($this->shapes as $shape) {
          $area[] = $shape->area();
      }

      return array_sum($area);
  }
}

class Circle implements Shape {
  public $radius;
 
  function __construct($radius)
  {
     $this->radius =$radius;
    
  }

  public function area()
  {
    return $this->radius * $this->radius * pi();
  }

}

class Rectangle implements Shape{
  public $width;
  public $height;

  function __construct($height, $width)
  {
     $this->height =$height;
     $this->width =$width;
  }
  public function area()
  {
    return $this->width * $this->height;
  }
}

class Square implements Shape {
  private $length;

  public function __construct($length) {
      $this->length = $length;
  }
  public function area() {
      return pow($this->length, 2);
  }
}

$circle = new Circle(7);
$rectangle = new Rectangle(2,3);
$square = new Square(2);


$cal = new AreaCalculator([$square]);

var_dump($cal->calculate());



