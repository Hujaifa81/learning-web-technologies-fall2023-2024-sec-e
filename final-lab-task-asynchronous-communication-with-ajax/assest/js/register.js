
function validateForm(){
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;  

    if (!isValidName(name) || name==="") {
        alert('Invalid first name!');
        return true;
    }
    if(!isValidPhone(phone) || phone===""){
        alert("Invalid phone!");
        return true;

    }
    if(!isValidPassword(password) || password===""){
        alert("Invalid password!");
        return true;
    }
    if(!isValidConfirmPassword(password, confirmPassword) || confirmPassword===""){
        alert("password mismatch!");
        return true;
    }
}

function ajax(){
    const email = document.getElementById('email').value;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/emailCheck.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('email='+email);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let response = this.responseText;
            document.getElementById('emailSpan').innerHTML=response;
        }
    }
}