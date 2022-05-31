<?php

    include_once '../../config/Database.php';
    include_once '../../models/Lessons.php';

    // instantiate database and product object
    $database = new Database();
    $db = $database->connect();

    // initialize object
    $lessons = new Lessons($db);

    $lessons -> cid = isset($_GET['cid']) ? $_GET['cid'] : die();

    // query lessons
    $row = $lessons->read();

    //$value['title']
    function writeChapter($id, $title, $lessons) {
        echo
         '<article class="chapter">
            <h2><strong><i>'.$title.'</i></strong></h2>
         <hr>
        '.
        writeLessons($id, $title, $lessons).'
         </article>';
    }

    function writeLessons($id, $chapter, $lessons) {
        $html = '';
        for($i = 0; $i < count($lessons); $i++) {
            $html .=
            '<p><a href="lesson.php?chapterid='.$id.'&chaptername='.$chapter.'&lesson='.$lessons[$i]['Lesson_title'].'">'.$lessons[$i]['Lesson_title'].'</a></p>';
        }
        return $html;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/Homepage.css">
    <link rel="stylesheet" href="../../../css/Lessons.css">
</head>
<body>
    <nav class="nav">
        <ul class="left">

            <li><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>

            <li><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="Homepage.php">Temari Dojo</a></li>
            <li class='search-form'>
            <form action="backend/api/course/searchcourse.php" method="get">
                <img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="search" class="same" placeholder='Search for anything'>
            </form>
            </li>

            
        </ul>
        <ul class="right">
        <img class='menu' src="./assets/image/Menu_50px.png" alt="">
            <div class="dropdown">


                <button onclick="myFunction()" class="dropbtn" id="username">Username<i class="fa-solid fa-user usericon"></i> </button>
                <div id="myDropdown" class="dropdown-content">
                    <a class="myDropdown-a1" href="setting.php"><i class="fa-solid fa-user-pen usericon2"></i>Edit Profile</a>
                    <a class="myDropdown-a1" href="Login.php"><i class="fa-solid fa-arrow-right-from-bracket usericon2"></i>Logout</a>

                </div>
            </div>
        </ul>
    </nav>
    <div class="body">
        
    <?php 
        foreach ($row as $value) {
            writeChapter($value['id'], $value['title'], $value['lessons']);
        }
    ?>
    </div>
</body>
</html>