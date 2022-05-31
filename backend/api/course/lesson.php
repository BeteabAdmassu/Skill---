<?php

    include_once '../../config/Database.php';
    include_once '../../models/Lesson.php';
    
    $chapterid = $_GET['chapterid'];
    $chaptername = $_GET['chaptername'];
    $lessonTitle = $_GET['lesson'];


    // Instantiate Database
    $database = new Database();
    $db = $database->connect();

    $lessonFromDb = new Lesson($db);
    
    $stmt = $lessonFromDb->getLessons($chapterid);

    $lessons = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $lesson_item = array(
            'ID' => $ID,
            'Lesson_title' => $Lesson_title
        );
        array_push($lessons, $lesson_item);
    }

    $currrentCourseId;
    foreach($lessons as $lesson) {
        if(strcmp($lesson['Lesson_title'], $lessonTitle) == 0) {
            $currrentCourseId = $lesson['ID'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temari Dojo Lesson</title>
    <link rel="stylesheet" href="../../../css/Homepage.css">
    <link rel="stylesheet" href="../../../css/Lesson.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <div class="Lesson-page">
        <div class="Lesson-Container">
            <div class="Lesson-header">
                <?php
                    echo '<h2 class="LessonUnit-Content">'.$chaptername.'</h2>';
                ?>

                <div class="LessonVideo">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OEWXbpUMODk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="Lesson-Content">

                <h1 class="lessonTitle">
                    <?php echo $lessonTitle; ?>
                </h1>
                <!-- <p class="lessonText">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sit consequuntur quis ipsa
                    laudantium ut iste libero, nam sequi cumque vitae reprehenderit est vel pariatur, molestiae aliquid
                    at doloremque. Alias, quisquam id quas sunt beatae harum natus ipsam dignissimos recusandae
                    corporis, nulla nihil modi dolore dolorem itaque unde. A ex eveniet laborum delectus optio sint
                    pariatur iste numquam omnis atque inventore accusantium in, mollitia, quidem ad! Ea consectetur ab
                    odio obcaecati aut dicta corrupti! Ipsam, vel odio sed praesentium maxime repellat incidunt animi
                    cumque nisi ex perspiciatis ratione ab beatae cum consectetur quaerat vero tenetur saepe
                    accusantium. In incidunt voluptatibus aspernatur aperiam repudiandae fugit commodi distinctio
                    corporis molestiae cum, corrupti, quidem deleniti pariatur quos minus necessitatibus, quo voluptatem
                    modi rerum veritatis. Nobis sed molestias vitae corporis aliquam magnam accusantium assumenda
                    officiis aspernatur pariatur, deserunt beatae laboriosam, quo repudiandae officia provident eum quis
                    adipisci architecto similique ab corrupti, distinctio tempora asperiores. Voluptas dolore, sed
                    deserunt, ullam distinctio, facilis earum quis quas nesciunt ab numquam laboriosam ducimus modi a
                    quidem quaerat optio quibusdam dolorem repellat accusamus doloremque voluptatem laborum tempore.
                    Recusandae quod, exercitationem illum sapiente atque magni et corrupti dicta facere laborum impedit
                    veritatis. Molestias eum, reprehenderit quos vero corrupti illum! Voluptates.
                </p> -->
                <?php 
                    echo '<p class="lessonText">'.$lessonFromDb -> getLessonText($currrentCourseId).'</p>';
                ?>
            </div>
        </div>
        <nav class="Lessons-nav">
            <div class="LessonUnit-nav">
                <?php 
                    echo "<p><strong>".$chaptername."</strong></p>";
                ?>
            </div>
            <ol class="lessons">
                <?php
                    foreach($lessons as $lesson) {
                        echo '<li><a href="#">'.$lesson['Lesson_title'].'</a></li>';
                    }
                ?>
            </ol>
        </nav>
    </div>
<script src="../../../js/Homepage.js"></script>
</body>

</html>