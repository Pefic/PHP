<?php
    include "./lib/d3f4l7-db-connection.php";
    include "./lib/d3f4l7-db-query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Esercizio Pre-Verfica Finale</title>
</head>
<body>
    <div id="main-container">
        <div>
            <button type="button" class="btn btn-primary button-border"><a class="button-link" href="./index.php">Torna alla lista Clienti</a></button>
        </div>
        <br>
        <div>
            <h2 class="text-center">ID Cliente:</h2>
            <br>
            <?php
                echo "L' ID del Cliente selezionato e': ".$_GET['ID_cliente'];
            ?>
        </div>
    </div>
</body>
</html>