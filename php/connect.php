<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['fullname']) && isset($_POST['ID']) &&
        isset($_POST['income']) && isset($_POST['doc'])) {
        
        $fullname = $_POST['fullname'];
        $ID = $_POST['ID'];
        $income = $_POST['income'];
        $doc = $_POST['doc'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "bit216";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT ID FROM registration WHERE ID = ? LIMIT 1";
            $Insert = "INSERT INTO register(fullname , ID , income , doc) values(?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $ID);
            $stmt->execute();
            $stmt->bind_result($resulID);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssib",$fullname , $ID , $income , $doc);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>