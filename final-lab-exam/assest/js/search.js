function ajax(){
    const searchItem=document.getElementById('search').value;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/searchCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('search='+searchItem);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let employees = JSON.parse(this.responseText);
            if(employees.length>0){
                let firstRow=`<tr>
                <td>Employee Id</td>
                <td>Employee Name</td>
                <td>Contact no</td>
                <td>User name</td>
                <td>Password</td>
                
                </tr>`
                document.getElementById('table').innerHTML=firstRow;
            }
            else{
                document.getElementById('table').innerHTML=`<p>No data found</p>`;
            }
            
            for (let i = 0; i < employees.length; i++) {
                let row = `<tr>
                    <td>${employees[i].employeeId}</td>
                    <td>${employees[i].employeeName}</td>
                    <td>${employees[i].contactNo}</td>
                    <td>${employees[i].userName}</td>
                    <td>${employees[i].password}</td>
                    
                </tr>`;
                document.getElementById('table').innerHTML += row;
            }
            
            
            
        }
    }
    
}