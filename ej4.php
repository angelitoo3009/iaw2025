<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$sum = 0;
echo "Multiplos de 5 desde 1 a 100:<br>";
for ($i = 5; $i <= 100; $i += 5) {
    echo "$i ";
    $sum += $i;
}
$sumadelcuadrado = $sum * $sum;
echo "<br>La suma de sus cuadrados es: $sumadelcuadrado<br><br>";
    ?>
</body>
</html>l
