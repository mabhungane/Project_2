<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connection_error)
    {
        die('Connection Failed : '.$conn->connection_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into registration(fullName, email, password, repassword)")
            values(?,?,?,?)");
        $stmt->bind_param("ssss",  $fullName,  $email, $password, $repassword);
        $stmt->execute();
        echo "Successfully Registered, Welcome!!!";
        $stmr->close();
        $conn->close();

    }
?>