
<?php
  include_once '../../config/Database.php';
  include_once '../../models/signin.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
 
  // Instantiate blog post object
  $Signin = new signin($db);
   
  $Signin->email = $_POST['email'];
  $Signin->password = $_POST['password'];


  //Create post
  if($Signin->authenticate()) { 
    echo json_encode(
      array('username' => $Signin->username
            
          )
  );
    header("Location: http://localhost/temari-dojo/HomePage.php");
    die();
  } else {
    echo '<script>alert("User does not exist")
    window.location.href=`../../../Login.php`</script>';
  }
  
 
?>