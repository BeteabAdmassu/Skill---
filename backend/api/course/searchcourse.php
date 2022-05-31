<?php
include_once '../../config/Database.php';
include_once '../../models/Course.php';

// Instantiate Database
$database = new Database();
$db = $database->connect();

// Instantiate Post
$course = new Course($db);
$searchParam =  $_GET['search']; 
$result = $course -> search($searchParam);
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
            'Category' => $Category,
            'Preview_video_link' => $Preview_video_link,
        );

        //Push to "data"
        array_push($courses_arr['data'], $course_item);
    }
 }

function renderVid($courseId, $name, $instructor,$institute, $Preview_video_link, $Category)
{
    echo '<div class="lesson">
            <iframe width="400" height="200" src=' . $Preview_video_link . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p class="course-name"><a href="course.php?id=' . $courseId . '">' . $name . '</a></p>
            <p class="instructor">Instructor: <span>' . $instructor . '</span></p>
            <p class="institution">Institution: <span>'.$institute.'</span></p>
            <p class="category" style="display:none;">'.$Category.'</p>
        </div>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../css/Homepage.css">
    <link rel="stylesheet" href="../../../css/search.css">
    <title>Temari Dojo Search</title>
</head>
<body>
<nav class="nav">
        <ul class="left">
            <li><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
            <li class='search-form'>
            <form action="searchcourse.php" method="get">
                <img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="search" class="same" placeholder='Search for anything'>
            </form>
            </li>
        </ul>
        <ul class="right">
            <div class="dropdown">


            <button onclick="myFunction()" class="dropbtn" > <strong id="username">Username</strong> <i class="fa-solid fa-user usericon"></i> </button>
            <div id="myDropdown" class="dropdown-content">
              <a class="myDropdown-a1" href="setting.php"><i class="fa-solid fa-user-pen usericon2"></i>Edit Profile</a>
              <a class="myDropdown-a1" href="Login.php"><i class="fa-solid fa-arrow-right-from-bracket usericon2"></i>Logout</a>
              
            </div>
        </ul>
    </nav>
    <div class="search-container">
        <div class="filter-category">
        <select class = "filter-button" >  
        <option class='category-opt'>Show All</option>  
        <option class='category-opt'>Sh</option>  
            <?php
                if($num >0){
                    $categories =array_column($courses_arr['data'], 'Category');
                    $categories = array_unique($categories);
                    sort($categories);
                    foreach ($categories as $course) {
                        echo '<option class=".'.$course.'-opt">'.$course.'</option>';
                        }
                    }
                else{
                    //do nothing
                }
            ?>
        </select>  
        </div>
        <div class="search-keyword">
           <?php
                echo $_GET['search'];
           ?>
        </div>
        <div class="search-resultset">
            <?php echo $num ?> result(s)
        </div>
        <div class="lessons">
            <?php
            // iterate through the array of courses
            if($num >0){
                foreach ($courses_arr['data'] as $course) {
                    renderVid($course['Id'], $course['Name'], $course['Instructor'], $course['Institute'], $course['Preview_video_link'], $course['Category']);
                }
            }
            else{
                echo '<style>div.lessons{display: block;gap:initial;text-align:center; margin-top:10ch}</style>';
                echo 'No courses found';
        }
            ?>
        </div>
    </div>
    
    <script>
       window.onload = function() {
    fetch('http://localhost/Temari-dojo/backend/api/user/loadUserInfoAPI.php')
   .then(response => response.json())
   .then(data => {
     document.querySelector("#username").innerHTML = data.username

   })
   .catch(error => console.error(error));

}
    </script>

    <script src="../../../js/Homepage.js"></script>
    <!--    <script src="js/categories.js"></script> -->
    <script>
        var $_GET = <?php echo json_encode($_GET); ?>;
    </script>
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/search.js"></script>
</body>
</html>