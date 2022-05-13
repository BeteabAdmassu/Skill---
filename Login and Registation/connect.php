<?php

class Connect
{
  private $database  = "Login_and_Registration";
  private $server = "localhost";
  private $username = "admin";
  private $password = "pass";

   public function getConnect()
   {
      $conn = new mysqli($this->server, $this->username, $this->password , $this->database);
       if(!$conn)
       {
           die('connection error ' .$conn->connect_error);
       }

       return $conn;
   
    }



}






?>