<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <form action="" method="POST">
    <input type="text " name="nom">
    <input type="submit">
</form>
    <?php

    if (isset($_POST['nom']))
    {
        echo "votre nom est -> ".$_POST['nom'];
    }
    else
    {
        echo "entrez votre nom";
    }
 
    highlight_file(__FILE__);

    ?>
</body>
</html>