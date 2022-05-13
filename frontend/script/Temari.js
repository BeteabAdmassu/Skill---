var menutouch = document.getElementById("menutouch");
var midddllee = document.getElementById("midddllee");
var rightt = document.getElementById("rightt");
function hamburger()
{
    if(midddllee.style.left === "0%")
    {
        midddllee.style.left = "-100%";
        midddllee.style.transition = "left 0.5s";
        rightt.style.marginTop = "-300px";
        rightt.style.transition = "margin-top 0.5s";
    }
    else
    {
        midddllee.style.left = "0%";
        midddllee.style.transition = "left 0.5s";
        rightt.style.marginTop = "0px";
        rightt.style.transition = "margin-top 0.5s";
    }
}
/*for the image slider  */
function backfunction()
{
    
}