<?php
$parola_digitata = $_GET["parola"];
$parola_censurata = $_GET["censura"];
$parola_digitata_censurata = str_replace('$parola_censurata', '***', $parola_digitata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>la parola digitata è:</h2>

<p><?php echo $parola_digitata ?></p>
    <hr>
    <span>lunghezza Paragrafo: <?php echo strlen($parola_digitata)?></span>
<h2>la parola censurata è:</h2>
    <p><?php echo $censured_paragraph ?></p>
    <span> lunghezza Paragrafo: <?php echo strlen($censured_paragraph)?></span>
</body>
</html>