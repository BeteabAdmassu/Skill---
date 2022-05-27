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
    <link rel="stylesheet" href="../../../css/Lessons.css">
</head>
<body>
    <?php 
        foreach ($row as $value) {
            writeChapter($value['id'], $value['title'], $value['lessons']);
        }
    ?>
</body>
</html>