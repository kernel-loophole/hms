<!DOCTYPE html>
<html>
  
<head>
    <title>Data insertion</title>
</head>
  
<body>
  
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("sql6.freemysqlhosting.net","sql6463776","fV1YwgwsvR","sql6463776");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $fname =  $_REQUEST['fname'];
        $contact = $_REQUEST['contact'];
        $email =  $_REQUEST['email'];
        $service = $_REQUEST['service'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user  VALUES ('$fname','$contact','$email','$service')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
</body>
  
</html>
