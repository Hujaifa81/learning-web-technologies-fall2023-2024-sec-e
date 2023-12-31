function processing(){
    let xhttp = new XMLHttpRequest();
    let id=0;
    xhttp.open('POST', '../controller/complaintDashboardCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id=' + id);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            
            document.getElementById('processingComplaint').innerHTML = response;
        }
    }
}
function received(){
    let xhttp = new XMLHttpRequest();
    let id=1;
    xhttp.open('POST', '../controller/complaintDashboardCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id=' + id);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            
            document.getElementById('receivedComplaint').innerHTML = response;
        }
    }
}
function completed(){
    let xhttp = new XMLHttpRequest();
    let id=2;
    xhttp.open('POST', '../controller/complaintDashboardCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id=' + id);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            
            document.getElementById('completedComplaint').innerHTML = response;
        }
    }
}