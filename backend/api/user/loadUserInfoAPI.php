<?php

 include_once '../../config/Database.php';
 include_once '../../models/loadUserInfo.php';

 // Instantiate DB & connect
 $database = new Database();
 $db = $database->connect();

 // Instantiate blog post object
    $loadUserInfo = new loadUserInfo($db);

  
 // Get raw posted data
 $data = json_decode(file_get_contents("php://input"));


if( $loadUserInfo->loadUserInfo())
{
    echo json_encode(
        array(  'firstname' => $loadUserInfo->firstname, 
                'lastname' => $loadUserInfo->lastname, 
                'email' => $loadUserInfo->email, 
                'username' => $loadUserInfo->username,
                'phoneNo' => $loadUserInfo->phoneNo, 
                'address' => $loadUserInfo->address, 
            )
    );
}
else
{
    echo 'fail';


}


  































?>