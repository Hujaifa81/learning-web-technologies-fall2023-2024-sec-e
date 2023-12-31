function forgetPasswordCheck(){
    
    const phone = document.getElementById('phone').value;
    const password=document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;;

    let xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/forgetPasswordCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("forgetPasswordSubmit=1&phone=" + encodeURIComponent(phone) + "&newPassword=" + encodeURIComponent(password) + "&confirmPassword=" + encodeURIComponent(confirmPassword));

        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                
                if (xhr.responseText == "invalid phone") {
                    document.getElementById('phoneS').innerHTML="phone number is invalid";
                    
                }
                else if(xhr.responseText == "invalid password"){
                    document.getElementById('newPasswordS').innerHTML="password is invalid";
                    document.getElementById('phoneS').innerHTML="";
                }
                else if(xhr.responseText == "password mismatch"){
                    document.getElementById('confirmPasswordS').innerHTML="password mismatch";
                    document.getElementById('newPasswordS').innerHTML="";
                    document.getElementById('phoneS').innerHTML="";
                }
                else if(xhr.responseText == "invalid user"){
                    document.getElementById('changeS').innerHTML="user is invalid";
                    document.getElementById('confirmPasswordS').innerHTML="";
                    document.getElementById('newPasswordS').innerHTML="";
                    document.getElementById('phoneS').innerHTML="";
                }
                else if(xhr.responseText == "password changed"){
                    document.getElementById('changeS').innerHTML="password changed";
                    document.getElementById('confirmPasswordS').innerHTML="";
                    document.getElementById('newPasswordS').innerHTML="";
                    document.getElementById('phoneS').innerHTML="";
                }
                
            }
        };
        
        
    
    

}





