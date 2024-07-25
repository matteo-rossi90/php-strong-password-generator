<?php

//iniziare la sessione
session_start();

//includere il file "functions.php" nell'index. Il file racchiude la funzione per generare la password
include __DIR__ . '/functions.php';

// Recuperare la password dalla variabile di sessione
$password = isset($_SESSION['password']) ? $_SESSION['password'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Password generator</title>
</head>
<body>

    <div class="container p-5">

        <div class="p-5 m-5">
            <h2 class="text-center text-color my-4" >La tua password generata è:</h2>

            <!-- si mostra la password solo se è stata generata correttamente in base alla lunghezza stabilita dall'utente -->
            <?php if(isset($password)): ?>

                <div class="p-4 alert alert-success mt-3 text-center">
                    <strong>
                        <?php echo $password ?>
                    </strong>
                </div>

                <?php else: ?>

                <div class="p-4 alert alert-danger mt-3"> Errore nella generazione della password</div>

            <?php endif; ?>

            <a href="index.php" class="btn btn-warning">Indietro</a>



        </div>

    </div>
    
</body>
</html>