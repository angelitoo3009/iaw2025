<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$num = 1;
$total_suma = 0;
echo "Elevado al cuadrado desde el 1 al 50:<br>";
while ($num <= 50) {
    $cuadrado = $num * $num;
    echo "$cuadrado ";
    $total_suma += $cuadrado;
    $num++;
}
echo "<br>Total suma: $total_suma<br><br>";
    ?>
</body>
</html>
