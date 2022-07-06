<?php 
   
// High Level Module
class User {

    private $dbConnection;
    public function __construct(MySQLConnection $dbConnection)
    {
      $this->dbConnection = $dbConnection;
    }
    public function createUser() 
    {
      // Store the user into a database...
      return "user created and stored in the database";
    }
}

  // Low Level Module
class MySQLConnection {
  public function connect() {
    return "connected to MySQL Database";
  }
}

$db = new MySQLConnection();
var_dump($db->connect());

$user = new User($db);
var_dump($user->createUser());
