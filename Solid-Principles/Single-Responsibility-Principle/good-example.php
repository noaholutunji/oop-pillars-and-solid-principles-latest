<?php

interface SalesOutputInterface {

  public function output();
}


class HtmlOutput implements SalesOutputInterface {
    
  public function output()
  {
       return "HTML format";
  }
}

class SalesRepository { 
  
  public function dbQuery()
  {
    return "sales queried from db";
     
  }
}

class SalesReporter {
  private $repo;

  public function __construct(SalesRepository $repo)
  {
     $this->repo = $repo;
  }

  public function formatter(SalesOutputInterface $formatter)
  {


     return $formatter->output();

  }

  public function query()
  {

    return $this->repo->dbQuery();

  }

}

$SalesRepository = new SalesRepository();


$HtmlOutput = new HtmlOutput();

$SalesReporter = new  SalesReporter($SalesRepository);

var_dump($SalesReporter->query());

