<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    //Create connection...
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    //Check connection....
    if(!$conn)
        die("Connection failed " . mysqli_connect_error());
    
    //sql to delete a record....
    $sql = "DELETE FROM MyGuests ";
//$sql = "DELETE FROM MyGuest WHERE id = 3";
    
    if(mysqli_query($conn, $sql))
    {
        echo "Record successfully deleted";
    }
    
    else{
        echo "error deleting" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>