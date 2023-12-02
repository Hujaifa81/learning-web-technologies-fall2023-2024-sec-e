
    function validateForm() {
        
    
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const userName = document.getElementById('userName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    const district = document.getElementById('district').value;
    const address = document.getElementById('address').value;
    const profile = document.getElementById('profile').value;
    const agreement = document.getElementById('agreement');

    if (!document.getElementById('userRadio').checked && !document.getElementById('adminRadio').checked) {
        alert('Invalid role!');
        return false;
    }
   
    if (!isValidName(firstName) || firstName==="") {
        alert('Invalid first name!');
        return false;
    }
    if(!isValidName(lastName) || lastName===""){
        alert('Invalid last name!');
        return false;
    }

    if (!isValidUsername(userName) || userName==="") {
        alert('Invalid user name!');
        return false;
    }
    if(!isValidEmail(email) || email===""){
        alert('Invalid email!');
        return false;
    }

    if(!isValidPhone(phone)|| phone===""){
        alert("Invalid phone!");
        return false;

    }
    if(!isValidPassword(password) || password===""){
        alert("Invalid password!");
        return false;
    }
    if(!isValidConfirmPassword(password, confirmPassword) ||confirmPassword===""){
        alert("password mismatch!");
        return false;
    }
    if (!document.getElementById('male').checked && !document.getElementById('female').checked && !document.getElementById('others').checked) {
        alert('Invalid gender!');
        return false;
    }
    if(!isValidAddress(address) || address===""){
        alert("Invalid address!");
        return false;
    }
    
    if(profile===" "){
        alert("select file!");
        return false;
    }
    if (!agreement.checked) {
    alert("Please accept the Account Agreement!");
    return false;
}


     
}
