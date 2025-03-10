<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calculadora($num1, $num2, $cuenta) {
            switch ($cuenta) {
                case 'suma': return $num1 + $num2;
                case 'resta': return $num1 - $num2;
                case 'multi': return $num1 * $num2;
                case 'div': return $num1 / $num2;
                default: return "Operacion no valida";
            }
        }
        echo "El resultado es: ".calculadora(10, 5, 'suma');

    ?>
</body>
</html>
