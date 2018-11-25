<!DOCTYPE HTML>

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .error{color: #FF0000;}
    </style>
</head>
    <body>
        <?php
         $firstnameErr = $emailErr = $lastnameErr = "";
        ?>
        
        <h2>PHP form validation Example</h2>
        
        <p><span class="error">* required field.</span></p>
            
        <form method="post" action="show.php"> 
            
            FirstName: <input type="text" name="firstname" ><!--value="<?php// echo $firstname; ?>"-->
                
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <br><br>
            
            Lastname: <input type="text" name="lastname" ><!--value="<?php //echo $lastname; ?>""-->
                
            <span class="error">* <?php echo $lastnameErr; ?></span>
            <br><br>
            
            Email: <input type="email" name="email"  ><!--value="<?php //echo $email; ?>-->
            
            <span class="error">* <?php echo $emailErr ?></span>
            <br><br>
            <form action="show.php" method="get">
            
            <input type="submit" name="submit" value="submit" onclick="show.php">
            </form>
            
        </form>
        
        
   
    
    </body>
</html>