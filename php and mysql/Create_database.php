<?php

$servername = "localhost";
$username = "root";
$password = "";

//Create connection...

$conn = mysqli_connect($servername, $username, $password);

//when we create a new database, we must only specify the ....servername, username and password. 
//Check connection....

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}

//Create database...
$sql = "CREATE DATABASE myDB";

if(mysqli_query($conn,$sql))
{
    echo "database creation successful";
}
else{
    echo "connection problem" . mysqli_error($conn);
}
mysqli_close($conn);
?>