 <?php 
        
       //CREATING NEW TABLE IN myDB database....
        
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
    
 /*    //sql to create table.....
    
    $sql = "CREATE TABLE FormalIntro(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_data TIMESTAMP)";

    if(mysqli_query($conn,$sql))
    {
        echo "Table MyGuest created successfully";
    }else{
        echo "Error creating table:" . mysqli_error($conn);
    }
    
    mysqli_close($conn);  */
//.......................................................................................................................................
        
        
        
        //define variables and set to empty..
        $firstnameErr = $emailErr = $lastnameErr = "";

        $firstname = $email = $lastname = "";
            
        

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST["firstname"]))
            {
                $firstnameErr = "FirstName is required";
            }
            else
            {
                $firstname = $_POST["firstname"];

//check if name only contains letters and whitespace
        
                if(!preg_match("/^[a-zA-Z ]*$/",$firstname))
                {
                    $firstnameErr = "Only letters and white space allowed";
                }
            }
    
            if(empty($_POST["email"]))
            {
                $emailErr = "Email is required";
            }
            else
            {
                $email = $_POST["email"];
            }

            if(empty($_POST["lastname"]))
            {
                $lastnameErr = "LastName is empty";
            }
            else
            {
                $lastname = $_POST["lastname"];
            }
        }
        
        //INSERTION INTO THE TABLE........
    
    $sql = "INSERT INTO FormalIntro(firstname,lastname,email) VALUES ('$firstname', '$lastname', '$email')";
    
    if(mysqli_query($conn, $sql))
    {
        //echo "Record creation success";
    }
    
    else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
//.......................................................................................................................................



echo "<h2>Your Input:</h2>";
 echo $_POST['firstname'];
echo "<br>";
 echo $_POST['lastname']; 
echo "<br>";
 echo $_POST['email']; 
echo "<br>";



        
 ?>
       