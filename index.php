<?php

//includere il file "functions.php" nell'index. Il file racchiude la funzione per generare la password
include __DIR__ . '/functions.php';

// eseguire la creazione della password solo se viene specificata la lunghezza
if (isset($_GET['number'])) {
    $pw_length = $_GET['number'];
    if ($pw_length >= 8 && $pw_length <= 32) {
        $password = generatePassword($pw_length);
    } else {
        $error = "Errore! La lunghezza della password deve essere compresa tra 8 e 32 caratteri.";
    }
}

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
            <h1 class="text-center text-color">Strong generator password</h1>
            <h2 class="text-center text-color my-4" >Genera una password sicura</h2>

            <!-- si mostra la password solo se è stata generata correttamente in base alla lunghezza stabilita dall'utente -->
            <?php if(isset($password) && !empty($password)): ?>

                <div class="p-4 alert alert-success mt-3 text-center">
                    <strong>
                        <?php echo $password ?>
                    </strong>
                </div>

                <?php elseif(isset($error) && !empty($error)): ?>

                <div class="p-4 alert alert-danger mt-3"> <?php echo $error ?></div>

            <?php endif; ?>

            <div class="password-choice p-4 my-3">
                
            <!-- form per consentire all'utente di scegliere una lunghezza adeguata per la propria password -->
                <form action="index.php" method="GET">
                    <div class="mb-3 d-flex justify-content-between">

                        <label class="form-label">Scegli la lunghezza della tua password:</label>
                        <input type="number" class="form-control input-width" name="number" id="number" min="8" max="32">
                        
                    </div>

                    <!-- pulsante che genera la password secondo i criteri richiesti -->
                    <button type="submit" class="btn btn-primary">Genera</button>

                    <!-- pulsante che azzera gli input rimandando l'utente alla pagina iniziale -->
                    <a href="index.php" class="btn btn-secondary">Annulla</a>
                </form>


            </div>
        </div>

    </div>
    
</body>
</html>