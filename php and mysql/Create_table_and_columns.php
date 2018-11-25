<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //create connection...
   
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //here we are mentioning four parameters..as because now we will create table and columns in the database...
    
    if(!$conn)
    {
      die("connection failed" . mysqli_connect_error());  
    }
    
    //sql to create table.....
    
    $sql = "CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_data TIMESTAMP)";

    if(mysqli_query($conn,$sql))
    {
        echo "Table MyGuest created successfully";
    }else{
        echo "Error creating table:" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>
    