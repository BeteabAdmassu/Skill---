<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Setting</title>
    <style>
      *
      {
        font-weight: 400;
      }
      .frm-edit-profile input
      {
          outline: none;
      }
      .frm-edit-profile input::placeholder
      {
        color: #ccc;
      }
      .frm-edit-profile input
      {
        cursor: default;
        font-weight: 400;
      }
      .main-div-myprofile-discription
      {
        color: #5B5E64;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .main-div-myprofilePic
      {
          width: 10%;
          height: 15vh;
          background-color: #fff;
          border-radius: 50%;
          margin-top: 2vh;
          margin-bottom: 2vh;
          margin-left: 10px;
          display: flex;
          align-items: center;
          justify-content:center;
      }
      @media screen and (max-width: 560px) {
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
            z-index: -1;
        }
        .right .menu
        {
            position: fixed;
            top: 10%;
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
        .left input
        {
          width: 100%;
        }
        .right .menu
        {
            display: inline-block;
        }
      }
      .right .menu
      {
          display: none;
      }
    </style>
</head>
<body>
 <div class="setting-container"> 
     <div class="setting-nav">
     <nav class="nav">
        <ul class="left">
            <li onclick="Login.php"><img src="./assets/image/chevron_up_29px.png" alt=""><a class='udemy' href="Homepage.php">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px.png" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>
        </ul>
        <ul class="right">
        <img class='menu' src="./assets/image/Menu_50px.png" alt="">
            <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">  <strong id="username">Username</strong><i class="fa-solid fa-user usericon"></i> </button>
            <div id="myDropdown" class="dropdown-content">
              <a class="myDropdown-a1" href="setting.php"><i class="fa-solid fa-user-pen usericon2"></i>Edit Profile</a>
              <a class="myDropdown-a1" href="Login.php"><i class="fa-solid fa-arrow-right-from-bracket usericon2"></i>Logout</a>
              
            </div>
            </div>          
        </ul>
    </nav>

</div>
<script>
  // fetch user data and fill form
  window.onload = function() {
       fetch('http://localhost/Temari-dojo/backend/api/user/loadUserInfoAPI.php')
      .then(response => response.json())
      .then(data => {
        let form = document.forms[0];
        form.elements.firstname.value = data.firstname;
        form.elements.lastname.value = data.lastname;
        form.elements.email.value = data.email;
        form.elements.username.value = data.username;
        form.elements.phoneNo.value = data.phoneNo;
        form.elements.address.value = data.address;
        document.querySelector("#username").innerHTML = data.username;

      })
      .catch(error => console.error(error));

  }
</script>
<div class="setting-body">  
     <div class="setting-aside">
               <button class="btn btn-profile"><i class="fa-solid fa-user"></i>Profile</button>
               <button class="btn btn-subscription"><i class="fa-solid fa-comments-dollar"></i>Subscription</button>


     </div>
     <div class="setting-section">
     
                         <div class="main-div-myprofile-discription">
                             <h2>Edit Profile</h2>
                         </div>
                         <div class="main-div-myprofile-profilePic">
                                <img class="main-div-myprofile-Pic" src="https://www.w3schools.com/howto/img_avatar.png" alt="ProfilePic">
                               
                         </div>
                        
                         <form class="frm-edit-profile" method="post" action="backend\api\user\updateUserInfoAPI.php">
                             <div class="frm-edit-1">   
                             <input class="textfield" type="text" name="firstname" placeholder="Firstname"></input>
                            <input class="textfield" type="text" name="lastname" placeholder="Lastname"></input>
                            <input class="textfield" type="text" name="username" placeholder="Username"></input>
                            <input class="textfield" type="email" name="email" placeholder="email"></input>
                            <input class="textfield" type="text" name="phoneNo" placeholder="Phone number"></input>
                             </div>
                              <div class="frm-edit-2">
                            <input class="textfield" type="text" name="address" placeholder="address"></input>
                            <input class="textfield" type="password" name="password" placeholder="password"></input>
                            <input class="textfield" type="new password" name="password" placeholder="new password"></input>
                            <input class="textfield" type="password" name="password" placeholder="confirm password"></input>
                            <input class="textfield textfield-submit" type="submit" name="update" value="update"></input>
                            </div>
                            




                         </form>
                        </div>
                
                     </div>
   
    
</div>
   <script>

     function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
       

  document.querySelector(".btn-subscription").onclick = function () {
        location.href = "pricingPage.html";
    };
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