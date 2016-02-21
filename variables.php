<?php 
define( "TITLEMAIN", "PHP Variables & Constants");

?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLEMAIN;?></title>
    </head>
    <body>
        <?php
            //BOOLEAN: A boolean variable specifies a value of true or false
            $loggedIn = true;
            // INTEGER: An integer variable is any whole number
            $myAge = 24;
            //FLOATING POINT: usually a fractional number, with a decimal
            $totalPrice = 146.28;
            //STRING
            $fullName = "John B Garcia";
            $fullName = "Johnny";
            //DISPLAY VARIABLES ON THE SCREEN
            echo "Hello, my name is $fullName and I am $myAge years old!";
            
            //CONSTANTS -Case sensitive, written in all caps
            define( "TITLE", "PHP Variables & COnstants");
            echo TITLE;
            
    
    
        ?>    
    </body>
</html>