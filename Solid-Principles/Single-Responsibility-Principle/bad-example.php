<?php

class SalesReporter {
   public $auth;

  public function report()
  {
    // perform authentication
    if ($this->auth) {

      return "Sales reporting authenticated";
    }

    //get sales from db

    $sales = $this->queryDBForSales();

    // return results

    return $this->format($sales);
  }

  protected function queryDBForSales()
  {
     return "Sales fetched from db";
  }

  protected function format()
  {
    return "Sales output formatted";
  }
}


$reporter = new SalesReporter();

var_dump($reporter->report());