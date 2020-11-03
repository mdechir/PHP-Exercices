<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>
    <form action="exercice7.php" method="_SESSIONS">
    <input type="text " name="nom">
    <input type="submit">

</form>
    <?php

    if (isset($_SESSIONS['nom']))
    {
        echo "votre nom est -> ".$_SESSIONS['nom'];
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