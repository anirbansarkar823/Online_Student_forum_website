<html>
<body>
    
<form action="FileUpload.html">
        <input type="submit" style="float:right;" value="upload file" onclick="window.open('http://localhost/web%20technology%20project/fileupload_prepared_by_abhishek.html','_blank');"/>
    </form>
<?php 
       
/*/CREATING DATABASE......

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
$sql = "CREATE DATABASE registrationFormBackendPart";

if(mysqli_query($conn,$sql))
{
    echo "database creation successful";
}
else{
    echo "connection problem" . mysqli_error($conn);
}
*/



//-----------------------------------------------------------------------------------------------------------------------------------------------


//CREATING NEW TABLE IN registration_form_backend database....
        
    $servername = "localhost";
    $username = "root";
    $password = "";
   
    $dbname = "registrationFormBackendPart";

    
   
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //here we are mentioning four parameters..as because now we will create table and columns in the database...
    
    if(!$conn)
    {
      die("connection failed" . mysqli_connect_error());  
    }


    
    /*/sql to create table.....
    
    $sql = "CREATE TABLE registration_form( what_are_u VARCHAR(15) , name VARCHAR(30) , module VARCHAR(20),registration_number VARCHAR(10), year VARCHAR(15), roll_number VARCHAR(15), semester VARCHAR(8), session DATE,  department VARCHAR(30),sex VARCHAR(8), category VARCHAR(8), hostel_block VARCHAR(1),room_number INT(3), state VARCHAR(18),student_mobile_number VARCHAR(13),dob DATE, mother_name VARCHAR(15), father_name VARCHAR(15), father_mobile_number VARCHAR(13), parent_address VARCHAR(40), post_office VARCHAR(14), police_station VARCHAR(18), district VARCHAR(15), pincode INT(8),course_code1 VARCHAR(7), course_code1_title VARCHAR(20), course_code1_L1 INT(1), course_code1_T1 INT(1), course_code1_P1 INT(1), course_code1_C1 INT(1),course_code1_co_ordinator1 VARCHAR(18), course_code1_remark1 VARCHAR(20),course_code2 VARCHAR(7), course_code2_title VARCHAR(20), course_code2_L2 INT(1), course_code2_T2 INT(1), course_code2_P2 INT(1), course_code2_C2 INT(1),course_code1_co_ordinator2 VARCHAR(18), course_code1_remark2 VARCHAR(20), course_code3 VARCHAR(7), course_code3_title VARCHAR(20), course_code3_L3 INT(1), course_code3_T3 INT(1), course_code3_P3 INT(1), course_code3_C3 INT(1),course_code3_co_ordinator3 VARCHAR(18), course_code3_remark3 VARCHAR(20),course_code4 VARCHAR(7), course_code4_title VARCHAR(20), course_code4_L4 INT(1), course_code4_T4 INT(1), course_code4_P4 INT(1), course_code4_C4 INT(1),course_code4_co_ordinator4 VARCHAR(18), course_code4_remark4 VARCHAR(20),course_code5 VARCHAR(7), course_code5_title VARCHAR(20), course_code5_L5 INT(1), course_code5_T5 INT(1), course_code5_P5 INT(1), course_code5_C5 INT(1),course_code5_co_ordinator5 VARCHAR(18), course_code5_remark5 VARCHAR(20),course_code6 VARCHAR(7), course_code6_title VARCHAR(20), course_code6_L6 INT(1), course_code6_T6 INT(1), course_code6_P6 INT(1), course_code6_C6 INT(1),course_code6_co_ordinator6 VARCHAR(18), course_code6_remark6 VARCHAR(20),course_code7 VARCHAR(7), course_code7_title VARCHAR(20), course_code7_L7 INT(1), course_code7_T7 INT(1), course_code7_P7 INT(1), course_code7_C7 INT(1),course_code7_co_ordinator7 VARCHAR(18), course_code7_remark7 VARCHAR(20),total INT(2),Rcourse_code1 VARCHAR(7), Rcourse_code1_title VARCHAR(20), Rcourse_code1_L1 INT(1), Rcourse_code1_T1 INT(1), Rcourse_code1_P1 INT(1), Rcourse_code1_C1 INT(1),Rcourse_code1_co_ordinator1 VARCHAR(18), Rcourse_code1_remark1 VARCHAR(20),Rcourse_code2 VARCHAR(7), Rcourse_code2_title VARCHAR(20), Rcourse_code2_L2 INT(1), Rcourse_code2_T2 INT(1), Rcourse_code2_P2 INT(1), Rcourse_code2_C2 INT(1),Rcourse_code1_co_ordinator2 VARCHAR(18), Rcourse_code1_remark2 VARCHAR(20),Rtotal INT(2))";

    if(mysqli_query($conn,$sql))
    {
        echo "Table MyGuest created successfully";
    }else{
        echo "Error creating table:" . mysqli_error($conn);
    }
    
    mysqli_close($conn);  
*/
//.......................................................................................................................................
        
    //variable initialised....
    $what_are_u = $name = $module = $registration_number = $year = $roll_number = $semester = $session = $department = $sex = $category = $hostel_block = $room_number= $state = $student_mobile_number = $dob = $mother_name = $father_name =  $father_mobile_number = $parent_address = $post_office = $police_station =$district = $pincode = $course_code1 = $course_code1_title = $course_code1_L1 = $course_code1_T1 = $course_code1_P1 = $course_code1_C1 = $course_code1_co_ordinator1 = $course_code1_remark1 = $course_code2 = $course_code2_title = $course_code2_L2 = $course_code2_T2 = $course_code2_P2 = $course_code2_C2 = $course_code2_co_ordinator2 = $course_code2_remark2 = $course_code3 = $course_code3_title = $course_code3_L3 = $course_code3_T3 = $course_code3_P3 = $course_code3_C3 = $course_code3_co_ordinator3 = $course_code3_remark3 = $course_code4 = $course_code4_title = $course_code4_L4 = $course_code4_T4 = $course_code4_P4 = $course_code4_C4 = $course_code4_co_ordinator4 = $course_code4_remark4 = $course_code5 = $course_code5_title = $course_code5_L5 = $course_code5_T5 = $course_code5_P5 = $course_code5_C5 = $course_code5_co_ordinator5 = $course_code5_remark5 =  $course_code6 = $course_code6_title = $course_code6_L6 = $course_code6_T6 = $course_code6_P6 = $course_code6_C6 = $course_code6_co_ordinator6 = $course_code6_remark6 = $course_code7 = $course_code7_title = $course_code7_L7 = $course_code7_T7 = $course_code7_P7 = $course_code7_C7 = $course_code7_co_ordinator7 = $course_code7_remark7 =$total =$Rcourse_code1 = $Rcourse_code1_title = $Rcourse_code1_L1 = $Rcourse_code1_T1 = $Rcourse_code1_P1 = $Rcourse_code1_C1 = $Rcourse_code1_co_ordinator1 = $Rcourse_code1_remark1 = $Rcourse_code2 = $Rcourse_code2_title = $Rcourse_code2_L2 = $Rcourse_code2_T2 = $Rcourse_code2_P2 = $Rcourse_code2_C2 = $Rcourse_code2_co_ordinator2 = $Rcourse_code2_remark2 = $Rtotal =  "";
        
        //define variables..
       if (isset($_POST['what_are_u']))
       $what_are_u = $_POST["what_are_u"];
        
        if (isset($_POST['name']))
       $name =$_POST["name"];

        if (isset($_POST['module']))
       $module = $_POST["module"];

        if (isset($_POST['registration_number']))
       $registration_number = $_POST["registration_number"];

        if (isset($_POST['year']))
        $year = $_POST["year"]; 

        if (isset($_POST['roll_number']))
       $roll_number = $_POST["roll_number"];

        if (isset($_POST['semester']))
       $semester = $_POST["semester"];

        if (isset($_POST['session']))
       $session = $_POST["session"];

        if (isset($_POST['department']))
       $department = $_POST["department"];

        if (isset($_POST['sex']))
       $sex = $_POST["sex"];

        if (isset($_POST['category']))
       $category = $_POST["category"];
    
    if (isset($_POST['hostel_block']))
       $hostel_block = $_POST["hostel_block"];

        if (isset($_POST['room_number']))
       $room_number = $_POST["room_number"];

        if (isset($_POST['state']))
       $state = $_POST["state"];

    if (isset($_POST['student_mobile_number']))
       $student_mobile_number = $_POST["student_mobile_number"];

        if (isset($_POST['dob']))
       $dob = $_POST["dob"];

    if (isset($_POST['mother_name']))
       $mother_name = $_POST["mother_name"];

    if (isset($_POST['father_name']))
       $father_name = $_POST["father_name"];

        if (isset($_POST['father_mobile_number']))
       $father_mobile_number = $_POST["father_mobile_number"];

        if (isset($_POST['parent_adderss']))
       $parent_address = $_POST["parent_address"];

    if (isset($_POST['post_office']))
       $post_office = $_POST["post_office"];

    if (isset($_POST['police_station']))
       $police_station = $_POST["police_station"];

    if (isset($_POST['district']))
       $district = $_POST["district"];

    if (isset($_POST['pincode']))
       $pincode = $_POST["pincode"];

    if (isset($_POST['course_code1']))
       $course_code1 = $_POST["course_code1"];

    if (isset($_POST['course_code1_title']))
       $course_code1_title = $_POST["course_code1_title"];
 
    if (isset($_POST['course_code1_L1']))
       $course_code1_L1 = $_POST["course_code1_L1"];

    if (isset($_POST['course_code1_T1']))
       $course_code1_T1 = $_POST["course_code1_T1"];
				
    if (isset($_POST['course_code1_P1']))
       $course_code1_P1 = $_POST["course_code1_P1"];

    if (isset($_POST['course_code1_C1']))
       $course_code1_C1 = $_POST["course_code1_C1"];

    if (isset($_POST['course_code1_co_ordinator1']))
       $course_code1_co_ordinator1  = $_POST["course_code1_co_ordinator1"];

    if (isset($_POST['course_code1_remark1']))
       $course_code1_remark1 = $_POST["course_code1_remark1"];

    if (isset($_POST['course_code2']))
       $course_code2 = $_POST["course_code2"];
    
if (isset($_POST['course_code2_title']))
       $course_code2_title = $_POST["course_code2_title"];

    if (isset($_POST['course_code2_L2']))
       $course_code2_L2 = $_POST["course_code2_L2"];

        if (isset($_POST['course_code2_T2']))
       $course_code2_T2 = $_POST["course_code2_T2"];

        if (isset($_POST['course_code2_P2']))
       $course_code2_P2 = $_POST["course_code2_P2"];

        if (isset($_POST['course_code2_C2']))
       $course_code2_C2 = $_POST["course_code2_C2"];

        if (isset($_POST['course_code2_co_ordinator2']))
       $course_code2_co_ordinator2 = $_POST["course_code2_co_ordintor2"];

        if (isset($_POST['course_code2_remark2']))
       $course_code2_remark2 = $_POST["course_code2_remark2"];

        if (isset($_POST['course_code3']))
       $course_code3 = $_POST["course_code3"];

    if (isset($_POST['course_code3_title']))
	$course_code3_title = $_POST["course_code3_title"];

    if (isset($_POST['course_code3_L3']))
	$course_code3_L3 = $_POST["course_code3_L3"];

    if (isset($_POST['course_code3_T3']))
	$course_code3_T3 = $_POST["course_code3_T3"];

    if (isset($_POST['course_code3_P3']))
	$course_code3_P3 = $_POST["course_code3_P3"];

    if (isset($_POST['course_code3_C3']))
	$course_code3_C3 = $_POST["course_code3_C3"];

    if (isset($_POST['course_code3_co_ordinator3']))
	$course_code3_co_ordinator3 = $_POST["course_code3_co_ordinator3"];

    if (isset($_POST['course_code3_remark3']))
	$course_code3_remark3 = $_POST["course_code3_remark3"];

    if (isset($_POST['course_code4']))
	$course_code4 = $_POST["course_code4"];

    if (isset($_POST['course_code4_title']))
	$course_code4_title = $_POST["course_code3_title"];

    if (isset($_POST['course_code4_L4']))
	$course_code4_L4 = $_POST["course_code4_L4"];

    if (isset($_POST['course_code4_T4']))
	$course_code4_T4 = $_POST["course_code4_T4"];

    if (isset($_POST['course_code4_P4']))
	$course_code4_P4 = $_POST["course_code4_P4"];

    if (isset($_POST['course_code4_C4']))
	$course_code4_C4 = $_POST["course_code4_C4"];

    if (isset($_POST['course_code4_co_ordinator4']))
	$course_code4_co_ordinator4 = $_POST["course_code4_co_ordinator4"];

    if (isset($_POST['course_code4_remark4']))
	$course_code4_remark4 = $_POST["course_code4_remark4"];

    if (isset($_POST['course_code5']))
	$course_code5 = $_POST["course_code5"];

    if (isset($_POST['course_code5_title']))
	$course_code5_title = $_POST["course_code5_title"];

    if (isset($_POST['course_code5_L5']))
	$course_code5_L5 = $_POST["course_code5_L5"];

    if (isset($_POST['course_code5_T5']))
	$course_code5_T5 = $_POST["course_code5_T5"];

    if (isset($_POST['course_code5_P5']))
	$course_code5_P5 = $_POST["course_code5_P5"];

    if (isset($_POST['course_code5_C5']))
	$course_code5_C5 = $_POST["course_code5_C5"];

    if (isset($_POST['course_code5_co_ordinator']))
	$course_code5_co_ordinator5 = $_POST["course_code5_co_ordinator5"];

    if (isset($_POST['course_code5_remark5']))
        $course_code5_remark5 = $_POST["course_code5_remark5"];

    if (isset($_POST['course_code6']))
        $course_code6 = $_POST["course_code6"];

    if (isset($_POST['course_code6_title']))
        $course_code6_title = $_POST["course_code6_title"];

    if (isset($_POST['course_code6_L6']))
	$course_code6_L6 = $_POST["course_code6_L6"];

    if (isset($_POST['course_code6_T6']))
	$course_code6_T6 = $_POST["course_code6_T6"];
 
    if (isset($_POST['course_code6_P6']))
	$course_code6_P6 = $_POST["course_code6_P6"];

    if (isset($_POST['course_code6_C6']))
	$course_code6_C6 = $_POST["course_code6_C6"];

    if (isset($_POST['course_code6_co_ordinator']))
	$course_code6_co_ordinator6 =$_POST["course_code6_co_ordinator6"];

    if (isset($_POST['course_code6_remark6']))
	$course_code6_remark6 = $_POST["course_code6_remark6"];

    if (isset($_POST['course_code7']))
	$course_code7 =$_POST["course_code7"];

    if (isset($_POST['course_code7_title']))
	$course_code7_title =$_POST["course_code7_title"];

    if (isset($_POST['course_code7_L7']))
	$course_code7_L7 = $_POST["course_code7_L7"];

    if (isset($_POST['course_code7_T7']))
	$course_code7_T7 = $_POST["course_code7_T7"];

    if (isset($_POST['course_code7_P7']))
	$course_code7_P7 = $_POST["course_code7_P7"];

    if (isset($_POST['course_code7_C7']))
	$course_code7_C7 = $_POST["course_code7_C7"];

    if (isset($_POST['course_code7_co_ordinator7']))
	$course_code7_co_ordinator7 = $_POST["course_code7_co_ordinator7"];

    if (isset($_POST['course_code7_remark7']))
	$course_code7_remark7 = $_POST["course_code7_remark7"];

    if (isset($_POST['total']))
	$total = $_POST["total"];
if (isset($_POST['Rcourse_code1']))
	$Rcourse_code1 = $_POST["Rcourse_code1"];

    if (isset($_POST['Rcourse_code1_title']))
	$Rcourse_code1_title = $_POST["Rcourse_code1_title"];

    if (isset($_POST['Rcourse_code1_L1']))
	$Rcourse_code1_L1 = $_POST["Rcourse_code1_L1"];

    if (isset($_POST['Rcourse_code1_T1']))
	$Rcourse_code1_T1 = $_POST["Rcourse_code1_T1"];

    if (isset($_POST['Rcourse_code1_P1']))
	$Rcourse_code1_P1 = $_POST["Rcourse_code1_P1"];

    if (isset($_POST['Rcourse_code1_C1']))
	$Rcourse_code1_C1 = $_POST["Rcourse_code1_C1"];

    if (isset($_POST['Rcourse_code1_co_ordinator1']))
	$Rcourse_code1_co_ordinator1 = $_POST["Rcourse_code1_co_ordinator1"];

    if (isset($_POST['Rcourse_code1_remark1']))
	$Rcourse_code1_remark1 = $_POST["Rcourse_code1_remark1"];

    if (isset($_POST['Rcourse_code2']))
	$Rcourse_code2 = $_POST["Rcourse_code2"];

        if (isset($_POST['Rcourse_code2_title']))
	$Rcourse_code2_title = $_POST["Rcourse_code2_title"];

        if (isset($_POST['Rcourse_code2_L2']))
	$Rcourse_code2_L2 = $_POST["Rcourse_code2_L2"];

        if (isset($_POST['Rcourse_code2_T2']))
	$Rcourse_code2_T2 = $_POST["Rcourse_code2_T2"];

        if (isset($_POST['Rcourse_code2_P2']))
	$Rcourse_code2_P2 = $_POST["Rcourse_code2_P2"];

        if (isset($_POST['Rcourse_code2_C2']))
	$Rcourse_code2_C2 = $_POST["Rcourse_code2_C2"];

        if (isset($_POST['Rcourse_code2_co_ordinator2']))
	$Rcourse_code2_co_ordinator2 = $_POST["Rcourse_code2_co_ordinator2"];

        if (isset($_POST['Rcourse_code2_remark2']))
	$Rcourse_code2_remark2 = $_POST["Rcourse_code2_remark2"];

        if (isset($_POST['Rtotal']))
	$Rtotal =$_POST["Rtotal"];
            
        

            
        

        
        
        //INSERTION INTO THE TABLE........
    
        
    $sql = "INSERT INTO registration_form(what_are_u,name,module,registration_number,year,roll_number,semester,session,department,sex,category,hostel_block,room_number,state,student_mobile_number,dob,mother_name,father_name,father_mobile_number,parent_address,post_office,police_station,district,pincode,course_code1,course_code1_title,course_code1_L1,course_code1_T1,course_code1_P1,course_code1_C1,course_code1_co_ordinator1,course_code1_remark1,course_code2,course_code2_title,course_code2_L2,course_code2_T2,course_code2_P2,course_code2_C2,course_code1_co_ordinator2,course_code1_remark2,course_code3,course_code3_title,course_code3_L3,course_code3_T3,course_code3_P3,course_code3_C3,course_code3_co_ordinator3,course_code3_remark3,course_code4,course_code4_title,course_code4_L4,course_code4_T4,course_code4_P4,course_code4_C4,course_code4_co_ordinator4,course_code4_remark4,course_code5,course_code5_title,course_code5_L5,course_code5_T5,course_code5_P5,course_code5_C5,course_code5_co_ordinator5,course_code5_remark5,course_code6,course_code6_title,course_code6_L6,course_code6_T6,course_code6_P6,course_code6_C6,course_code6_co_ordinator6,course_code6_remark6,course_code7,course_code7_title,course_code7_L7,course_code7_T7,course_code7_P7,course_code7_C7,course_code7_co_ordinator7,course_code7_remark7,total,Rcourse_code1,Rcourse_code1_title,Rcourse_code1_L1,Rcourse_code1_T1,Rcourse_code1_P1,Rcourse_code1_C1,Rcourse_code1_co_ordinator1,Rcourse_code1_remark1,Rcourse_code2,Rcourse_code2_title,Rcourse_code2_L2,Rcourse_code2_T2,Rcourse_code2_P2,Rcourse_code2_C2,Rcourse_code1_co_ordinator2,Rcourse_code1_remark2,Rtotal) VALUES ('$what_are_u','$name','$module','$registration_number','$year','$roll_number','$semester','$session','$department','$sex','$category','$hostel_block','$room_number','$state','$student_mobile_number','$dob','$mother_name','$father_name','$father_mobile_number','$parent_address','$post_office','$police_station','$district','$pincode','$course_code1','$course_code1_title','$course_code1_L1','$course_code1_T1','$course_code1_P1','$course_code1_C1','$course_code1_co_ordinator1','$course_code1_remark1','$course_code2','$course_code2_title','$course_code2_L2','$course_code2_T2','$course_code2_P2','$course_code2_C2','$course_code2_co_ordinator2','$course_code2_remark2','$course_code3','$course_code3_title','$course_code3_L3','$course_code3_T3','$course_code3_P3','$course_code3_C3','$course_code3_co_ordinator3','$course_code3_remark3','$course_code4','$course_code4_title','$course_code4_L4','$course_code4_T4','$course_code4_P4','$course_code4_C4','$course_code4_co_ordinator4','$course_code4_remark4','$course_code5','$course_code5_title','$course_code5_L5','$course_code5_T5','$course_code5_P5','$course_code5_C5','$course_code5_co_ordinator5','$course_code5_remark5','$course_code6','$course_code6_title','$course_code6_L6','$course_code6_T6','$course_code6_P6','$course_code6_C6','$course_code6_co_ordinator6','$course_code6_remark6','$course_code7','$course_code7_title','$course_code7_L7','$course_code7_T7','$course_code7_P7','$course_code7_C7','$course_code7_co_ordinator7','$course_code7_remark7','$total','$Rcourse_code1','$Rcourse_code1_title','$Rcourse_code1_L1','$Rcourse_code1_T1','$Rcourse_code1_P1','$Rcourse_code1_C1','$Rcourse_code1_co_ordinator1','$Rcourse_code1_remark1','$Rcourse_code2','$Rcourse_code2_title','$Rcourse_code2_L2','$Rcourse_code2_T2','$Rcourse_code2_P2','$Rcourse_code2_C2','$Rcourse_code2_co_ordinator2','$Rcourse_code2_remark2','$Rtotal')";
    
    if(mysqli_query($conn, $sql))
    {
        //echo "Record creation success";
    }
    
    else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
    
   
//.......................................................................................................................................



echo "<h2>Your Input:</h2>";
 echo $_POST['what_are_u'];
echo "<br>";
 echo $_POST['name'];
echo "<br>";
echo $_POST['module'];
echo "<br>";
echo $_POST['registration_number'];
echo "<br>";
echo $_POST['year'];
echo "<br>";
echo $_POST['roll_number'];
echo "<br>";
echo $_POST['semester'];
echo "<br>";
echo $_POST['session'];
echo "<br>";
echo $_POST['department'];
echo "<br>";
echo $_POST['sex'];
echo "<br>";
echo $_POST['category'];
echo "<br>";
echo $_POST['hostel_block'];
echo "<br>";
echo $_POST['room_number'];
echo "<br>";
echo $_POST['state'];
echo "<br>";
echo $_POST['student_mobile_number'];
echo "<br>";
echo $_POST['dob'];
echo "<br>";
echo $_POST['mother_name'];
echo "<br>";
echo $_POST['father_name'];
echo "<br>";
echo $_POST['father_mobile_number'];
echo "<br>";
echo $_POST['parent_address'];
echo "<br>";
echo $_POST['post_office'];
echo "<br>";
echo $_POST['police_station'];
echo "<br>";
echo $_POST['district'];
echo "<br>";
echo $_POST['pincode'];
echo "<br>";
echo $_POST['course_code1'];
echo "<br>";
echo $_POST['course_code1_title'];
echo "<br>";
echo $_POST['course_code1_L1'];
echo "<br>";
echo $_POST['course_code1_T1'];
echo "<br>";
echo $_POST['course_code1_P1'];
echo "<br>";
echo $_POST['course_code1_C1'];
echo "<br>";
echo $_POST['course_code1_co_ordinator1'];
echo "<br>";
echo $_POST['course_code2_title'];
echo "<br>";
echo $_POST['course_code2_L2'];
echo "<br>";
echo $_POST['course_code2_T2'];
echo "<br>";
echo $_POST['course_code2_P2'];
echo "<br>";
echo $_POST['course_code2_C2'];
echo "<br>";
echo $_POST['course_code2_co_ordintor2'];
echo "<br>";
echo $_POST['course_code2_remark2'];
echo "<br>";
echo $_POST['course_code3'];
echo "<br>";
echo $_POST['course_code3_title'];
echo "<br>";
echo $_POST['course_code3_L3'];
echo "<br>";
echo $_POST['course_code3_T3'];
echo "<br>";
echo $_POST['course_code3_P3'];
echo "<br>";
echo $_POST['course_code2_C3'];
echo "<br>";
echo $_POST['course_code3_co_ordinator3'];
echo "<br>";
echo $_POST['course_code3_remark3'];
echo "<br>";
echo $_POST['course_code4'];
echo "<br>";
echo $_POST['course_code3_title'];
echo "<br>";

echo $_POST['course_code4_L4'];
echo "<br>";
echo $_POST['course_code4_T4'];
echo "<br>";
echo $_POST['course_code4_P4'];
echo "<br>";
echo $_POST['course_code4_C4'];
echo "<br>";
echo $_POST['course_code4_co_ordinator4'];
echo "<br>";
echo $_POST['course_code4_remark4'];
echo "<br>";
echo $_POST['course_code5'];
echo "<br>";
echo $_POST['course_code5_title'];
echo "<br>";
echo $_POST['course_code5_L5'];
echo "<br>";
echo $_POST['course_code5_T5'];
echo "<br>";
echo $_POST['course_code5_P5'];
echo "<br>";
echo $_POST['course_code5_C5'];
echo "<br>";
echo $_POST['course_code5_co_ordinator5'];
echo "<br>";
echo $_POST['course_code5_remark5'];
echo "<br>";
echo $_POST['course_code6'];
echo "<br>";
echo $_POST['course_code6_title'];
echo "<br>";
echo $_POST['course_code6_L6'];
echo "<br>";
echo $_POST['course_code6_T6'];
echo "<br>";
echo $_POST['course_code6_P6'];
echo "<br>";
echo $_POST['course_code6_C6'];
echo "<br>";
echo $_POST['course_code6_co_ordinator6'];
echo "<br>";
echo $_POST['course_code6_remark6'];
echo "<br>";
echo $_POST['course_code7'];
echo "<br>";
echo $_POST['course_code7_title'];
echo "<br>";
echo $_POST['course_code7_L7'];
echo "<br>";
echo $_POST['course_code7_T7'];
echo "<br>";
echo $_POST['course_code7_P7'];
echo "<br>";
echo $_POST['course_code7_C7'];
echo "<br>";
echo $_POST['course_code7_co_ordinator7'];
echo "<br>";
echo $_POST['course_code7_remark7'];
echo "<br>";
echo $_POST['total'];
echo "<br>";
echo $_POST['Rcourse_code1'];
echo "<br>";
echo $_POST['Rcourse_code1_title'];
echo "<br>";
echo $_POST['Rcourse_code1_L1'];
echo "<br>";
echo $_POST['Rcourse_code1_T1'];
echo "<br>";
echo $_POST['Rcourse_code1_P1'];
echo "<br>";
echo $_POST['Rcourse_code1_C1'];
echo "<br>";

echo $_POST['Rcourse_code1_co_ordinator1'];
echo "<br>";

echo $_POST['Rcourse_code1_remark1'];
echo "<br>";

echo $_POST['Rcourse_code2'];
echo "<br>";

echo $_POST['Rcourse_code2_title'];
echo "<br>";

echo $_POST['Rcourse_code2_L2'];
echo "<br>";

echo $_POST['Rcourse_code2_T2'];
echo "<br>";

echo $_POST['Rcourse_code2_P2'];
echo "<br>";

echo $_POST['Rcourse_code2_C2'];
echo "<br>";

echo $_POST['Rcourse_code2_co_ordinator2'];
echo "<br>";

echo $_POST['Rcourse_code2_remark2'];
echo "<br>";

echo $_POST['Rtotal'];
echo "<br>";

        
 if(isset($_POST['update']))
 {
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registrationFormBackendPart";
    
    //Create connection...
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    //Check connection...
    if(!$conn)
    {
        die("Connection failed " . mysqli_connect_error());
    }
    */
   
    $sql = "UPDATE registration_form SET what_are_u = '$what_are_u', name ='$name',module ='$module', year='$year', roll_number='$roll_number', semester='$semester',session='$session',department='$department',sex='$sex',category='$category',hostel_block='$hostel_block',room_number='$room_number',state='$state',student_mobile_number='$student_mobile_number',dob='$dob',mother_name='$mother_name',father_name='$father_name',father_mobile_number='$father_mobile_number',parent_address='$parent_address',post_office='$post_office',police_station='$police_station',district='$district',pin_code='$pincode',course_code1='$course_code1',course_code1_title='$course_code1_title',course_code1_L1='$course_code1_L1',course_code1_T1='$course_code1_T1',course_code1_P1='$course_code1_P1',course_code1_C1='$course_code1_C1',course_code1_co_ordinator1='$course_code1_co_ordinator1',course_code1_remark1='$course_code1_remark1',course_code2='$course_code2',course_code2_title='$course_code2_title',course_code2_L2='$course_code2_L2',course_code2_T2='$course_code2_T2',course_code2_P2='$course_code2_P2',course_code2_C2='$course_code2_C2',course_code2_co_ordinator2='$course_code2_co_ordinator2',course_code2_remark2='$course_code2_remark2',course_code3='$course_code3',course_code3_title='$course_code3_title',course_code3_L3='$course_code3_L3',course_code3_T3='$course_code3_T3',course_code3_P3='$course_code3_P3',course_code3_C3='$course_code3_C3',course_code3_co_ordinator3='$course_code3_co_ordinator3',course_code3_remark3='$course_code3_remark3',course_code4='$course_code4',course_code4_title='$course_code4_title',course_code4_L4='$course_code4_L4',course_code4_T4='$course_code4_T4',course_code4_P4='$course_code4_P4',course_code4_C4='$course_code4_C4',course_code4_co_ordinator4='$course_code4_co_ordinator4',course_code4_remark4='$course_code4_remark4',course_code5='$course_code5',course_code5_title='$course_code5_title',course_code5_L5='$course_code5_L5',course_code5_T5='$course_code5_T5',course_code5_P5='$course_code5_P5',course_code5_C5='$course_code5_C5',course_code5_co_ordinator5='$course_code5_co_ordinator5',course_code5_remark5='$course_code5_remark5',course_code6='$course_code6',course_code6_title='$course_code6_title',course_code6_L6='$course_code6_L6',course_code6_T6='$course_code6_T6',course_code6_P6='$course_code6_P6',course_code6_C6='$course_code6_C6',course_code6_co_ordinator6='$course_code6_co_ordinator6',course_code6_remark6='$course_code6_remark6',course_code7='$course_code7',course_code7_title='$course_code7_title',course_code7_L7='$course_code7_L7',course_code7_T7='$course_code7_T7',course_code7_P7='$course_code7_P7',course_code7_C7='$course_code7_C7',course_code7_co_ordinator7='$course_code7_co_ordinator7',course_code7_remark7='$course_code7_remark7',total='$total',Rcourse_code1='$Rcourse_code1',Rcourse_code1_title='$Rcourse_code1_title',Rcourse_code1_L1='$Rcourse_code1_L1',Rcourse_code1_T1='$Rcourse_code1_T1',Rcourse_code1_P1='$Rcourse_code1_P1',Rcourse_code1_C1='$Rcourse_code1_C1',Rcourse_code1_co_ordinator1='$Rcourse_code1_co_ordinator1',Rcourse_code1_remark1='$Rcourse_code1_remark1',Rcourse_code2='$Rcourse_code2',Rcourse_code2_title='$Rcourse_code2_title',Rcourse_code2_L2='$Rcourse_code2_L2',Rcourse_code2_T2='$Rcourse_code2_T2',Rcourse_code2_P2='$Rcourse_code2_P2',Rcourse_code2_C2='$Rcourse_code2_C2',Rcourse_code7_co_ordinator7='$Rcourse_code2_co_ordinator2',Rcourse_code7_remark7='$Rcourse_code2_remark2',Rtotal='$Rtotal' WHERE registration_number='$registration_number' ";

    if(mysqli_query($conn,$sql))
    {
        echo "record updated successfully";
    }
    
    else{
        echo "Error Updating record " . mysqli_error($conn);
    }
    

}
    

 mysqli_close($conn);
        
 ?>
    
<!---------------------------------------------------------------------------------------------------------------------------------------------->
<form action="update_registration_form.php">
    <input type="submit" value="Update" name="update" style="float:right;" onclick="window.open('http://localhost/web%20technology%20project/registration_form_update.html','_blank');" />
</form>
    

    <input type="button" style="float:left;" value="proceed to payment" onclick="window.open('sbionline.com','_blank');" />

    
    
    
</body>
</html>