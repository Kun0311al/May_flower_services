<?php
    $Name = $_POST['pName'];
    $Email = $_POST['pEmail'];

    //database connection
    $con = new mysqli('localhost', 'root', '', 'mayflower');
    if($con->connect_error){
        die('Connection Failed :'.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into registration(Name, Email) values(?, ?)");
        $stmt->bind_param("ss",$Name, $Email);
        $stmt->execute();
        echo "We will contact you soon..";
        $stmt->close();
        $stmt->close();
    }
?>