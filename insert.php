<!DOCTYPE html>
<html>
 
<head>
    <title>Contact MayFlower</title>
</head>
 
<body>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "mayflower");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $p_name =  $_REQUEST['pName'];
        $email = $_REQUEST['pEmail'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contactus1  VALUES ('$p_name''$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>We'll Connect You Soon</h3>";
 
            echo nl2br("\n$p_name"
                . "$email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>
 
</html>