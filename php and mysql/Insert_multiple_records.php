<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn)
        die ("connection problem " . mysqli_connect_error());
    
    $sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('rachna', 'raj', 'rachnaraj1508@gmail.com');";
    
    $sql .= "INSERT INTO MyGuests(firstnaem, lastname, email) VALUES ('rachna', 'raj', 'rachnaraj1508@gmail.com');";
    
    $sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('arunabha', 'sarkar', 'arunabhs3@gmail.com');";

    if(mysqli_multi_query($conn,$sql))
    {
        echo "successful Insertion";
    }
    else
    {
        echo "connection error " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    ?>