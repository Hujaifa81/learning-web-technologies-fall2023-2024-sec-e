function changePasswordCheck(){
    
    const oldPassword = document.getElementById('oldPassword').value;
    const password=document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;;

    let xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/changePasswordCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("changePasswordSubmit=1&oldPassword=" + encodeURIComponent(oldPassword) + "&password=" + encodeURIComponent(password) + "&confirmPassword=" + encodeURIComponent(confirmPassword));


        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                
                
                if(xhr.responseText == "old password invalid"){
                    document.getElementById('oldPasswordS').innerHTML="password is invalid";
                    
                }
                else if(xhr.responseText == "new password invalid"){
                    document.getElementById('passwordS').innerHTML="password is invalid";
                    document.getElementById('oldPasswordS').innerHTML="";
                }
                else if(xhr.responseText == "password mismatch"){
                    document.getElementById('confirmPasswordS').innerHTML="password mismatch";
                    document.getElementById('passwordS').innerHTML="";
                    document.getElementById('oldPasswordS').innerHTML="";
                }
                else if(xhr.responseText == "wrong old password"){
                    document.getElementById('oldPasswordS').innerHTML="wrong old password";
                    document.getElementById('confirmPasswordS').innerHTML="";
                    document.getElementById('passwordS').innerHTML="";
                    document.getElementById('changePasswordS').innerHTML="";
                }
                else if(xhr.responseText == "password changed"){
                    document.getElementById('changePasswordS').innerHTML="password changed";
                    document.getElementById('confirmPasswordS').innerHTML="";
                    document.getElementById('passwordS').innerHTML="";
                    document.getElementById('oldPasswordS').innerHTML="";
                }
                
            }
        };
        
        
    
    

}





