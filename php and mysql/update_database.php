<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    //Create connection...
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    //Check connection...
    if(!$conn)
    {
        die("Connection failed " . mysqli_connect_error());
    }
    
    $sql = "UPDATE MyGuests SET email='anirbansarkar823@gmail.com' WHERE id=10";
    
    if(mysqli_query($conn,$sql))
    {
        echo "record updated successfully";
    }
    
    else{
        echo "Error Updating record " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>