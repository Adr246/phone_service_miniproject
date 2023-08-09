<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        
        //database connection

        $dbhost="localhost";
        $username="root";
        $password="";
        $dbname="test";
        //create connection

        $conn = mysqli_connect($dbhost,$username,$password,$dbname);
        if(!$conn)
        {
            die("Connection Failed!".$conn->connect_error);
        }
        else
        {
            print("Connection Established Sucessfully!<br>");
        }        
        
        //inserting to table
        
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $mail=$_POST['mail'];
        $ph=$_POST['phone'];
        $pass=$_POST['passwd'];
        
        $query = "INSERT INTO register (firstname, lastname, email, phone, passwd) VALUES ('$fname', '$lname', '$mail', '$ph', '$pass')";
        $result=mysqli_query($conn,$query);
        if(!$result)
        {
            echo("Failed To Sent!<br>".mysqli_error($conn));
        }
        else
        {
            echo("Query Affected");
        }   

        mysqli_close($conn);
        
    ?>
</body>
</html>