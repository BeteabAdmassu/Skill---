
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

  $Signin->email = $_POST['Email'];
  $Signin->password = $_POST['Password'];


  //Create post
  if($Signin->authenticate()) { 
    echo json_encode(
      array('message' => 'Login Successful')
    );
  } else {
    echo json_encode(
      array('message' => 'Login Failed')
    );
 }
?>