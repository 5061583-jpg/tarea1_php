<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 25; $i++) {
        echo "<a href='eje{$i}.html'><center>Ejercicio {$i}</center></a><br>";
    }
    ?>
</body>
</html>