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
        <h3>Oggi e' il : <?php echo date("d/m/Y") ?></h3>
        <br>
        <form class="search-container input-group mb-3" action="index.php" method="$_GET">
            <input type="text" name="filtraCognome" id="filtraCognome" class="form-control" value="" placeholder="Filtra per cognome">
            <input type="submit" class="btn btn-primary" type="button" value="Filtra"></input>
        </form>
        <div>
            <button type="button" class="btn btn-primary button-border"><a class="button-link" href="./index.php">Rimuovi filtro</a></button>
        </div>
        <div class="list-container">
                <h2>ELENCO DEI CLIENTI</h2>
                <table>
                    <?php
                        // if($_REQUEST){
                        //     $order=$_REQUEST['order'];
                        // }else{
                        //     $order='cognome';
                        // }
                        if(!($_GET)){
                            fetchAll($connection);
                        }else{
                            $key=$_GET['filtraCognome'];
                            fetchFiltered($connection,$key);
                        }
                    ?>
                </table>
        </div>
    </div>
</body>
</html>