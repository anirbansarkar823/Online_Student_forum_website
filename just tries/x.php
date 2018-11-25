
<?php
	
	$emd = $_POST["email_id"];
	$pwd = $_POST["paswrd"];
	$gnd = $_POST["gndr"];
	$dept = $_POST["dept"];
	$abt_yslf = $_POST["about_yourself"];
	$sem = $_POST["sem"];

	echo "Email: ",$emd ;
	echo "<br>";
	echo "Password: ",$pwd;
	echo "<br>";
	echo "Gender: ",$gnd;
	echo "<br>";
	echo "Department: ",$dept;
	echo "<br>";
	echo "About Yourself: ", $abt_yslf;
	echo "<br>";	
	echo "semester: ", $sem;
	echo "<br>";
?>
