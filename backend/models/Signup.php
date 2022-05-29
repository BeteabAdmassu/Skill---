<?php

class Signup {
    private $conn;
    private $table = 'user';

    // properties
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $userid;
    public $password;
    public $confirm;
    


    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }
    public function confirmPassword(){

     if($this->password === $this->confirm)
     {
         return true;
     }
     return false;

                                      }

  // Create Post
  public function create() {
    // Create query
    $query = 'INSERT INTO ' . $this->table . ' SET firstname = :firstname, 
                                                   lastname = :lastname ,
                                                   username = :username, 
                                                   email = :email, 
                                                   userid= :userid, 
                                                   password= :password, 
                                                   register_date=NOW()';


    // Prepare statement
    $stmt = $this->conn->prepare($query);


    // Clean data
    $this->firstname = htmlspecialchars(strip_tags($this->firstname));
    $this->lastname = htmlspecialchars(strip_tags($this->lastname));
    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->password = htmlspecialchars(strip_tags($this->password));
    
    //hash
    $this->password = hash('sha256',$this->password);
    $this->confirm = hash('sha256',$this->confirm);
    $this->userid = hash('sha256',$this->email.$this->password);

       
     if($this->confirmPassword())
     {     
    // Bind data
    $stmt->bindparam(':firstname', $this->firstname);
    $stmt->bindparam(':lastname',$this->lastname);
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':userid', $this->userid);
    $stmt->bindParam(':password', $this->password);

    // Execute query
    if($stmt->execute()) {
      return true;
                         }
     else {  
       // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

        return false;
       }
       }
    
        else  
        {
     
         return false;
        }

      }

}




?>