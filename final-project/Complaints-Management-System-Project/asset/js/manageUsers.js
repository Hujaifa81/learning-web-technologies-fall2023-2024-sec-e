function manageUsers(){
    let userId=0;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/showUserCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('userId='+userId);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let users = JSON.parse(this.responseText);
            
            if (users.length > 0) {
                let tableContent = `<tr>
                    <td>Id</td>
                    <td>Role</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>userName</td>
                    <td>phone</td>
                    <td>password</td>
                    <td>Gender</td>
                    <td>District</td>
                    <td>Address</td>
                    <td>profile</td>
                    <td>Reg Date</td>
                    <td>Action</td>
                </tr>`;
            
                for (let i = 0; i < users.length; i++) {
                    tableContent += `<tr>
                        <td>${users[i].id}</td>
                        <td>${users[i].role}</td>
                        <td>${users[i].firstName}</td>
                        <td>${users[i].lastName}</td>
                        <td>${users[i].email}</td>
                        <td>${users[i].userName}</td>
                        <td>${users[i].phone}</td>
                        <td>${users[i].password}</td>
                        <td>${users[i].gender}</td>
                        <td>${users[i].district}</td>
                        <td>${users[i].address}</td>
                        <td>${users[i].profile}</td>
                        <td>${users[i].REG_DATE}</td>
                        <td><a href="../view/updateUser.php?userId=${users[i].id}">update</a> | <button onclick="deleteUser(${users[i].id})">Delete</button></td>
                    </tr>`;
                }
            
                document.getElementById('table').innerHTML = tableContent;
            } else {
                document.getElementById('table').innerHTML = "You have no users";
            }
            
            
            
            
         }
    }
    
}

    function deleteUser(userId){
        
        let xhttp= new XMLHttpRequest();
        xhttp.open('POST','../controller/deleteUserCheck.php',true);
        
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('userId='+userId);
        xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                
                let users = JSON.parse(this.responseText);
                
                if (users.length > 0) {
                    let tableContent = `<tr>
                        <td>Id</td>
                        <td>Role</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>userName</td>
                        <td>phone</td>
                        <td>password</td>
                        <td>Gender</td>
                        <td>District</td>
                        <td>Address</td>
                        <td>profile</td>
                        <td>Reg Date</td>
                        <td>Action</td>
                    </tr>`;
                
                    for (let i = 0; i < users.length; i++) {
                        tableContent += `<tr>
                            <td>${users[i].id}</td>
                            <td>${users[i].role}</td>
                            <td>${users[i].firstName}</td>
                            <td>${users[i].lastName}</td>
                            <td>${users[i].email}</td>
                            <td>${users[i].userName}</td>
                            <td>${users[i].phone}</td>
                            <td>${users[i].password}</td>
                            <td>${users[i].gender}</td>
                            <td>${users[i].district}</td>
                            <td>${users[i].address}</td>
                            <td>${users[i].profile}</td>
                            <td>${users[i].REG_DATE}</td>
                            <td><a href="../view/updateUser.php?userId=${users[i].id}">update</a> | <button onclick="deleteUser(${users[i].id})">Delete</button></td>
                        </tr>`;
                    }
                
                    document.getElementById('table').innerHTML = tableContent;
                } else {
                    document.getElementById('table').innerHTML = "You have no users";
                }
                
                
                
                
             }
            }
    } 
