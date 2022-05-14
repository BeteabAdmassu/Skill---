<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Course.php';

// Instantiate Database
$database = new Database();
$db = $database->connect();

// Instantiate Post
$course = new Course($db);

$result = $course -> read();
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