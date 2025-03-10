<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 5;
    echo "La tabla del $num es:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $multi = $num * $i;
        echo "$num x $i = $multi"."<br>";
    }
    
    ?>
</body>
</html>