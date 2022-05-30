<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sginup page | Temari Dojo 22022E.c</title>
    <link rel="stylesheet" href="css/Signup.css">
    <style>
        .page p{
            display: block;
            width: 100%;
            text-align: center;
            margin: 10px auto;
            font-weight: 600;
        }
        .page
        {
            height: 575px;
            width: 425px;
        }
        .same{
            width: 75%
        }
        .show{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 2%;
            border: .5px solid #009866;
            cursor: pointer;
        }
        p a
        {
            text-decoration: none;
            color: #009866;
            margin-left: 10px;
            font-size: 19px;
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
            height: 575px;
            border: .5px solid #009866;
            transition: .5s all linear;
            cursor: pointer;
            padding-top: 40px;
        }
        .page h1
        {
            font-size: 20px;
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
            margin:20px auto;
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
            <h1 class='h1'>Sign Up</h1>
            <p class='error'><?//php echo $error; ?></p>
            <form action="backend\api\SIgnIn-SignUp\signup.php" method="Post">
                <input type="text" name="firstname" id="one" class="same" placeholder='Firstname' required>
                <input type="text" name="lastname" id="one" class="same" placeholder='lastname' required>
                <input type="text" name="username" id="two" class="same" placeholder='Username' required>
                <input type="email" name="email" id="five" class="same" placeholder='Email Address' required>
                <input type="password" name="password" id="three" class="same" placeholder='Password' required>
                <input type="password" name="confirm" id="four" class="same" placeholder='Confirm password' required>
                <input type="submit" value="Sign Up" class="sub" name='sub'>
            </form>
            <p class='already'>Already have an Account <a href="login.php">Login</a></p>
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
                document.querySelector('.imaged').style.width = "65%";
                document.querySelector('.imaged').style.backgroundColor = "#009866";
                document.querySelector('.imaged').style.borderRadius = "30px";
                document.querySelector('.imaged').style.transition = ".5s all linear";
                document.querySelector('.imaged').style.height = "100%";
                document.querySelector('.h1').style.color = "#009866";
                document.querySelector('.h1').style.transition = ".5s all linear";
                document.querySelector('#one').style.background = "transparent";
                document.querySelector('#one').style.transition = ".5s all linear";
                document.querySelector('#two').style.background = "transparent";
                document.querySelector('#two').style.transition = ".5s all linear";
                document.querySelector('#three').style.background = "transparent";
                document.querySelector('#three').style.transition = ".5s all linear";
                document.querySelector('#four').style.background = "transparent";
                document.querySelector('#four').style.transition = ".5s all linear";
                document.querySelector('#five').style.background = "transparent";
                document.querySelector('#five').style.transition = ".5s all linear";
                document.querySelector('#one').style.color = "#f0fcfc";
                document.querySelector('#two').style.color = "#f0fcfc";
                document.querySelector('#three').style.color = "#f0fcfc";
                document.querySelector('#four').style.color = "#f0fcfc";
                document.querySelector('#five').style.color = "#f0fcfc";
                document.querySelector('.already').style.color = "#f0fcfc";
            }
            else
            {
                document.querySelector('.all').style.backgroundColor = "#f0fcfc";
                document.querySelector('.h1').style.color = "#000000";
                document.querySelector('#one').style.background = "#ffffff";
                document.querySelector('#one').style.transition = ".5s all linear";
                document.querySelector('#two').style.background = "#ffffff";
                document.querySelector('#two').style.transition = ".5s all linear";
                document.querySelector('#three').style.background = "#ffffff";
                document.querySelector('#three').style.transition = ".5s all linear";
                document.querySelector('#four').style.background = "#ffffff";
                document.querySelector('#four').style.transition = ".5s all linear";
                document.querySelector('#five').style.background = "#ffffff";
                document.querySelector('#five').style.transition = ".5s all linear";
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
                document.querySelector('#one').style.color = "black";
                document.querySelector('#two').style.color = "black";
                document.querySelector('#three').style.color = "black";
                document.querySelector('#four').style.color = "black";
                document.querySelector('#five').style.color = "black";
                document.querySelector('.already').style.color = "#000000";
            }
        })


        document.querySelector('#one').addEventListener('focus',function()
        {
            document.querySelector('.error').innerHTML = "";
            document.querySelector('.error').style.transition = ".5s all linear";
        })
    </script>
</body>
</html>
