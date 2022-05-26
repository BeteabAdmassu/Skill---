
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
  if($Signin->authenticate()) { 
    // header("Location: http://localhost/Temari-dojo/HomePage.php");
    setcookie('user', $Signin->userid, time() + (86400 * 30), "/");
    header("Location: http://localhost/t/temari-dojo/HomePage.php");
    die();
  } else {
    echo json_encode(
      array('message' => 'Login Failed')
    );
  
 }
?>