<?php
class updateUserInfo {
    private $conn;
    private $table = 'user';

    // properties
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
        $this->userHash = $_COOKIE['user_cookies'];
        
    }


  public function updateUserInfo(){
  // Create query
$query = 'UPDATE ' . $this->table . ' SET firstname = :firstname, lastname = :lastname, username = :username, 
email = :email, phoneNo = :phoneNo, address = :address WHERE userid = :userHash';

  // Prepare statement
  $stmt = $this->conn->prepare($query);
 

//clean data
$this->firstname = htmlspecialchars(strip_tags($this->firstname));
$this->lastname = htmlspecialchars(strip_tags($this->lastname));
$this->username = htmlspecialchars(strip_tags($this->username));
$this->email = htmlspecialchars(strip_tags($this->email));
$this->phoneNo = htmlspecialchars(strip_tags($this->phoneNo));
$this->address = htmlspecialchars(strip_tags($this->address));
//$this->password = htmlspecialchars(strip_tags($this->password));

 //Bind data
//$stmt->bindParam(':userHash', $this->userHash);
$stmt->bindParam(':firstname', $this->firstname);
$stmt->bindParam(':lastname', $this->lastname);
$stmt->bindParam(':username', $this->username);
$stmt->bindParam(':email', $this->email);
$stmt->bindParam(':phoneNo', $this->phoneNo);
$stmt->bindParam(':address', $this->address);
$stmt->bindParam(':userHash', $this->userHash);
//$stmt->bindParam(':password', $this->password);
//$stmt->bindParam(':id', $this->id);


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