<?php 

    include_once '../../config/database.php';
    include_once '../../models/Enroll.php';


    // Instantiate Database
    $database = new Database();
    $db = $database->connect();

    // Instantiate Post
    $enroll = new Enroll($db);

    // Get Id
    // $id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get course
    $userid = $_GET['stdId'];

    // Get Student;

    $courseid = $_GET['crsId'];

    $enroll->userid = $enroll -> getStudentId($userid);
    $enroll->courseid = $courseid;
    $enroll->time = date('Y-m-d H:i:s');
    $enroll->progress = 1;

    $enroll->insert();

    header('Location: lessons.php?cid='.$courseid);

?>