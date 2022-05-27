<?php
    $chapterid = $_GET['chapterid'];
    $chaptername = $_GET['chaptername'];
    $lesson = $_GET['lesson'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temari Dojo Lesson</title>
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
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OEWXbpUMODk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="Lesson-Content">

                <h1 class="lessonTitle">
                    <?php echo $lesson; ?>
                </h1>
                <p class="lessonText">
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
                </p>
            </div>
        </div>
        <nav class="Lessons-nav">
            <div class="LessonUnit-nav">
                <?php 
                    echo "<p><strong>".$chaptername."</strong></p>";
                ?>
            </div>
            <ul class="lessons">
                <li><a href="" class="lesson">Lesson &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>

</body>

</html>