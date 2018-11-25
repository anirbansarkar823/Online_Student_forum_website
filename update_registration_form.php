<?php

$servername = "localhost";
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
    
  
    
    $sql = "UPDATE registration_form SET what_are_u = '$what_are_u', name ='$name',module ='$module', year='$year', roll_number='$roll_number', semester='$semester',session='$session',department='$department',sex='$sex',category='$category',hostel_block='$hostel_block',room_number='$room_number',state='$state',student_mobile_number='$student_mobile_number',dob='$dob',mother_name='$mother_name',father_name='$father_name',father_mobile_number='$father_mobile_number',parent_address='$parent_address',post_office='$post_office',police_station='$police_station',district='$district',pin_code='$pincode',course_code1='$course_code1',course_code1_title='$course_code1_title',course_code1_L1='$course_code1_L1',course_code1_T1='$course_code1_T1',course_code1_P1='$course_code1_P1',course_code1_C1='$course_code1_C1',course_code1_co_ordinator1='$course_code1_co_ordinator1',course_code1_remark1='$course_code1_remark1',course_code2='$course_code2',course_code2_title='$course_code2_title',course_code2_L2='$course_code2_L2',course_code2_T2='$course_code2_T2',course_code2_P2='$course_code2_P2',course_code2_C2='$course_code2_C2',course_code2_co_ordinator2='$course_code2_co_ordinator2',course_code2_remark2='$course_code2_remark2',course_code3='$course_code3',course_code3_title='$course_code3_title',course_code3_L3='$course_code3_L3',course_code3_T3='$course_code3_T3',course_code3_P3='$course_code3_P3',course_code3_C3='$course_code3_C3',course_code3_co_ordinator3='$course_code3_co_ordinator3',course_code3_remark3='$course_code3_remark3',course_code4='$course_code4',course_code4_title='$course_code4_title',course_code4_L4='$course_code4_L4',course_code4_T4='$course_code4_T4',course_code4_P4='$course_code4_P4',course_code4_C4='$course_code4_C4',course_code4_co_ordinator4='$course_code4_co_ordinator4',course_code4_remark4='$course_code4_remark4',course_code5='$course_code5',course_code5_title='$course_code5_title',course_code5_L5='$course_code5_L5',course_code5_T5='$course_code5_T5',course_code5_P5='$course_code5_P5',course_code5_C5='$course_code5_C5',course_code5_co_ordinator5='$course_code5_co_ordinator5',course_code5_remark5='$course_code5_remark5',course_code6='$course_code6',course_code6_title='$course_code6_title',course_code6_L6='$course_code6_L6',course_code6_T6='$course_code6_T6',course_code6_P6='$course_code6_P6',course_code6_C6='$course_code6_C6',course_code6_co_ordinator6='$course_code6_co_ordinator6',course_code6_remark6='$course_code6_remark6',course_code7='$course_code7',course_code7_title='$course_code7_title',course_code7_L7='$course_code7_L7',course_code7_T7='$course_code7_T7',course_code7_P7='$course_code7_P7',course_code7_C7='$course_code7_C7',course_code7_co_ordinator7='$course_code7_co_ordinator7',course_code7_remark7='$course_code7_remark7',total='$total',Rcourse_code1='$Rcourse_code1',Rcourse_code1_title='$Rcourse_code1_title',Rcourse_code1_L1='$Rcourse_code1_L1',Rcourse_code1_T1='$Rcourse_code1_T1',Rcourse_code1_P1='$Rcourse_code1_P1',Rcourse_code1_C1='$Rcourse_code1_C1',Rcourse_code1_co_ordinator1='$Rcourse_code1_co_ordinator1',Rcourse_code1_remark1='$Rcourse_code1_remark1',Rcourse_code2='$Rcourse_code2',Rcourse_code2_title='$Rcourse_code2_title',Rcourse_code2_L2='$Rcourse_code2_L2',Rcourse_code2_T2='$Rcourse_code2_T2',Rcourse_code2_P2='$Rcourse_code2_P2',Rcourse_code2_C2='$Rcourse_code2_C2',Rcourse_code7_co_ordinator7='$Rcourse_code2_co_ordinator2',Rcourse_code7_remark7='$Rcourse_code2_remark2',Rtotal='$Rtotal' WHERE registration_number='$registration_number' ";

    if(mysqli_query($conn,$sql))
    {
        echo "record updated successfully";
    }
    
    else{
        echo "Error Updating record " . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    ?>