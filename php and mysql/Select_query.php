<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
//Create connection..
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("connection problem " . mysqli_connect_error());
    
    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)//the function num_rows(), checks if there are more than zero rows returned....
    {
        //output data of each row...
        while($row = mysqli_fetch_assoc($result))//the function fetch_assoc() puts all the results into an associative array that we can loop through.
        {
            echo "id:" . $row["id"] . " <br>Name: " . $row["firstname"] ." ". $row["lastname"] ." <br>email:" . $row["email"] . " ". "<br><br>";
        }
        
    }else{
        echo "0 results";
    }
mysqli_close($conn);

?>      