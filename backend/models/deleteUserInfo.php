<?php
class deleteUserInfo {
    private $conn;
    private $table = 'user';
    
    // properties
    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $phoneNo;
    public $address;
    public $password;
    public $userHash;
    
    
    public function delete() {
        // Create query
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        
        // Prepare statement
        $stmt = $this->conn->prepare($query);
        
        
        $this->id = $id;
        
        
        //clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        
        //Bind data
        $stmt->bindParam(':id', $this->id);
        
        
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