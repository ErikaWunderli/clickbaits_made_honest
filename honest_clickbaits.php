<?php
    define( "TITLE", "Honest Click Bait Headlines");
    include("functions.php");

    if ( isset ( $_POST["fix_submit"] ) ) {
       checkForClickBait(); 
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Erika Wunderli">

    <title><?php echo TITLE; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
        <h1><?php echo TITLE; ?></h1>
        <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
      
        <div class="row">
            <form class="col-sm-8 col-sm-offset-2" action="" method="post">
            <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"> </textarea>
                <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest </button>
            </form>
        </div>
        
        <?php
        if ( isset( $_POST["fix_submit"] ) ) {
            $clickBait = checkForClickBait ()[0];
            $honestHeadline = checkForClickBait ()[1];
            
            displayHonesHeadline( $clickBait, $honestHeadline);
        }
        ?>
        
        
      </div>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>
