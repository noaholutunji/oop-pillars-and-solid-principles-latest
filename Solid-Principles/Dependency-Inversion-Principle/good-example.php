<?php 
   
interface ConnectionInterface {
  public function connect();
}

class DbConnection implements ConnectionInterface {
    public function connect()
    {
      return "connected to the database";
    }
}

class User {

    private $dbConnection;
    public function __construct(ConnectionInterface $dbConnection)
    {
      $this->dbConnection = $dbConnection;
    }
    public function createUser() 
    {
      // Store the user into a database...
      return "user created and stored in the database";
    }
}

$db = new DbConnection();
var_dump($db->connect());

$user = new User($db);
var_dump($user->createUser());
