function validateForm() {
        
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    if(!isValidEmail(email)){
        alert('Invalid email!');
        return false;
    }
    if(!isValidPassword(password)){
        alert("Invalid password!");
        return false;
    }
    
    

}