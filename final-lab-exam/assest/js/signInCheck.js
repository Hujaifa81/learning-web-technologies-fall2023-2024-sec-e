function validateForm() {
        
    const userName = document.getElementById('userName').value;
    const password = document.getElementById('password').value;
    
    if(!isValidEmail(userName) || userName===""){
        alert('Invalid userName!');
        return false;
    }
    if(!isValidPassword(password) || password===""){
        alert("Invalid password!");
        return false;
    }
    
    

}