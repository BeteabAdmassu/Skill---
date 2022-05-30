
<?php 
  include_once '../../config/Database.php';  
  include_once '../../models/Signup.php';


  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
 
  // Instantiate blog post object
  $Signup = new Signup($db);

  $Signup->firstname=$_POST['firstname'];
  $Signup->lastname=$_POST['lastname'];
  $Signup->username = $_POST['username'];
  $Signup->email = $_POST['email'];
  $Signup->password = $_POST['password'];
  $Signup->confirm = $_POST['confirm'];


 
  //Create post
  if($Signup->create()) { 

    header("Location: http://localhost/Temari-dojo/Login.php");
    die();
    
  } else {
    echo '<script>alert("Password does not match")
    window.location.href=`../../../Signup.php`</script>';
 }

?>