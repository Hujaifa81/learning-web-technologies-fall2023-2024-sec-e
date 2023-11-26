function validateForm(){
    const userName = document.getElementById('userName').value;
    const email = document.getElementById('email').value;
    if (!isValidUsername(userName)) {
        alert('Invalid user name!');
        
    }
    if(!isValidEmail(email)){
        alert('Invalid email!');
        
    }
    
}