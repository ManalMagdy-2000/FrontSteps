<?php
include_once 'database.php';
session_start();
$sql = "SELECT username FROM worker";

//fetches the patient table data
$applicant = $connection->query($sql);

$_SESSION['errorType']= 0;


//defining the data received into variables
$username = $_POST['username'];
$userpass = $_POST['userpass'];
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//Duplicate name
while ($row =  $applicant->fetch_assoc()) {
    if ($row["username"] == $username){
        //when user is found
        $_SESSION['errorType']= 1;
        $username = $row["username"];
        header("Location:signupAppPage.php");
        break;
    }
}


$sql = "INSERT INTO Applicant(username, userpass, fullName, phone, userType) 
VALUES ('$username', '$userpass', '$fullName', '$phone', 'Applicant');";
if ($connection->query($sql) === TRUE) {
    echo "Applicant added successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$sql = "SELECT * FROM applicant";
$applicant = $connection->query($sql);
$_SESSION['profile']['username'] = $username;
while ($row =  $applicant->fetch_assoc()) {
    if ($row["username"] == $username){
        //update session variable
        $_SESSION["profile"] = $row;
    }
}
    

header("Location:addDocPage.php");
?>