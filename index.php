<?php

$test = 'PHP';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <h1>Hello <?php echo $test ?>!</h1>

    <form action="script.php" method="$_GET">

        <input type="text" name="nome">
        <button type="submit">Invia</button>

    </form>


</body>

</html>