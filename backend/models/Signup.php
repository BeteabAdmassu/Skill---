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
        print "Connected successfully";
    }

  // Create Post
  public function create() {
    // Create query
    $query = 'INSERT INTO ' . $this->table . ' SET username = :username, email = :email, userid= :userid';

    // Prepare statement
    $stmt = $this->conn->prepare($query);


    // Clean data
    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->userid = htmlspecialchars(strip_tags($this->userid));

    // Bind data
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':userid', $this->userid);

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