function signIn() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/signInCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('email=' + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText;
            if (response === "invalid email") {
                document.getElementById("emailS").innerHTML = "Invalid email";
                document.getElementById("passwordS").innerHTML = "";
                document.getElementById("resultS").innerHTML = "";
            } else if (response === "invalid password") {
                document.getElementById("emailS").innerHTML = "";
                document.getElementById("passwordS").innerHTML = "Invalid password.";
                document.getElementById("resultS").innerHTML = "";
            } else if (response === "invalid user") {
                document.getElementById("emailS").innerHTML = "";
                document.getElementById("passwordS").innerHTML = "";
                document.getElementById("resultS").innerHTML = "Invalid user";
            }
            else if (response == "admin") {
                window.location = "../../../final/Complaints-Management-System-Project/view/adminDashboard.php";

            }
            else if (response == "user") {
                window.location = "../../../final/Complaints-Management-System-Project/view/userDashboard.php";
            }
        }
    };
}

