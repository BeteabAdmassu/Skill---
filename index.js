/* this is the javascript part for the login page  */
var page = document.getElementById("page");
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var span = document.getElementById("span-filler");
var password = document.getElementById("password");
var username = document.getElementById("username");
window.onload = function fun()
{
    password.value = "";
    username.value = "";
}
function log()
{
    // if(form1.style.left === "8%")
    // {
    //     form2.style.left = "110%";
    // }
    // else if(form2.style.right === "110%")
    // {
    //     form1.style.left === "8%";
    // }
    form2.style.left = "110%";
    form1.style.left = "8%";
    page.style.height = "360px"
    span.style.width = "100%";
    span.style.left = "0%";
    span.style.background = "-webkit-linear-gradient(left, #ec1b7d,#af1b6c)";
}
function Sign()
{
    form1.style.left = "-110%";
    form2.style.left= "8%";
    page.style.height = "400px";
    span.style.width = "100%";
    span.style.left = "100%";
    span.style.background = "-webkit-linear-gradient(left, #ec1b7d,#af1b6c)";
}
// function down()
// {
//     password.focus()
//     username
// }
// function up()
// {
//     username.focus();
// }