<?php 

class Rectangle {
  public $width;
  public $height;

  public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
  }
}

class Square {
  public $length;

  public function __construct($length) {
      $this->length = $length;
  }
}


class AreaCalculator {

  protected $shapes;

  public function __construct($shapes = array()) {
      $this->shapes = $shapes;
  }

  public function calculate() {
      $area = [];

      foreach($this->shapes as $shape) {
          if($shape instanceof Square) {
              $area[] = pow($shape->length, 2);
          } else if($shape instanceof Rectangle) {
              $area[] = $shape->width * $shape->height;
          }
      }

      return array_sum($area);
  }
}

$rectangle = new Rectangle(2,3);
$square = new Square(2);

$calArea = new AreaCalculator([$square]);

var_dump($calArea->calculate());
