
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | 2022E.c Temari Dojo</title>
    <link rel="stylesheet" href="css/Login.css">
    <style>
        p
        {
            text-align: center;
            display: block
        }
        p a
        {
            text-decoration: none;
            color: #009866;
            margin-left: 10px;
            font-size: 19px;
        }
        .same:nth-of-type(1)
        {
            margin-top: 80px
        }
        .sub
        {
            margin-top: 70px;
        }
        @media screen and (max-width: 560px) {
    .all
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #f0fcfc;
        }
        .page
        {
            position: relative;
            margin: 30% auto;
            width: 350px;
            height: 500px;
            border: .5px solid #009866;
            transition: .5s all linear;
            cursor: pointer;
            padding-top: 40px;
        }
        .page h1
        {
            font-size: 25px;
        }
        .imaged
        {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            /* padding-left: 20px; */
        }
        .daylight
        {
            position: fixed;
            top: 5%;
            right: 10%;
            cursor: pointer;
            border: .5px solid #009866;
            display: flex;
            align-items: center;
            width: 100px;
            height: 30px;
            border-radius: 30px;
            z-index: 100;
        }
        .daylight .imaged .image
        {
            width: 15px;
            margin-left: 10px;
        }
        .page:hover
        {
            box-shadow: 0 0 10px 0 #009866;
        }
        .same
        {
            display: block;
            padding: 14px;
            border: .5px solid #009866;
            width: 80%;
            margin: 10px auto;
            outline: none;
        }
        .page h1
        {
            margin:10px auto;
            text-align: center;
            font-weight: 500;
        }
        .sub
        {
            display: block;
            padding: 14px;
            border: .5px solid #009866;
            width: 85%;
            margin: 30px auto;
            color: #009866;
            transition: .5s all linear;
            cursor: pointer;
        }
        .sub:hover
        {
            background-color: #009866;
            color: white;
        }
}

    </style>
</head>
<body>
    <div class="all">
    <div class="daylight">
                <abbr title="Day/Light Changer"><div class="imaged"><img class='image' src="assets/image/sun_50px.png" alt=""></div></abbr>
            </div>
    <div class="page">
        <div class="login">
        <h1 class='h1'>Login</h1>
            <p class='error'><//?php echo $errors; ?></p>
            <form action="backend\api\SIgnIn-SignUp\signIn.php" method="Post">
                <input type="text" name="email" id="two" class="same" placeholder='email' required>
                <input type="password" name="password" id="three" class="same" placeholder='Password' required>
                <input type="submit" value="Login" class="sub" >
            </form>
            <p class='para2'>Dont Have an Account ? <a class='link' href="Signup.php">SignUp</a></p>
        </div>
    </div>
    </div>
    <script>
        document.querySelector('.daylight').addEventListener('click',function()
{
    if(document.querySelector('.image').style.marginLeft === "20px")
    {
        document.querySelector('.all').style.backgroundColor = "black";
        document.querySelector('.all').style.transition = ".5s all linear";
        document.querySelector('.image').style.marginLeft = "85px";
        document.querySelector('.image').style.transition = ".5s all linear";
        document.querySelector('.image').style.transform = "translateX(-50%)";
        document.querySelector('.image').src = "assets/image/moon_symbol_50px.png";
        document.querySelector('.imaged').style.width = "75%";
        document.querySelector('.imaged').style.backgroundColor = "#009866";
        document.querySelector('.imaged').style.borderRadius = "30px";
        document.querySelector('.imaged').style.transition = ".5s all linear";
        document.querySelector('.h1').style.color = "#009866";
        document.querySelector('.h1').style.transition = ".5s all linear";
        document.querySelector('#two').style.background = "transparent";
        document.querySelector('#two').style.transition = ".5s all linear";
        document.querySelector('#three').style.background = "transparent";
        document.querySelector('#three').style.transition = ".5s all linear";
        document.querySelector('#two').style.color = "#f0fcfc";
        document.querySelector('#three').style.color = "#f0fcfc";
        document.querySelector('.para2').style.color = "#ffffff";
        document.querySelector('.para2').style.transition = ".5s all linear";
        document.querySelector('.error').style.color = "#ffffff";
        document.querySelector('.error').style.transition = ".5s all linear";
        document.querySelector('.link').style.color = "#ffffff";
        document.querySelector('.link').style.transition = ".5s all linear";
    }
    else
    {
        document.querySelector('.all').style.backgroundColor = "#f0fcfc";
        document.querySelector('.h1').style.color = "#000000";
        document.querySelector('#two').style.background = "#ffffff";
        document.querySelector('#two').style.transition = ".5s all linear";
        document.querySelector('#three').style.background = "#ffffff";
        document.querySelector('#three').style.transition = ".5s all linear";
        document.querySelector('.h1').style.transition = ".5s all linear";
        document.querySelector('.all').style.backgroundColor = "white";
        document.querySelector('.all').style.transition = ".5s all linear";
        document.querySelector('.image').style.marginLeft = "20px";
        document.querySelector('.image').src = "assets/image/sun_50px.png";
        document.querySelector('.image').style.transition = ".5s all linear";
        document.querySelector('.image').style.transform = "translateX(-50%)";
        document.querySelector('.imaged').style.width = "0%";
        document.querySelector('.imaged').style.backgroundColor = "#ffffff";
        document.querySelector('.imaged').style.borderRadius = "30px";
        document.querySelector('.imaged').style.transition = ".5s all linear";
        document.querySelector('#two').style.color = "black";
        document.querySelector('#three').style.color = "black";
        document.querySelector('.para2').style.color = "#000000";
        document.querySelector('.para2').style.transition = ".5s all linear";
        document.querySelector('.error').style.color = "#000000";
        document.querySelector('.error').style.transition = ".5s all linear";
        document.querySelector('.link').style.color = "#000000";
        document.querySelector('.link').style.transition = ".5s all linear";
    }
})
    </script>
</body>
</html>

