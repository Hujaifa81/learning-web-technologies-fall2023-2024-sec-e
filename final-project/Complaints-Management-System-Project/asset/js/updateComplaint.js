function updateComplaint() {
    const id = document.getElementById("cComplaintId").value;
    const status = document.getElementById("cStatus").value;

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../controller/updateComplaintCheck.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id=" + encodeURIComponent(id) + "&status=" + encodeURIComponent(status));

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if (xhr.responseText == "invalid status") {
                document.getElementById('statusS').innerHTML = "status is invalid";
            } else {
                document.getElementById('statusS').innerHTML = "";
                document.getElementById('resultS').innerHTML = "complaint details updated";
            }
        }
    };
}
