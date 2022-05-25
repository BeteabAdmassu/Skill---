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
            <li><img src="./assets/image/chevron_up_29px" alt=""><a class='udemy' href="#">Temari Dojo</a></li>
            <li><img src="./assets/image/search_24px" alt=""><input type="search" name="search" id="" class="same" placeholder='Search for anything'></li>
        </ul>
        <ul class="right">
            <li><span></span><a class='dash' href="#">Dashboard</a></li>
            <li><span></span><a class='browser' href="#">Browser</a></li>
            <li class='log'><a class='letter' href="#">Log in</a></li>
            <li class='sgin'><a href="#">Sign Up</a></li>
            <li><abbr title="User Account"><img src="./assets/image/user_50px" alt=""></abbr></li>
        </ul>
    </nav>

</div>
<div class="setting-body">  
     <div class="setting-aside">
               <button class="btn btn-profile"><i class="fa-solid fa-user"></i>Profile</button>

     </div>
     <div class="setting-section">
     
                         <div class="main-div-myprofile-discription">
                             <h2>Edit Profile</h2>
                         </div>
                         <div class="main-div-myprofile-profilePic">
                                <img class="main-div-myprofile-Pic" src="https://www.w3schools.com/howto/img_avatar.png" alt="ProfilePic">
                               
                         </div>
                        
                         <form class="frm-edit-profile" action="">\
                             <div class="frm-edit-1">   
                             <input class="textfield" type="text" name="fname" placeholder="Firstname"></input>
                            <input class="textfield" type="text" name="lname" placeholder="Lastname"></input>
                            <input class="textfield" type="text" name="Username" placeholder="Username"></input>
                            <input class="textfield" type="email" name="email" placeholder="email"></input>
                            <input class="textfield" type="text" name="phone" placeholder="Phone number"></input>
                             </div>
                              <div class="frm-edit-2">
                            <input class="textfield" type="text" name="address" placeholder="address"></input>
                            <input class="textfield" type="password" name="password" placeholder="password"></input>
                            <input class="textfield" type="new password" name="password" placeholder="new password"></input>
                            <input class="textfield" type="password" name="password" placeholder="confirm password"></input>
                            <input class="textfield textfield-submit" type="button" name="update" value="update"></input>
                            </div>
                            




                         </form>
                        </div>
                
                     </div>
   
    
</div>

</body>
</html>