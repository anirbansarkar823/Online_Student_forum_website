<!--performing insertion into table using 'MySQLi Procedural'...... -->

<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("connection problem " . mysqli_connect_error());
    
    $sql = "INSERT INTO MyGuests (firstname,lastname,email) VALUES ('Anirban', 'Sarkar', 'anirbansarkar823@gmail.com')";
    
    if(mysqli_query($conn, $sql))
    {
        echo "Record creation success";
    }
    
    else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>