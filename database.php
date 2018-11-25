<?php
//Create connection credentials
$db_host = 'localhost';
    
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = '';
    
//Create mysqli objects
    
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//error handler
if($mysqli->connect_error)
{
    print("Connect failed:%s\n".$mysqli->connect_error);
    exit();
}

//syntax error, unexpected '$mysqli' (T_VARIABLE) :
//THIS KIND OF ERRORS COMES INTO DISPLAY, IF WE FORGET TO GIVE THE SEMICOLON;