<?php 
 define( "TITLE", "PHP Arrays");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE;?></title>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <?php
            //Plain Variables
                $username = "johndoe";
                $fullName = "John Doe";
                $age      = 32;
                $gender   = "male";
                $country  = "Mexico";
            //Simple Array
                $user = array(
                    "johndoe",
                    "John Doe",
                    32,
                    "male",
                    "Mexico"
                );
            //Echo Values of the Array
            echo $user[0] . "<br>";
            echo $user[1] . "<br>";
            echo $user[2] . "<br>";
            echo $user[3] . "<br>";
            echo $user[4] . "<br>";
            
            //Associative Arrays
            $people = array (
                "username"  => "johndoe",
                "fullname"  => "John Doe",
                "age"       => 32,
                "gender"    => "male",
                "country"   => "mexico"
             );   
                echo $people["username"]. "<br>";
                echo $people["fullname"]. "<br>";
                echo $people["age"]. "<br>";
                echo $people["gender"]. "<br>";
                echo $people["country"]. "<br>";
            
            //Multi-Dimensional Array
            $employees  = array(
                array(
                    "username"  => "johndoe",
                    "fullname"  => "John Doe",
                    "age"       => 32,
                    "gender"    => "male",
                    "country"   => "mexico"
                ),
                array(
                    "username"  => "janedoe",
                    "fullname"  => "Jane Doe",
                    "age"       => 28,
                    "gender"    => "male",
                    "country"   => "Canada"
                )
            );
            //Note: arrays have key values associated with them
            echo "<hr><br>";
            echo $employees[0]["fullname"]."<br>";
            echo $employees[1]["fullname"]."<br>";
            ?>
            
        </div>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>