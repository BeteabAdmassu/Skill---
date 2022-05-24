<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Homepage.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <ul class="left">
            <li><img src="./assets/image/chevron_up_29px" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>
        </ul>
        <ul class="right">
            <li><span></span><a class='dash' href="#">Dashboard</a></li>
            <li><span></span><a class='browser' href="#">Browser</a></li>
            <li class='log'><a class='letter' href="#">Log in</a></li>
            <li class='sgin'><a href="#">Sgin Up</a></li>
            <li><abbr title="User Account"><img src="./assets/image/user_50px" alt=""></abbr></li>
        </ul>
    </nav>
    <div class="firstpage">
        <div class="text">
            <h1>Save big.Learn big.</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorem in quae, dolorum ex facere!</p>
        </div>
    </div>
    <div class="sectionvideo">
            <h1>A broad selection of courses</h1>
            <p>Choose from 185,000 online video courses with new additions published every month</p>
            <div class="buttons">
                <li onclick="fun1(this)"><span class='span1'></span><a href="#">Python</a></li>
                <li onclick="fun2(this)"><span class='span2'></span><a href="#">Excel</a></li>
                <li onclick="fun3(this)"><span class='span3'></span><a href="#">Web Development</a></li>
                <li onclick="fun4(this)"><span class='span4'></span><a href="#">Javascript</a></li>
                <li onclick="fun5(this)"><span class='span5'></span><a href="#">DataScience</a></li>
                <li onclick="fun6(this)"><span class='span6'></span><a href="#">AWS Certificate</a></li>
                <li onclick="fun7(this)"><span class='span7'></span><a href="#">Drawing</a></li>
            </div>
        </div>
        <div class="videos">
            <h1>Expand your career opportunities with Python</h1>
            <p>Take one of Udemy’s range of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn how to build everything from games to sites to apps. Choose from a range of courses that will appeal to</p>
            <button class='btn'>Explore Python</button>
            <div class="vid-box">
                <div class="vid">
                    <div class="videocontaint">
                    <iframe width="400" height="200" src="https://www.youtube.com/embed/RsPWEmfOQdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <p>Instructor</p>
                    <p>$344</p>
                </div>
                <div class="vid">
                    <div class="videocontaint">
                        
                    </div>
                </div>
                <div class="vid">
                <div class="videocontaint">
                        
                        </div>
                </div>
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
                    <button class="btnfooter"><img src="./image/globe_29px" alt="">English</button>
                    <p>&copy;2022 Temari Dojo, Inc.</p>
                </div>
            </footer>
        <script src="js/Homepage.js"></script>
</body>
</html>