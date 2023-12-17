function showDetails(){
    const userId=document.getElementById('hiddenUserId').value;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/showUserCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('userId='+userId);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let users = JSON.parse(this.responseText);
            if(users.length>0){
                let firstRow=`<tr>
                
                <td>UserId</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                
                </tr>`
                document.getElementById('table').innerHTML=firstRow;
            }
            if(users.length>0){
                for (let i = 0; i < complaints.length; i++) {
                    let row = `<tr>
                        
                        <td>${users[i].userId}</td>
                        <td>${users[i].name}</td>
                        <td>${users[i].email}</td>
                        <td>${users[i].password}</td>
                        
                    </tr>`;
                    document.getElementById('table').innerHTML += row;
                }
            }
            else{
                document.getElementById('table').innerHTML="No users";
            }
            
            
            
            
        }
    }
}
