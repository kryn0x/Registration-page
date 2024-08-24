<?php

    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    
    $phoneno = $_POST['phoneno'];

    $conn = new mysqli('localhost','root','','krsnaa');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(username, gmail, gender, password, phoneno) 
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi",$username, $gmail, $gender, $password, $phoneno);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();

    }
?>