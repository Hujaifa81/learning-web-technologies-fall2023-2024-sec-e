function ManageGeographicCoverages(){
    let areaId=0;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/showAreaCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('areaId='+areaId);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let areas = JSON.parse(this.responseText);

            
            if (areas.length > 0) {
                let tableContent = `<tr>
                    <td>Id</td>  
                    <td>Area</td>
                    <td>Helpline</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>`;
            
                for (let i = 0; i < areas.length; i++) {
                    tableContent += `<tr>
                        <td>${areas[i].id}</td>
                        <td>${areas[i].area}</td>
                        <td>${areas[i].helpline}</td>
                        <td>${areas[i].status}</td>

                        <td><a href="../view/updateArea.php?areaId=${areas[i].id}">update</a> | <button onclick="deleteArea(${areas[i].id})">Delete</button></td>
                    </tr>`;
                }
            
                document.getElementById('table').innerHTML = tableContent;
            } else {
                document.getElementById('table').innerHTML = "You have no areas";
            }
            
            
            
            
         }
    }
    
}
function deleteArea(areaId) {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/deleteAreaCheck.php', true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('areaId=' + areaId);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let areas = JSON.parse(this.responseText);

            if (areas.length > 0) {
                let tableContent = `<tr>
                    <td>Id</td>  
                    <td>Area</td>
                    <td>Helpline</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>`;

                for (let i = 0; i < areas.length; i++) {
                    tableContent += `<tr>
                        <td>${areas[i].id}</td>
                        <td>${areas[i].area}</td>
                        <td>${areas[i].helpline}</td>
                        <td>${areas[i].status}</td>
                        <td><a href="../view/updateArea.php?areaId=${areas[i].id}">update</a> | <button onclick="deleteArea(${areas[i].id})">Delete</button></td>
                    </tr>`;
                }

                document.getElementById('table').innerHTML = tableContent;
            } else {
                document.getElementById('table').innerHTML = "You have no areas";
            }
        }
    };
}
