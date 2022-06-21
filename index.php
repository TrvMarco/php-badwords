<?php 
    $text= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsa animi nisi dolores. Excepturi quo aliquid tenetur, atque non ea, ipsam, vero placeat eaque quisquam explicabo nobis ratione omnis magni';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Paragrafo originale:</h1>
    <p>
        <?php echo $text ?>
    </p>
    <h2>Lunghezza paragrafo:</h2>
    <p>
        <?php echo strlen($text) ?>
    </p>
</body>
</html>