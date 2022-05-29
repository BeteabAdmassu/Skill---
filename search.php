<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Homepage.css">
    <link rel="stylesheet" href="css/search.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <ul class="left">
            <li><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>
        </ul>
        <ul class="right">
            <div class="dropdown">


                <button onclick="myFunction()" class="dropbtn" id="username">Username<i class="fa-solid fa-user usericon"></i> </button>
                <div id="myDropdown" class="dropdown-content">
                    <a class="myDropdown-a1" href="setting.php"><i class="fa-solid fa-user-pen usericon2"></i>Edit Profile</a>
                    <a class="myDropdown-a1" href="Login.php"><i class="fa-solid fa-arrow-right-from-bracket usericon2"></i>Logout</a>

                </div>
            </div>
        </ul>
    </nav>
    <div class="search-container">
        <div class="search-keyword">
            search keyword
        </div>
        <div class="search-resultset">
            1 result(s)
        </div>
        <div class="lessons">
            <div class="lesson">
                <iframe width="400" height="350" src="https://www.youtube.com/embed/7LyvAVjQUR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="course-name"><a href=""> Introduction to Nuclear Engineering and Ionizing Radiation</a></p>
                <p class="instructor">Instructor: <span>Michael Short</span></p>
                <p class="institution">Institution: <span>MIT</span></p>
            </div>
        </div>
    </div>
    
    <script>
        //     let username = document.querySelector('#username');
        //    username.innerHTML = "Beteab";
        fetch username
        window.onload = function() {
                fetch('http://localhost/Temari-dojo/backend/api/SIgnIn-SignUp/signIn.php')
                    .then(response => response.json())
                    .then(data => {
                        // let username = document.querySelector('.dropbtn');
                        // username.innerHTML = 'Beteab';
                        // console.log(data);
                        console.log(data.username);

                    })
                    .catch(error => console.error(error));

                //   }
    </script>
    <script src="js/Homepage.js"></script>
</body>
</html>