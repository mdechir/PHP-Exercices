<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleexo2.css" />
    <title>Exercice3</title>
</head>

<body>
    <?php
    $MontableauX = array("a","b","c","d","e");
    $MontableauY = array(1,2,3,4,5);


    echo '<table>';
    for ($i=0; $i<=4; $i++) {
       echo '<tr>';
       echo $MontableauY[$i];
       for ($j=0; $j<=4; $j++)
        {
             echo '<td>';
             echo $MontableauX[$i];
             echo '</td>';
       }
       echo '</tr>';
    }
    echo '</table>';

    echo "<br>";
    highlight_file(__FILE__);

    ?>
</body>
</html>
