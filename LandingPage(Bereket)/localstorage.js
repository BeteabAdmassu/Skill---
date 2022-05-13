
// var firstname = prompt("What is your first name?");
// var lastname = prompt("What is your last name?");
// var age = prompt("how old are you: ");
// var username = prompt("what is your username:");
// var password = prompt("what is your password: ");
// var address = prompt("where is your address:");
// inorder to store an object in local storage, we need to convert it to a string
//so weuse the JSON.stringify() method
//Inorder to change the object back to a string, we use the JSON.parse() method
    var firstname = prompt("What is your first name?");
    var lastname = prompt("What is your last name?");
    var age = prompt("how old are you: ");
    var username = prompt("what is your username:");
    var password = prompt("what is your password: ");
    var address = prompt("where is your address:");
const Person = 
{
    name: this.firstname,
    lastname: this.lastname,
    age: this.age,
    username: this.username,
    password: this.password,
    address: this.address
}
window.localStorage.setItem('key',JSON.stringify(Person));
if(JSON.parse(window.localStorage.getItem('key')) == undefined)
{
    var firstname = prompt("What is your first name?");
    var lastname = prompt("What is your last name?");
    var age = prompt("how old are you: ");
    var username = prompt("what is your username:");
    var password = prompt("what is your password: ");
    var address = prompt("where is your address:");
}
else if(JSON.parse(window.localStorage.getItem('key')) != undefined)
{
    var password = prompt("Please enter your password: ");
    if(password === "123")
    {
        var holder = JSON.parse(window.localStorage.getItem('key'));
        document.write("hello "+holder.username);
    }
}