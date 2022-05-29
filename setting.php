<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Setting</title>
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
   </script>
</body>
</html>