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
            <li><img src="../../../assets/image/image/chevron_up_29px" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
        </ul>
        <ul class="right">
            <li><span></span><a class='dash' href="#">Dashboard</a></li>
            <li><span></span><a class='browser' href="#">Browser</a></li>
            <li class='log'><a class='letter' href="#">Log in</a></li>
            <li class='sign'><a href="#">Sign Up</a></li>
            <li><abbr title="User Account"><img src="./image/user_50px" alt=""></abbr></li>
        </ul>
    </nav>

    <div class="Lesson-page">
        <div class="Lesson-Container">
            <div class="Lesson-header">
                <?php
                    echo '<h2 class="LessonUnit-Content">'.$chaptername.'</h2>';
                ?>

                <div class="LessonVideo">
                    <?php 
                    echo '
                    <iframe width="100%" height="100%" src="'.$lessonFromDb -> getLessonVideo($currrentCourseId).'"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>';
                    ?>
                </div>
            </div>
            <div class="Lesson-Content">

                <h1 class="lessonTitle">
                    <?php echo $lessonTitle; ?>
                </h1>
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