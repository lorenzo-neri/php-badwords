<?php

/* 
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.
index.php
script.php

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form (occhio a quato detto stamattina sui form e gli attributi necessari).
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/

// $nome = $_GET['nome'];

// echo 'Ciao ' . $nome;

// var_dump($nome);



$paragraph = $_POST['paragraph'];

var_dump('test ' . $paragraph);

$paragraph_length = strlen($paragraph);

$badword = $_POST['badword'];

var_dump($paragraph_length);

$censured_par = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <div>
        <div>

            <div>

                <h1>Testo originale:</h1>
                <p><?php echo $paragraph ?></p>
                <h6><?php echo "Il testo censurato contiene $paragraph_length caratteri." ?></h6>

                <h1>Testo censurato:</h1>
                <p><?php echo $censured_par ?></p>
                <h6><?php echo "Il testo censurato contiene $paragraph_length caratteri." ?></h6>


                <a href="index.php">
                    <button>
                        Torna alla pagina precedente
                    </button>
                </a>

            </div>

        </div>
    </div>

</body>

</html>