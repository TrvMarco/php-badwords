<?php 
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsa animi nisi dolores. Excepturi quo aliquid tenetur, atque non ea, ipsam, vero placeat eaque quisquam explicabo nobis ratione omnis magni';
    $cens_word = $_GET['word'];
    $new_text = str_replace($cens_word, '***', $text);
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
    <h2>Paragrafo con censura:</h2>
    <p>
        <?php echo $new_text ?>
    </p>
    <h2>Lunghezza paragrafo:</h2>
    <p>
        <?php echo strlen($new_text) ?>
    </p>
</body>
</html>