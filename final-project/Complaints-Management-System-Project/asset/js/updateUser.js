function updateUser(){
    const id=document.getElementById("uUserId").value;
    const email=document.getElementById("uEmail").value;
    const userName=document.getElementById("uUserName").value;

    let xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/updateUserCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("id=" + encodeURIComponent(id) + "&email=" + encodeURIComponent(email) + "&userName=" + encodeURIComponent(userName));


        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                
                
                if(xhr.responseText == "invalid userName"){
                    document.getElementById('userNameS').innerHTML="userName is invalid";
                    document.getElementById('emailS').innerHTML="";
                }
                else if(xhr.responseText == "invalid email"){
                    document.getElementById('emailS').innerHTML="email is invalid";
                    document.getElementById('userNameS').innerHTML="";
                }
                
                else{
                    document.getElementById('emailS').innerHTML="";
                    document.getElementById('userNameS').innerHTML="";
                    document.getElementById('resultS').innerHTML="user details updated";
                   
                }
                
            }
        };

}