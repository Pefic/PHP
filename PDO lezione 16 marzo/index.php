<?php
    include_once "./connessione.php" ;
    if(count($_POST)!=0){
        //ho ricevuto dati dal form
        //inserisco un record nel db
        try{
            $sql = "INSERT INTO cars (model, brand, engine_size)
                    VALUES (:model, :brand, :engine_size)"; 
            //prepare
            $st = $connessione-> prepare($sql);
            //bind uno per ogni segnaposto in questo case 3
            $st->bindParam('model', $_POST['model']);
            $st->bindParam('brand', $_POST['brand']);
            $st->bindParam('engine_size', $_POST['engine_size'],PDO::PARAM_INT);//per determinare che sia un numero intero
            //execute
            if(!( $st->execute())){
                echo "errore nella query $sql";
            } else echo "Car inserita correttamente ";
        }  catch (PDOException $e){
            echo "eccezione catturata.<br>";
            echo $e->getMessage();
        }       
    }else if($_GET && $_GET['order']){
        //gestisco il valore di order
        $order = $_GET['order'];
    }
    if(! isset($order)){
        $order = 'brand';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post" enctype="multipart/form-data">
       
        <fieldset>
            <legend>Nuovo macchina</legend>
            <label for="model">Model:</label>
            <input type="text" name="model" id="model" value="">
            <br><label for="brand">Brand:</label>
            <input type="text" name="brand" id="brand">
            <br>
            <br><label for="engine">Engine Size:</label>
            <input type="text" name="engine_size" id="engine">
            <br> 
        </fieldset> 
        
        <input type="submit" value="Invia"> 
    </form>   

    <h2>Elenco delle cars</h2>
    <?php
    //estraggo i recor di cars dal db
    try{
        $st = $connessione->prepare("SELECT * FROM cars ORDER BY $order");//possiamo usare DESC per ordinarli in maniera decrescente
        //di default li ordina in maniera crescente.
        //$st->bindParam("order", $order);
        $st->execute();
        //bind
        //fatch
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        echo "eccezione catturata.<br>";
        echo $e->getMessage();
    }       

    //print_r($records);
    ?>
    <table>
        <tr>
            <th> <a href="./index.php?order=model"> Model </a></th>
            <th> <a href="./index.php?order=brand"> Brand </a></th>
            <th> <a href="./index.php?order=engine_size"> Engine Size </a></th>
        </tr>
        <?php
        foreach($records as $record){
        echo "<tr><td>".$record['model']."</td><td>".$record['brand']."</td><td>".$record['engine_size']."</td></tr>";
        }
        ?>
    </table>
</body>
</html>