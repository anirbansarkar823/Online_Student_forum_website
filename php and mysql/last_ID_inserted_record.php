<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed " . mysqli_connect_error());
    $sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('rachna', 'raj', 'rachnaraj1508@gmail.com')";
    
    if(mysqli_query($conn, $sql))
    {
        $last_id = mysqli_insert_id($conn);
        echo "last id is " . $last_id ;
            
    }
    else{
        echo "error " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>