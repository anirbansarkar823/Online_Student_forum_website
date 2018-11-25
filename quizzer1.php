<?php include 'database.php'; ?>

<?php
/*
* get the total number of questions
*/

$query = "SELECT * FROM questions";

//get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <tilte>PHP QUIZZER</tilte>
        <link rel="stylesheet" href="quizzer1.css" type="text/css" />
    </head>
    
    <body>
        <header>
            <div class="container">
                <h1> PHP QUIZZER</h1>
            </div>
        </header>
        
        <main>
            <div class="container">
                <h2>Test Your PHP Knowledge</h2>
                <p>This is a multiple choice quiz to test your knowledge of php</p>
                <ul>
                    <li><strong>Number of Questions:</strong> <?php echo $total; ?></li>
                    
                    <li><strong>Type:</strong>Multiple Choice</li>
                    
                    <li><strong>Estimated Time:</strong> <?php echo $total * .5; ?> minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">start Quiz</a>
            </div>
            
        </main>
        <footer>
            <div class="container">
                copyright &copy; 2017, PHP Quizzer
            </div>
  
        </footer>
    
 </body>
    
</html>