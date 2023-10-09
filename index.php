<?php

$test_2 = ['Link', 'Zelda'];
var_dump($test_2);

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

    <!--     <form action="script.php" method="$_GET">

        <input type="text" name="nome">
        <button type="submit">Invia</button>

    </form>
 -->

    <form action="script.php" method="POST">


        <textarea name="paragraph" id="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, ea!</textarea>

        <label for="badword">Scrivi una parola da censurare</label>

        <input type="text" name="badword" id="badword" value="Lorem">

        <input type="submit" value="Invia">

    </form>


</body>

</html>