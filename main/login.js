// Variable to count number of attempts.
var trial = 3; 
var checkedBox = document.getElementById("remember_me").value;
// cHECK IF THE CAPS LOCK IS ON FOR THE PASSWORD

/**var text = document.getElementById("text");
password.addEventListener("keyup", function(event) {
if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
})**/
// Below function Executes on click of login button.

function confirm(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var length = password.length
if ( username != "" && password != ""){
    if (length >7){
      alert(" Login Successful! ")  
//window.location = "success.html"; // Redirecting to other page.
    return false;
    } else {
        alert("Password is short!\n minimum length is 8 characters");
    }
}
else{
    // Decrementing by one.
trail--;
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
} 

