<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php

    //set question number
    $number = (int) $_GET['n'];

/*
        *Get the total questions
        */
        
        $query = "SELECT * FROM `questions`";
        
        //Get results
        
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;//what is num_rows??
        

/*
*Get the question
*/

    $query = "SELECT * FROM questions WHERE question_number='$number'";

    //Get result

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();

/*
*Get the question
*/

    $query = "SELECT * FROM choices WHERE question_number='$number'";

    //Get result

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

    
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
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total ?></div>
                <p class="question">
                   <?php echo $question['text'];
                    ?>
                </p>
                <form method="post" action="process.php">
                    
                    <ul class="choices">
                        <?php while($row  = $choices->fetch_assoc()): ?><!--after while it is not semicolon, but instead it is colon-->
                        
                             <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"> <?php echo $row['text']; ?></li>
                
                       <?php endwhile ?>
                    </ul> 
                        <input type="submit" value="submit" />
                        <input type="hidden" name="number" value="<?php echo $number ?>" />
                </form>
            </div>
            
        </main>
        <footer>
            <div class="container">
                copyright &copy; 2017, PHP Quizzer
            </div>
        </footer>
        
    </body>
</html>