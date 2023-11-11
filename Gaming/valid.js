function validateEmail(email) {
    var emailError = document.getElementById("emailError");

    if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
        emailError.innerHTML = "";
    } else {
        emailError.innerHTML = "*Invalid Mail";
    }
}
function vpass(password){
    var passError = document.getElementById("dp");
     if (!/[A-Z]/.test(password)) {
        passError.textContent = "*Password must contain at least 1 uppercase letter.";
    } else if (!/[0-9]/.test(password)) {
        passError.textContent = "*Password must contain at least 1 number.";
    } 
    else if (password.length < 8 ){
        passError.textContent = "*Minimum 8 characters";
    }
    else{
        passError.textContent = "";
    }
}
function vcpass(password){
    var passField = document.getElementById("p");
    var cnfPass = document.getElementById("cp");
    var passError = document.getElementById("dcp");
    if (passField.value !== cnfPass.value){
    passError.textContent = "*Passwords do not match";
    }else{
        passError.textContent = "";
    }
}