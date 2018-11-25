<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "test_db";

$id = "";
$fname = "";
$lname="";
$age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host, $user, $password, $database);
    }catch(Exception $ex){
    echo 'Error';
}

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['age'];
    return posts;
}

//search

if(isset($_POST['search']))
{
    $data = getPosts();
    $search_Query = "SELECT * FROM users WHERE id = $data[0]";
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
            }
        }else {
            echo 'NO Data For This id';
        }
    }else{
        echo 'Result Error';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    
    <body>
        <form action="php_insert_update_delete_search.php" method="post">
            <input type="number" name="id" placeholder="Id" value="<?php echo $id; ?>"><br><br>
            
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>"><br><br>
            
            <input type="text" name="lname" placeholder="Lase Name" value="<?php echo $lname; ?>"><br><br>
            
            <input type="number" name="age" placeholder="Age" value="<?php echo $age; ?>"><br><br>
            <div>
                <input type="submit" name="insert" value="Add">
                
                <input type="submit" name="update" value="Update">
                
                <input type="submit" name="delete" value="Delete">
                
                <input type="submit" name="search" value="Find">
                
            </div>
            </form>
    </body>
</html>