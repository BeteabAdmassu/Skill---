<?php

    include_once '../../config/Database.php';
    include_once '../../models/Course.php';


    // Instantiate Database
    $database = new Database();
    $db = $database->connect();

    // Instantiate Post
    $course = new Course($db);

    // Get Id
    $id = isset($_GET['id']) ? $_GET['id'] : die(); 

    // Get course
    $course->read_single($id);

    function renderTag($tag, $content) {
        echo '<'.$tag.'>'.$content.'</'.$tag.'>';
    }
    
    function enrollNow($id) {
        echo ' 
        <a class="enroll" href="enroll.php?crsId='.$id.'&stdId='.$_COOKIE['user_cookies'].'">
            <strong>Enroll this course now</strong> 
        </a>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $course -> Name ?></title>
    <link rel="stylesheet" href="../../../css/course.css">
</head>
<body>
<nav class="nav">
    <ul class="left">
        <li><img src="../../../assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
        <!-- <li><img src="../../../assets/image/search_24px.png" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li> -->
    </ul>
    <ul class="right">
        <li><span></span><a class='dash' href="#">Dashboard</a></li>
        <li><span></span><a class='browser' href="#">Browser</a></li>
        <li class='log'><a class='letter' href="#">Log in</a></li>
        <li class='sgin'><a href="#">Sign Up</a></li>
        <li><abbr title="User Account"><img src="../../../assets/image/user_50px.png" alt=""></abbr></li>
    </ul>
</nav>

<article class="course-info">
    <span class="course-title"><i><?php renderTag('h1',$course -> Name); ?></i></span>
    <p><?php renderTag('p', $course -> Description); ?></p>
    <p>Instructor(s): <?php renderTag('a', $course -> Instructor); ?> </p>
    <?php enrollNow($course -> id); ?>
</article>

<article class="course-review-vid">
    <h2>Preview Video</h2>
    <iframe class="vid" width="900px" height="500" src="<?php echo $course -> Preview_video_link ?>" title="YouTube video player"
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
</article>

<article class="wht-ull-lrn">
        <strong><i><h1>What you'll learn from this course</h1></i></strong>
        <?php 
            $contents = explode(",", $course -> content);
            foreach($contents as $content) {
                echo '<strong>'.renderTag('p', $content).'</strong>';
            }
        ?>
</article>

<article class="wht-ull-lrn">
     <strong><i><h1>Requirements for this course</h1></i>
     <?php 
            $contents = explode(",", $course -> requirement);
            foreach($contents as $content) {
                echo '<strong>'.renderTag('p', $content).'</strong>';
            }
        ?>
</article>

<footer class="fotter">
                <div class="leftfooter">
                    <ul class="left-left-footer">
                        <li><a href="#">Ethiopia</a></li>
                        <li><a href="#">Contact-Us</a></li>
                        <li><a href="#">About-Us</a></li>
                    </ul>
                    <ul class="middle-footer">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help and Support</a></li>
                    </ul>
                    <ul class="right-footer">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policies</a></li>
                        <li><a href="#">Cookie Setting</a></li>
                    </ul>
                </div>
                <div class="rightfooter">
                    <button class="btnfooter"><img src="./image/globe_29px" alt="">English</button>
                    <p>&copy;2022 Temari Dojo, Inc.</p>
                </div>
            </footer>
</body>
</html>