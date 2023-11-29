<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
require_once("../model/jobModel.php");
$id="";
$companyName="";
$jobTitle="";
$jobLocation="";
$salary="";

if(!isset($_GET['jobId'])){
    header('location:../view/manageJobs.php?updateStatus=false');
}

else{
    $id=$_GET['jobId'];
    $job=getJobWithId($id);
    if(!$job){
        header('location:../view/manageJobs.php?updateStatus=false');
        exit();
    }
    else{
        $companyName=$job['companyName'];
        $jobTitle=$Job['jobTitle'];
        $jobLocation=$job['jobLocation'];
        $salary=$job['salary'];
    }
}

?>
<form action="../controller/manageJobsCheck.php" method="POST">
    companyName: <input type="text" name="companyName" value="<?php echo $companyName;?>">
    jobTitle: <input type="text" name="jobTitle" value="<?php echo $jobTitle;?>">
    salary: <input type="text" name="salary" value="<?php echo $salary;?>">
    jobLocation: <input type="text" name="jobLocation" value="<?php echo $jobLocation;?>">
    Job id: <input type="text" name="id" value="<?php echo $id;?>">
    <input type="submit" name="updateJobSubmit" value="Update">
</form>
<a href="manageJobs.php">Back</a>
<a href="../controller/logout.php">Logout</a>