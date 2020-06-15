<?php

interface CarInterface
{
  public function getFuel();
  public function shiftGear();
  public function steer();
}

class DieselCar implements CarInterface
{
  public function getFuel()
  {
    //logic to get fuel
    return "I have fuel";
  }

  public function shiftGear()
  {
    //logic to get shift gear
    return "I have shift gear";
  }

  public function steer()
  {
    //logic to steer
    return "I have steer";
  }
}


class ElectricCar implements carInterface
{
  public function getFuel()
  {
    // doesn't require to get fuel
    return null;
  }
  public function shiftGear()
  {
    //logic to get shift gear
    return "I have shift gear";
  }

  public function steer()
  {
    //logic to steer
    return "I have steer";
  }
}

$dieselcar = new DieselCar();
var_dump($dieselcar->getFuel());

$electriccar = new ElectricCar();
var_dump($electriccar->getFuel());