<?php
$dsbtDate = $_POST['dsbtDate'];
$cashAmount = $_POST['cashAmount'];
$goods = $_POST['goods'];
$conn = new mysqli('localhost','root' ,'','frontSteps');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $sql = "SELECT * FROM  disbursement where ID ='".$_POST['ID']."'"; 
    $sql = "INSERT INTO disbursement ($dsbtDate,$cashAmount , $goods) SELECT ID
    FROM registration "; 
    $resultset_1=mysqli_query($conn, $sql);  
    $count = mysqli_num_rows($resultset_1);  
    if($count == 0){
        $stmt = $conn->prepare("insert into registration(fullname,ID,income,doc)
        values(?,?,?,?)");
        $stmt->bind_param("ssib",$fullname , $ID,$income,$doc);
        $stmt->execute();
        echo "applicant registered successfully...";
        $stmt->close();
        $conn->close();
    }else{
        echo "The user ID already has been registered" ;
    }

}
?>