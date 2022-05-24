<!DOCTYPE html>
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
    <script src="js/Login.js"></script>
</body>
</html>

