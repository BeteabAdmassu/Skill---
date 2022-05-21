<?php

class Signup {
    private $conn;
    private $table = 'user';

    // properties
    public $username;
    public $email;
    public $userid;
    public $password;
    


    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }

  // Create Post
  public function create() {
    // Create query
    $query = 'INSERT INTO ' . $this->table . ' SET username = :username, email = :email, userid= :userid, password= :password, register_date=NOW()';


    // Prepare statement
    $stmt = $this->conn->prepare($query);


    // Clean data
    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->password = htmlspecialchars(strip_tags($this->password));
    
    //hash
    $this->password = hash('sha256',$this->password);
    $this->userid = hash('sha256',$this->username.$this->email.$this->password);
   

    // Bind data
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':userid', $this->userid);
    $stmt->bindParam(':password', $this->password);

    // Execute query
    if($stmt->execute()) {
      return true;
                         }

       // Print error if something goes wrong
       printf("Error: %s.\n", $stmt->error);

        return false;
                             }

}




?>