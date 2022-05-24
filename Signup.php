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
            height: 555px;
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
                <input type="text" name="fullname" id="one" class="same" placeholder='Fullname' required>
                <input type="text" name="username" id="two" class="same" placeholder='Username' required>
                <input type="email" name="email" id="five" class="same" placeholder='Email Address' required>
                <input type="password" name="password" id="three" class="same" placeholder='Password' required>
                <input type="password" name="confirm" id="four" class="same" placeholder='Confirm password' required>
                <input type="submit" value="Sign Up" class="sub" name='sub'>
            </form>
            <p>Already have an Account <a href="login.php">Login</a></p>
        </div>
    </div>
    <script src="js/Signup.js"></script>
</body>
</html>
