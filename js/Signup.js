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
    }
})


document.querySelector('#one').addEventListener('focus',function()
{
    document.querySelector('.error').innerHTML = "";
    document.querySelector('.error').style.transition = ".5s all linear";
})

// let value = "";

// let passwordLength = 0;

// function passwordGenerate()
// {
//     while(passwordLength < 9)
//     {
//         var selected = randomnumber();
//         switch(selected)
//         {
//             case 1:
//                 value += String.fromCharCode(Math.floor(Math.random() * 97) + 26);
//                 break;
//             case 2: 
//                 value += String.fromCharCode(Math.floor(Math.random() * 65) + 26);
//                 break;
//             case 3:
//                 value += specialCHARS();
//                 break;
//             case 4:
//                 value += String.fromCharCode(Math.floor(Math.random() * 10) + 48);
//                 break;
//         }
//         passwordLength = passwordLength + 1;
//     }
//     return  value;
// }
// function randomnumber()
// {
//     return (Math.ceil(Math.random() * 4));
// }
// function specialCHARS()
// {
//     Special = ["!","@","#","$","%,","^","&","(",")",".","?",">","<",","];
//     return (Special[Math.ceil(Math.random() * Special.length)]);
// }
// document.addEventListener('DOMContentLoaded',function()
// {
//     var hold = passwordGenerate();
//     document.querySelector('#three').value = hold;
//     document.querySelector('#four').value = hold;
// })
