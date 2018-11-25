<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //check to see if the score  is set_error_handler
    if(!isset($_SESSION['score']))//this represents 'not isset()'
        //$_SESSION IS A GLOBAL VARIABLE....
    {
        $_SESSION['score'] = 0;
    }
//_POST[]--> is a super global array..................
    if($_POST)
    {
        $number = $_POST['number'];
        $selected_choice = $_POST['choice']; 
//the contents of the single inverted commas are coming from the 'name attribute' in the question.php file
        $next = $number + 1;   
        
        /*
        *Get the total questions
        */
        
        $query = "SELECT * FROM `questions`";
        
        //Get results
        
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;//what is num_rows??
        /*
            *Get correct choice
        */
        
        $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";
//'*' is pronunced as 'all'
//around `choices` these are not single quotation, this are obtained by typing the key just above 'Tab'....
        
        //Get result
            
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
        //Get row
        $row = $result->fetch_assoc();
        
        //Get correct choices
        $correct_choice = $row['id'];
        
        //compare
        if($correct_choice == $selected_choice)
        {
            //Answer is correct
            $_SESSION['score']++;
        }
        //check if the last question....
        if($number == $total)
        {
            header("Location: final.php");
            exit();
        }
//header() function is used to redirect....
        else
        {
            header("Location: question.php?n=".$next);  
        }
        
        echo $number.'<br>';
        echo $selected_choice;
       // print_r($_POST);
    }