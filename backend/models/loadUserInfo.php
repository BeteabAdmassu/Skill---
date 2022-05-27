<?php

//LoadUserInfo
 class LoadUserInfo{
 
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
   

    public function __construct($db) {
        $this->conn = $db;
        
    }
    
      //authenticate user
    public function loadUserInfo() {
        // Create query
        //$query = 'SELECT * FROM ' . $this->table . ' WHERE userid ='.$_COOKIE['user_cookies'];
        $query = 'SELECT * FROM ' . $this->table . ' WHERE userid = :userHash ';

       
        
     
        // Prepare statement
        $stmt = $this->conn->prepare($query);
        $this->userHash = $_COOKIE['user_cookies'];
          //clean   data
        $this->userHash = htmlspecialchars(strip_tags($this->userHash));
         //bind data
        $stmt->bindParam(':userHash', $this->userHash);
    

        if($stmt->execute()) {
            $num=$stmt->rowCount();
            if($num>0){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->id = $row['ID'];
                $this->firstname = $row['firstname'];
                $this->lastname = $row['lastname'];
                $this->username = $row['username'];
                $this->email = $row['email'];
                $this->phoneNo = $row['phoneNo'];
                $this->address = $row['address'];
       
                
                return true;
            }
            else{
                return false;
            }
           
        }
    }







 }







?>