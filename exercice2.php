<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleexo2.css" />
    <title>Exercice 2</title>
</head>

<body>
    <?php
    $Montableau = array(1,2,3,4,5);
    echo '<tr><table>';
    for ($i =0; $i<5; $i++){
        echo '<td>'.$Montableau[$i]."</td>";
    }
    echo '</tr></table>';


    echo "<br>";
    highlight_file(__FILE__);

    ?>
</body>
</html>
