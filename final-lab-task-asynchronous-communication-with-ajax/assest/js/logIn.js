function validateForm(){
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    if(email==="" || !isValidEmail(email)){
        alert("Invalid email");
        return true;
    }
    if(password===""|| !isValidPassword(password)){
        alert("invalid password");
        return true;
    }
}