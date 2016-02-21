<?php 
    define( "TITLE", "Honest Click Bait Healines");
    
    if( isset( $_POST["fix_submit"] ) ) {
        //grab value from text area in $_Post Collection
        //make all letters lowercase using strtolower() function
        //store in a variable
        $clickBait = strtolower($_POST["clickbait_headline"]);
        //store array of clickbait sounding words or phrases
        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );
        //store replacements for words or phrases used to replace them
        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't remotely threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );
        //use the str_replace() function to replace the words
        //uppercase the first letter of every word using ucwords() function
        //store in variable
        $honestHeadline = str_replace($a, $b, $clickBait);
    }

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
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            <!--set up form-->
            <div class="row">
                <form action="" method="post" class="col-sm-8 col-sm-offset-2">
                    <textarea name="clickbait_headline" placeholder="Paste click bait headline here." class="form-control"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
            </div>
            <?php 
                if( isset($_POST["fix_submit"])){
                    //use ucwords() function to uppercase first letter in every word
                    //echo the variable on the screen
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";
                    //echo honest headline
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";
                }
            
            ?>
        </div>

       
        
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>