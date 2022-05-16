<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Course.php';

// frontend\pages
// header('Location: C:\\xampp\htdocs\Temari-dojo\backend/api/course/courses.php');
// exit();

// Instantiate Database
$database = new Database();
$db = $database->connect();

if(!isset($_COOKIE['user'])) {
    echo json_encode(array('message' => 'You have to be logged in for this to work'));
}

// Instantiate Post
$course = new Course($db);
$searchParam = isset($_GET['param']) ? $_GET['param'] : die(); 
$result = $course -> search($searchParam);
$num = $result->rowCount();

if($num > 0) {
    // Post array
    $courses_arr = array();
    $courses_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $course_item = array(
            'Id' => $ID,
            'Name' => $Name,
            'Instructor' => $Instructor,
            'Institute' => $Institute,
            'Description' => $Description,
            'Image' => $Image,
            'Preview_video_link' => $Preview_video_link,
        );

        //Push to "data"
        array_push($courses_arr['data'], $course_item);
    }
    echo json_encode($courses_arr);
}else {
    echo json_encode(array('message' => 'No courses found'));
}
?>