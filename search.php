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
    <style>
            @media screen and (max-width:934px){
    .lessons{
        justify-content: center;
    }
    .search-container{
        margin-top: 180px;
        padding: 2ch;
    }
    .search-keyword{
        margin: 1ch;
        margin-left: 3ch;
        color: #009866;
    }
    .search-resultset{
        margin: 1ch;
        margin-left: 3ch;
    }
    .lessons{
        display: flex;
        justify-content:space-between ;
        flex-wrap: wrap;
    }
    .lesson{
        background-color: whitesmoke;
        margin: 2ch;
        border-radius: 20px;
        height: 32ch;
        width: 45ch;
        overflow: hidden;
        padding: 1ch;
    }
    ul.right
    {
        position: absolute;
        top: 100%;
        left: 0;
        display: flex;
        align-items: center;
        flex-direction: column;
        list-style: none;
        margin-right: 40px;
        height: 1000px;
        width: 530px;
        background-color: aliceblue;
    }
    .right .menu
    {
        position: fixed;
        top: 12%;
        left: 85%;
        display: block;
        z-index: 100;
        width: 30px;
    }
    ul.right li
    {
        margin: 10px 5px;
        padding: 10px;
        width: 90%;
        display: flex;
        align-items: center;
    }
    ul.right li a{
        color: black;
        text-decoration: none;
        font-size: 14px;
        text-align: center;
    }
    .dropdown
    {
        position: absolute;
        top: 1%;
        left: 2%;
        z-index: 100;
    }
    .dropbtn strong
    {
        font-size: 12px;
    }
    .dropbtn i{
        font-size: 11px;
    }
}
    </style>
</head>
<body>
<nav class="nav">
        <ul class="left">
            <li><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="Homepage.php">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>
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
       window.onload = function() {
    fetch('http://localhost/Temari-dojo/backend/api/user/loadUserInfoAPI.php')
   .then(response => response.json())
   .then(data => {
     document.querySelector("#username").innerHTML = data.username

   })
   .catch(error => console.error(error));

}
    </script>
    <script>
         
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
    </script>
</body>
</html>