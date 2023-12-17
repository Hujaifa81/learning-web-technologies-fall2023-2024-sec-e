<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<table width="100%" height="550" align="center">
        <tr>
            <td>
                <table align="center" width="50%">
                    <tr>
                        <td>
                            <main>
                                <h2>Registration</h2>
                                <form action="../Controller/regtrationCheck.php" method="post" onsubmit="return registerUser()">
                                    Id: <input type="text" id="id" name="id" ><br><br>
                                    Name: <input type="text" id="name" name="name" ><br><br>
                                    Password: <input type="password" id="password" name="password" ><br><br>
                                    Confirm Password: <input type="password" id="confirmPassword" name="confirmPassword" ><br><br>
                                    UserType:
                                    <select id="userType" name="userType">
                                        <option value="User">User</option>
                                        <option value="Admin">Admin</option>
                                    </select><br><br>
                                    Email: <input type="email" id="email" name="email" onblur="checkEmailAvailability(this.value)">
                                    <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br><div id="emailAvailability"></div><br><br>
                                    <input type="submit" name="submit" value="Register">  <a href='../View/login.php'><h3>Login </h3></a>
                                </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    

</body>
</html>