<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Complaint</title>
    <link rel="stylesheet" href="../asset/css/complaintRegister.css"> 
    <script src="../asset/js/complaintRegister.js"></script>
</head>
<body>

    <h1>Complaint Registration</h1>

    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="not selected">Select Category </option>
        <option value="environmentalConcerns">Environmental concerns</option>
        <option value="publicSafety">public safety</option>
        <option value="taxation">Taxation</option>
    </select>
    <span id="categoryS"></span><span id='catErr'></span>
    <br>

    <label for="subCategory">Subcategory:</label>
    <select name="subCategory" id="subcategory">
        <option value="not selected">Select subcategory</option>
        <option value="emergency">emergency</option>
        <option value="lessConcerns">less concerns</option>
    </select>
    <span id="subcategoryS"></span><span id='subcatErr'></span>
    <br>

    <label for="complaint_type">Complaint Type:</label>
    <select name="complaint_type" id="complaint_type">
        <option value="not selected">Select Complaint Type</option>
        <option value="Complaint">Complaint</option>
        <option value="General Query">General Query</option>
    </select>
    <span id="complaint_typeS"></span><span id='typeErr'></span>
    <br>

    <label for="district">District:</label>
    <select name="district" id="district">
        <option value="not selected">Select District</option>
        <option value="dhaka">Dhaka</option>
        <option value="sylhet">Sylhet</option>
        <option value="barishal">Barishal</option>
    </select><span id="districtS"></span>
    <br>

    <label for="complaint_details">Complaint Details :</label>
    <!-- Inside your HTML file -->
<textarea  name="complaint_details" id="complaint_details" cols="50" rows="10" ></textarea>

    <span id="complaint_detailsS"></span><span id='detailErr'></span>
    <br>

    <button onclick="complaintRegister()">Register</button>
    <div id="resultS"></div>
<button><a href="userDashboard.php">Back</a></button>
<button><a href="../controller/logout.php">Logout</a> </button>
</body>
</html>
