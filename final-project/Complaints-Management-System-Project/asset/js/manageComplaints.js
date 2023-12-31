function manageComplaints(){
    let complaintId=0;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/showComplaintsCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('complaintId='+complaintId);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let complaints = JSON.parse(this.responseText);

            
            if (complaints.length > 0) {
                let tableContent = `<tr>
                    <td>ComplaintId</td>
                    <td>UserId</td>
                    <td>Category</td>
                    <td>Sub Category</td>
                    <td>Status</td>
                    <td>Complaint Details</td>
                    <td>Action</td>
                </tr>`;
            
                for (let i = 0; i < complaints.length; i++) {
                    tableContent += `<tr>
                        <td>${complaints[i].complaintId}</td>
                        <td>${complaints[i].userId}</td>
                        <td>${complaints[i].category}</td>
                        <td>${complaints[i].subCategory}</td>
                        <td>${complaints[i].status}</td>
                        <td>${complaints[i].complaintDetails}</td>
                        <td><a href="../view/updateComplaint.php?complaintId=${complaints[i].complaintId}">update</a> | <button onclick="deleteComplaints(${complaints[i].complaintId})">Delete</button></td>

                    </tr>`;
                }
            
                document.getElementById('table').innerHTML = tableContent;
            } else {
                document.getElementById('table').innerHTML = "You have no complaints";
            }
            
            
            
            
         }
    }
    
}

function deleteComplaints(complaintId) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/deleteComplaintsCheck.php', true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('complaintId=' + complaintId);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let complaints = JSON.parse(this.responseText);

            if (complaints.length > 0) {
                let tableContent = `<tr>
                    <td>ComplaintId</td>
                    <td>UserId</td>
                    <td>Category</td>
                    <td>Sub Category</td>
                    <td>Status</td>
                    <td>Complaint Details</td>
                    <td>Action</td>
                </tr>`;

                for (let i = 0; i < complaints.length; i++) {
                    tableContent += `<tr>
                        <td>${complaints[i].complaintId}</td>
                        <td>${complaints[i].userId}</td>
                        <td>${complaints[i].category}</td>
                        <td>${complaints[i].subCategory}</td>
                        <td>${complaints[i].status}</td>
                        <td>${complaints[i].complaintDetails}</td>
                        <td><a href="../view/updateComplaint.php?complaintId=${complaints[i].complaintId}">update</a> | <button onclick="deleteComplaints(${complaints[i].complaintId})">Delete</button></td>

                        </tr>`;

                }

                document.getElementById('table').innerHTML = tableContent;
            } else {
                document.getElementById('table').innerHTML = "You have no complaints";
            }
        }
    };
}
