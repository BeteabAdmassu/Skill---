document.querySelector('.daylight').addEventListener('click',function()
{
    if(document.querySelector('.image').style.marginLeft === "20px")
    {
        document.querySelector('.all').style.backgroundColor = "black";
        document.querySelector('.all').style.transition = ".5s all linear";
        document.querySelector('.image').style.marginLeft = "125px";
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


// document.querySelector('#two').addEventListener('focus',function()
// {
//     document.querySelector('.error').innerHTML = "";
//     document.querySelector('.error').style.transition = ".5s all linear";
// })
// setTimeout(myfun(),5000);