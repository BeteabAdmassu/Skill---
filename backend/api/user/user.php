

<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../../config/Database.php';
include_once '../../models/signin.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$Signin = new signin($db);
 
// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

$Signin->email = $_POST['email'];
$Signin->password = $_POST['password'];



//Create post
if( $Signin->authenticate()) {
  //send the JSON POST
  echo json_encode(
    array('firstname' => $Signin->firstname, 
          'lastname' => $Signin->lastname, 
          'email' => $Signin->email, 
          'password' => $Signin->password, 
          'phoneNo' => $Signin->phoneNo, 
          'address' => $Signin->address, 
      )
  );
  header("Location: http://localhost/Temari-dojo/HomePage.php");
  die();
} else {
  echo json_encode(
    array('message' => 'Post Not Created')
  );
}


?>















<?php
    // include('../../config/Database.php');
  
    // $database = new Database();
    // $db = $database->connect();

    // $userinfo = new userinfo($db);



    // class userinfo {
    //     private $conn;
    //     private $table = 'user';
    
    //     // properties
    //     public $id;
    //     public $firstname;
    //     public $lastname;
    //     public $username;
    //     public $email;
    //     public $phoneNo;
    //     public $address;
    //     public $password;
    //     public $userHash;


    // public function update() {
    //     // Create query
    //     $query = 'UPDATE ' . $this->table . ' SET firstname = :firstname, lastname = :lastname, username = :username, email = :email, phoneNo = :phoneNo, address = :address, password = :password WHERE id = :id';
      
    //     // Prepare statement
    //     $stmt = $this->conn->prepare($query);


    //     $this->firstname = $firstname;
    //     $this->lastname = $lastname;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->phoneNo = $phoneNo;
    //     $this->address = $address;
  

    //     //clean data
    //     $this->firstname = htmlspecialchars(strip_tags($this->firstname));
    //     $this->lastname = htmlspecialchars(strip_tags($this->lastname));
    //     $this->username = htmlspecialchars(strip_tags($this->username));
    //     $this->email = htmlspecialchars(strip_tags($this->email));
    //     $this->phoneNo = htmlspecialchars(strip_tags($this->phoneNo));
    //     $this->address = htmlspecialchars(strip_tags($this->address));
    //     $this->password = htmlspecialchars(strip_tags($this->password));

    //      //Bind data
    //     $stmt->bindParam(':firstname', $this->firstname);
    //     $stmt->bindParam(':lastname', $this->lastname);
    //     $stmt->bindParam(':username', $this->username);
    //     $stmt->bindParam(':email', $this->email);
    //     $stmt->bindParam(':phoneNo', $this->phoneNo);
    //     $stmt->bindParam(':address', $this->address);
    //     $stmt->bindParam(':password', $this->password);
    //     $stmt->bindParam(':id', $this->id);


    //          // Execute query
    //          $stmt->execute();
          
      
      
           
      
    // }

    // }


    // echo json_encode(
    //     array(
    //         'name' => $Username,
    //         'email' => $Email,
    //         'password' => $Password,
    //         'phone' => $Phone,
    //         'address' => $Address,
            
            
    //     )
    //   );

    //   decode the json object
    //     $data = json_decode(file_get_contents("php://input"));
    //     $Username = $data->name;
    //     $Email = $data->email;
    //     $Password = $data->password;
    //     $Phone = $data->phone;
    //     $Address = $data->address;
    //     $Signin = new signin();
    //     $Signin->create($Username,$Email,$Password,$Phone,$Address);
    //     echo json_encode(
    //         array(
    //             'name' => $Username,
    //             'email' => $Email,
    //             'password' => $Password,
    //             'phone' => $Phone,
    //             'address' => $Address,
                
                
    //         )
    //       );

    // echo json_encode($GLOBALS['user']);
 


?>

