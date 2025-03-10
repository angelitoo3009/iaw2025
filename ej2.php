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
echo "Even numbers and their sum:<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
        $sum += $i;
    }
}
echo "<br>Total sum: $sum<br><br>";
?>
</body>
</html>