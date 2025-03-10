<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $euro = 1.10;
        $dolar = 1;
        $diferencia = 0.11;

        if(abs($euro - $dolar) < $diferencia) {
            echo "true";
        } else {
            echo "false";
        }
    ?>
</body>
</html>l