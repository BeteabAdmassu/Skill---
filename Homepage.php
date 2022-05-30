<?php

include_once 'backend/config/Database.php';
include_once 'backend/models/Course.php';
// Instantiate Database
$database = new Database();
$db = $database->connect();

$course = new Course($db);

        $result = $course -> read();
        $num = $result->rowCount();
        // check for cookie
        if(isset($_COOKIE['user_cookies'])) {
            $user = $_COOKIE['user_cookies'];
        }else {
            $user = 'Guest';
        }

//hash username and password
$user = hash('sha256', $user);

if ($num > 0) {
    // Post array
    $courses_arr = array();
    $courses_arr['allcourses'] = array();
    $courses_arr['coursesenrolled'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
        array_push($courses_arr['allcourses'], $course_item);
    }
    // echo json_encode($courses_arr);
} else {
    echo json_encode(array('message' => 'No courses found'));
}




function renderVid($courseId, $name, $instructor, $Preview_video_link)
{
    echo '<div class="vid">
            <div class="videocontaint">
            <iframe width="400" height="200" src=' . $Preview_video_link . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p><a href="backend/api/course/course.php?id=' . $courseId . '">' . $name . '</a></p>
            <p>Instructor: ' . $instructor . '</p>
        </div>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Temari-Dojo</title>
    <style>
        .firstpage
            {
                position: relative;
                width: 85%;
                margin: 1% auto;
                background-image: url(./assets/image/udemy.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 43vh;
                padding: 3%;
                margin-top: 6%;
            }
            .fotter
            {
                width: 100%;
                margin: 1% auto;
                display: flex;
                align-items: center;
                background-color: #252424;
                height: 400px;
                padding: 60px;
                margin-top: 5%;
            }
            .videos
            {
                width: 100%;
                margin: 1% auto;
                border: .5px solid #ccc;
                padding: 20px;
            }
        .videos .vid-box
        {
            width: 80%;
            margin: 1% auto;
            display: flex;
            align-items: center;
            overflow-x: scroll;
        }
        .videos .vid-box .vid
        {
            width: 370px;
            height: 340px;
            border: .5px solid #ccc;
            margin: 15px 5px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .contain
        {
            width: 80%;
            margin: 1% auto;
        }
    </style>
</head>

<body>
    <nav class="nav">
        <ul class="left">
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


            <button onclick="myFunction()" class="dropbtn" > <strong id="username">Username</strong> <i class="fa-solid fa-user usericon"></i> </button>
            <div id="myDropdown" class="dropdown-content">
              <a class="myDropdown-a1" href="setting.php"><i class="fa-solid fa-user-pen usericon2"></i>Edit Profile</a>
              <a class="myDropdown-a1" href="Login.php"><i class="fa-solid fa-arrow-right-from-bracket usericon2"></i>Logout</a>
              
            </div>
        </ul>
    </nav>
    <div class="firstpage">
        <div class="text">
            <h1>Access anytime anywhere</h1>
            <p>Join our small monthly subscription plan for an unlimited access on any device.</p>
        </div>
    </div>
    <div class="sectionvideo">
        <h1>A broad selection of courses</h1>
        <p>Choose from 185,000 online video courses with new additions published every month</p>
        <div class="buttons">
            <li onclick="fun1(this)"><span class='span1'></span><a href="#">My Courses</a></li>
            <li onclick="fun2(this)"><span class='span2'></span><a href="#">Browse</a></li>

        </div>
    </div>
    <div class="videos">
        <div class="contain">
            <h1>Why Temari Dojo?</h1>
            <p>Our online learning platform is filled with thousands of creative courses and classes taught by experts to help you learn new skills.</p>
            <button class='btn'>Become a member</button>
        </div>
        <div class="vid-box">
            <!-- <div class="vid">
                    <div class="videocontaint">
                    <iframe width="400" height="200" src="https://www.youtube.com/embed/RsPWEmfOQdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <p>Instructor: </p>
                    <p><a href="">Go to course</a></p>
                </div> -->
            <?php
            // iterate through the array of courses
            foreach ($courses_arr['allcourses'] as $course) {
                renderVid($course['Id'], $course['Name'], $course['Instructor'], $course['Preview_video_link']);
            }
            // renderVid('Introduction to golang', 'Fireship', 'https://www.youtube.com/embed/446E-r0rXHI');
            ?>
            <div class="vid">
                <div class="videocontaint">

                </div>
            </div>

        </div>
    </div>
                    <!-- Footer Section For the the last page -->
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
                    <button class="btnfooter"><img src=".//assets/image/globe_29px.png" alt="">English</button>
                    <p>&copy;2022 Temari Dojo, Inc.</p>
                </div>
            </footer>


  
    
            <script>
                 document.querySelector('.menu').addEventListener('click',function()
                    {
                        if(document.querySelector('.right').style.left === "0%")
                        {
                            document.querySelector('.right').style.left = "-130%";
                            document.querySelector('.right').style.transition = ".5s all linear";
                            document.querySelector('.menu').style.transition = ".5s all linear";
                            document.querySelector('.menu').style.left = "5%";
                        }
                        else{
                            document.querySelector('.right').style.left = "0%";
                            document.querySelector('.right').style.transition = ".5s all linear";
                            document.querySelector('.menu').style.left = "85%";
                            document.querySelector('.menu').style.transition = ".5s all linear";
                        }
                    })
                
                    window.addEventListener('scroll',()=>
                {
                    const scrolled = window.scrollY;
                    if(scrolled > 5)
                    {
                        document.querySelector('.nav').style.backgroundColor = "#000";
                        document.querySelector('.udemy').style.color = "#fff";
                        document.querySelector('.dash').style.color = "#fff";
                        document.querySelector('.browser').style.color = "#fff";
                        document.querySelector('.udemy').style.zIndex = "100";
                        document.querySelector('.nav').style.transition = ".5s all linear";
                        document.querySelector('.udemy').style.transition = ".5s all linear";
                        document.querySelector('.letter').style.color = "#fff";
                        document.querySelector('.log').style.transition = ".5s all linear";
                        document.querySelector('.sgin').style.border = ".5px solid #fff";
                        document.querySelector('.sgin').style.transition = ".5s all linear";
                        document.querySelector('.log').style.border = ".5px solid #fff";
                    }
                    else
                    {
                        document.querySelector('.nav').style.backgroundColor = "#fff";
                        document.querySelector('.udemy').style.color = "#000";
                        document.querySelector('.dash').style.color = "#000";
                        document.querySelector('.browser').style.color = "#000";
                        document.querySelector('.nav').style.transition = ".5s all linear";
                        document.querySelector('.udemy').style.transition = ".5s all linear";
                        document.querySelector('.log').style.border = ".5px solid #000";
                        document.querySelector('.letter').style.color = "#000";
                        document.querySelector('.log').style.transition = ".5s all linear";
                        document.querySelector('.sgin').style.border = ".5px solid #000";
                        document.querySelector('.sgin').style.transition = ".5s all linear"
                    }
                })
                window.addEventListener('scroll',()=>
                {
                    const scrolled = window.scrollY;
                        if(scrolled > 5)
                        {
                            document.querySelector('.menu').style.display = 'none';
                        }
                        else
                        {
                            document.querySelector('.menu').style.display = 'block';
                        }
                    // document.querySelector('.para').innerHTML= scrolled;
                })
            </script>
      
</body>
</html>