document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("submitBtn").addEventListener("click", function () {
        var phone = document.getElementById("phone").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        
        var xhr = new XMLHttpRequest();

        
        xhr.open("POST", "../controller/forgetPasswordCheck.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                var messageElement = document.getElementById("message");
                if (xhr.responseText.trim() === "success") {
                    messageElement.innerHTML = "Password updated successfully";
                } else {
                    messageElement.innerHTML = "Failed to update password";
                }
            }
        };

        
        xhr.send("forgetPasswordSubmit=1&phone=" + encodeURIComponent(phone) + "&newPassword=" + encodeURIComponent(newPassword) + "&confirmPassword=" + encodeURIComponent(confirmPassword));
    });
});
