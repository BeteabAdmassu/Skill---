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

// Get Id
$course->id = isset($_GET['id']) ? $_GET['id'] : die(); 

// Get course
$course->read_single();

// create array
$course_arr = array(
 
    'id' => $course->ID,
    'name' => $course->Name,
    'description' => $course->Description,
    'instructor' => $course->Instructor, 
    'institute' => $course->Institute,
    'image' => $course->Image,
    'category' => $course->Category,
    'preview_video_link' => $course->Preview_video_link
);

// make JSON
print_r(json_encode($course_arr));


?>