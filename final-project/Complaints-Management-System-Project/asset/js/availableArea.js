function availableArea(){
    let area=0;
    let xhttp= new XMLHttpRequest();
    xhttp.open('POST','../controller/availableAreaCheck.php',true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('area='+area);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            
            let areas = JSON.parse(this.responseText);
            
            if(areas.length>0){
                let firstRow=`<tr>
                <td>Area</td>
                <td>Helpline</td>
                <td>status</td>
                
                </tr>`
                document.getElementById('table').innerHTML=firstRow;
            }
            
            for (let i = 0; i < areas.length; i++) {
                let row = `<tr>
                    <td>${areas[i].area}</td>
                    <td>${areas[i].helpline}</td>
                    <td>${areas[i].status}</td>
                    
                </tr>`;
                document.getElementById('table').innerHTML += row;
            }
            
            
            
        }
    }
}