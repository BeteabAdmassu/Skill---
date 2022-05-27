public function update($firstname,$lastname,$email,$password,$phoneNo,$address) {
 <?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../../config/Database.php';
include_once '../../models/updateUserInfo.php';

 // Instantiate DB & connect
 $database = new Database();
 $db = $database->connect();

    // Instantiate blog post object
    $updateUserInfo = new updateUserInfo($db);

    $updateUserInfo->firstname = $_POST['firstname'];
    $updateUserInfo->lastname = $_POST['lastname'];
    $updateUserInfo->username = $_POST['username'];
    $updateUserInfo->email = $_POST['email'];
    $updateUserInfo->phoneNo = $_POST['phoneNo'];
    $updateUserInfo->address = $_POST['address'];


     if( $updateUserInfo->updateUserInfo())
     {
  
        header("Location: http://localhost/Temari-dojo/setting.php");
        die();
     }
     else
     {
         echo 'fail';
     }





?>