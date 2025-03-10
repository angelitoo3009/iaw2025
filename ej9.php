<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function es_par($numero) {
            return $numero % 2 == 0;
        }
        echo "El número 4 es par: ".(es_par(4) ? "SI" : "NO")."<br><br>";
    ?>
</body>
</html>