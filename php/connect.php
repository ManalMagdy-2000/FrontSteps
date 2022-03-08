<?php
$fullname = $_POST['fullname'];
$ID = $_POST['ID'];
$income = $_POST['income'];
$doc = $_POST['doc'];
$conn = new mysqli('localhost','root' ,'','frontSteps');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(fullname,ID,income,doc)
        values(?,?,?,?)");
        $stmt->bind_param("ssib",$fullname , $ID,$income,$doc);
        $stmt->execute();
        echo "applicant registered successfully...";
        $stmt->close();
        $conn->close();
}
?>


