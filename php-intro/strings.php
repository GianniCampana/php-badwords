<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$center = "(wait for it)";
$primaParola= $_GET['primaParola'];
?>

   <h1><?php echo $primaParola. ''. $center?> dary</h1>
   <h1>lunghezza: <?php echo strlen($center)?></h1>
   <hr>
   <h1> <?php echo str_replace('for','***',$center)?></h1>
   <h1>lunghezza: <?php echo strlen($center)?></h1>
  
</body>
</html>