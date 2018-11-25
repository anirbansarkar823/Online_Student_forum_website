<?php 
	if(isset($_POST['submit']))
	{
		$name         = $_FILES['file']['name'];
		$temp_name  = $_FILES['file']['tmp_name'];

	if(isset($name))
	{
		if(!empty($name))
		{
			$location='C:\xampp\htdocs\web technology project\php and mysql\file upload';
			if(move_uploaded_file($temp_name, $location.$name))
			{
				echo 'uploaded';
			}
		}
	}
	else{
		echo 'please uploaded';
	}
	}
?>