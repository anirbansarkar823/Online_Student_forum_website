<?php
	define('SERVER_NAME','localhost');
	define('USER_DB','root');
	define('DB_PASSWORD','');
	define('DB_NAME', 'Simple_login_admin');

/*	
//ONLY FOR THE CREATION OF THE DATABASE.....
	$conn = mysqli_connect(SERVER_NAME,USER_DB,DB_PASSWORD) or die("Failed:" . mysqli_error());

	$sql = "CREATE DATABASE Simple_login_admin";

	if(mysqli_query($conn,$sql))
		{
			echo "created";
		}
		else
			echo "Failed" . mysqli_error($conn);



//THE ONLY PART OF THIS SECTION OF CODE IS TO CREATE A TABLE....
	

		
	
		$sql = "CREATE TABLE Login(UserNameID INT(9) NOT NULL auto_increment, userName VARCHAR(40) NOT NULL, pass VARCHAR(40) NOT NULL, PRIMARY KEY(UserNameID))";

		if(mysqli_query($conn,$sql))
		{
			echo "success";
		}
		else
		{
			echo "Failed: ". mysqli_error($conn);
		}
*/
//INSERTION INTO THE TABLE....
$conn = mysqli_connect(SERVER_NAME,USER_DB,DB_PASSWORD,DB_NAME);
		if(!$conn)
		{
			die("Failed: " . mysqli_error($conn));
		}
/*
		$sql = "INSERT INTO Login(userName, pass) VALUES('d/15/cs/106','rachna')";
	
		if(mysqli_query($conn,$sql))
			echo "success";
		//$sql = mysqli_select_db($conn,) or die("Failed: " . mysqli_error($conn));
*/
		function SignIn()
		{

			$conn = mysqli_connect(SERVER_NAME,USER_DB,DB_PASSWORD,DB_NAME);
		if(!$conn)
		{
			die("Failed: " . mysqli_error($conn));
		}

			session_start();//starting the session for user profile page

			if(!empty($_POST['user']))
			{//checking the 'user' name which is from Sign_In.html, is it empty or have some text...

				$sql = "SELECT * FROM Login WHERE userName='$_POST[user]' AND pass = '$_POST[pass]'" ;
				$query = mysqli_query($conn,$sql);

				$row = mysqli_fetch_array($query);

				if(!empty($row['userName']) AND !empty($row['pass']))
				{
					$_SESSION['userName'] = $row['pass'];
					echo "Your have log in successfully";
					header('Location: http://localhost/web%20technology%20project/NoDuesForm_Department.html');
				}	
				else
				{
					echo "wrong username or passsword";
				}
			}
		}//end of function..

		if(isset($_POST['submit']))
		{
			SignIn();
		}
$sql = "SELECT * FROM Login WHERE userName='$_POST[user]' AND pass = '$_POST[pass]'" ;
		if(mysqli_query($conn,$sql))
		
		{}
		else
		{
			echo "Failed: ". mysqli_error($conn);
		}

		mysqli_close($conn);

		?>