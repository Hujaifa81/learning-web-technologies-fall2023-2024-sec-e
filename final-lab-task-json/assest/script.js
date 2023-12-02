function ajax(){
    const searchItem=document.getElementById('search').value;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controlller/searchCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('search='+searchItem);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let complaints = JSON.parse(this.responseText);
            if(complaints.length>0){
                let firstRow=`<tr>
                <td>ComplaintId</td>
                <td>UserId</td>
                <td>Category</td>
                <td>Sub Category</td>
                <td>Status</td>
                <td>Complaint Details</td>
                </tr>`
                document.getElementById('table').innerHTML=firstRow;
            }
            
            for (let i = 0; i < complaints.length; i++) {
                let row = `<tr>
                    <td>${complaints[i].complaintId}</td>
                    <td>${complaints[i].userId}</td>
                    <td>${complaints[i].category}</td>
                    <td>${complaints[i].subCategory}</td>
                    <td>${complaints[i].status}</td>
                    <td>${complaints[i].complaintDetails}</td>
                </tr>`;
                document.getElementById('table').innerHTML += row;
            }
            
            
            // console.log(complaints);
            //alert(complaints);
        }
    }
    
}