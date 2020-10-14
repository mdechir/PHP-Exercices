<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>


<body>

</body>
</html>


<?php
session_start();
echo "Demmarrage du mecanisme session <br>";

if(isset($_SESSION['Connect'])) {
    echo "La session existe avec la clé Connect je l'affiche .$_SESSION['Nom']";

}else

$_SESSION['nom'] = 'Dupont';
?>