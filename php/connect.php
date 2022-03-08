<?php
$fullname = $_POST['fullname'];
$ID = $_POST['ID'];
$income = $_POST['income'];
$doc = $_POST['doc'];
$conn = new mysqli('localhost','root' ,'','frontSteps');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
?>


