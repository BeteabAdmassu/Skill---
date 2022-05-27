
<?php 
//Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
  include_once '../../config/Database.php';  
  include_once '../../models/Signup.php';


  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
 
  // Instantiate blog post object
  $Signup = new Signup($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $Signup->username = $_POST['username'];
  $Signup->email = $_POST['email'];
  $Signup->password = $_POST['password'];

 
  //Create post
  if($Signup->create()) { 

    header("Location: http://localhost/Temari-dojo/Login.php");
    die();
    ;
  } else {
    echo json_encode(
      array('message' => 'Post Not Created')
    );
 }

?>