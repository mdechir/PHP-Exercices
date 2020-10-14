<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>
    <form action="" method="GET">
    <input type="text " name="nom">
    <input type="submit">
</form>
    <?php

    if (isset($_GET['nom']))
    {
        echo "votre nom est -> ".$_GET['nom'];
    }
    else
    {
        echo "entrez votre nom";
    }
 
    echo "<br>";
    highlight_file(__FILE__);



    ?>
</body>
</html>