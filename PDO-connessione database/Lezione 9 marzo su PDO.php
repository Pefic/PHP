<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessione DATABASE</title>
</head>
<body>

    <?php
    
    //$host = "localhost"; $user="root"; $pass=""; $dbname="ifts";
    $dsn = 'mysql:dbname=ifts; host=127.0.0.1';
    $user = 'root';
    $password = '';
    $records=[];
    $area1="nord-est";
    //eccezioni sono un metodo per gestire delle anomalie e il codice deve essere racchiuso
    //all'interno di un try e di un catch.
    try{
        //1 connessione
        $connessione = new PDO($dsn, $user, $password);
        //2 preparazione delle query
        //$area='nord-ovest';
        //interrogazione che restituisce tutti i campi dalla tabella regioni
        $sql = "SELECT * FROM regioni 
                WHERE area_geografica = :area1";//segnaposto
                //OR area_geografica = 'nord-est'
               
        $st = $connessione->prepare($sql);//$st sta per statement
        //3 bind
        //creare un contenuto variabile che abbiamo inserito nella sintassi SQL e il tipo di dato vero e proprio
        //che ci aspettiamo di ricevere
        //se la variabile viene da un form o da un link dinamico
        //oppure è un contenuto del DB ecc
        //metodo del PDO statement e si chiama bindParam
        $st->bindParam('area1', $area1);
        //4 execute
        $st->execute();//esegue l'ustruzione sql creata nel passaggio precedente;
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
        //print_r($records);
        //echo "estratte ".count($records)." regioni ";
        //echo "nessuna eccezione lanciata";
    }  catch (PDOException $e){
        echo "eccezione catturata.<br>";
        echo $e->getMessage();
    }

    //     $connessione = new PDO($dsn, $user, $pass);
    //     $st = $connessione->prepare("SELECT * FROM regioni WHERE ID_regione = :id");
    //     $id = 2;
    //     $st->bindParam(':id',$id,PDO::PARAM_INT);
    //     $st->execute();
    //     $records=$st->fetchAll(PDO::FETCH_ASSOC);
    // } catch(PDOException $e){
    //     die("Errore durante la connessione al database!: ".$e->getMessage);
    // }
    // echo "estratti n. record = ".count($records);

    // foreach($records as $record){
    //     echo $record['regione'] . "<br>";
    //     //echo $record['area_geografica'] . "<br>";
    // }

    //esecuzione di una seconda query
    try{
        //$connessione = new PDO($dsn, $user, $password); la connessione una volta inizializzata non serve piuù 
        //rimpostarla
        //possibile invece di inizializzare la variabile $sql inizializzarla direttamente dentro la prepare
        $area2="nord-ovest";
         $sql = "SELECT * FROM regioni
         WHERE area_geografica = :area2";
        $st = $connessione->prepare($sql);
        $st->bindParam('area2', $area2);
        $st->execute();
        $records1 = $st->fetchAll(PDO::FETCH_ASSOC);//cambiare la variabile $records per poter richiamare in seguito le informazioni
        //ricercate precedentemente 
    } catch (PDOException $e){
        echo "eccezione catturata <br>";
        echo $e->getMessage();
    }
    try{
        //$connessione = new PDO($dsn, $user, $password); la connessione una volta inizializzata non serve piuù 
        //rimpostarla
        //possibile invece di inizializzare la variabile $sql inizializzarla direttamente dentro la prepare
        $area3="sud";
         $sql = "SELECT * FROM regioni
         WHERE area_geografica = :area3";
        $st = $connessione->prepare($sql);
        $st->bindParam('area3', $area3);
        $st->execute();
        $records2 = $st->fetchAll(PDO::FETCH_ASSOC);//cambiare la variabile $records per poter richiamare in seguito le informazioni
        //ricercate precedentemente 
    } catch (PDOException $e){
        echo "eccezione catturata <br>";
        echo $e->getMessage();
    }
    try{
        //$connessione = new PDO($dsn, $user, $password); la connessione una volta inizializzata non serve piuù 
        //rimpostarla
        //possibile invece di inizializzare la variabile $sql inizializzarla direttamente dentro la prepare
        $area4="centro";
         $sql = "SELECT * FROM regioni
         WHERE area_geografica = :area4";
        $st = $connessione->prepare($sql);
        $st->bindParam('area4', $area4);
        $st->execute();
        $records3 = $st->fetchAll(PDO::FETCH_ASSOC);//cambiare la variabile $records per poter richiamare in seguito le informazioni
        //ricercate precedentemente 
    } catch (PDOException $e){
        echo "eccezione catturata <br>";
        echo $e->getMessage();
    }
    //risultati della prima query
    // foreach($records as $record){
    //     echo $record['regione']."<br>";
    // }
    $titolo_nord_est = "Aree del $area1";
    $titolo_nord_ovest = "Aree del $area2";
    $titolo_sud = "Aree del $area3";
    $titolo_centro = "Aree del $area4";
    $chiavi=["regione", "area_geografica"];




    //risultati della seconda query
    // foreach($records1 as $record1){
        //     echo $record1['regione'] . "<br>";
        //     //echo $record['area_geografica'] . "<br>";
        // } 
    stampaArray($records,$chiavi,$titolo_nord_est);

    echo"------------------------------------------<br>";

    stampaArray($records1,$chiavi,$titolo_nord_ovest);

    echo"------------------------------------------<br>";
    
    stampaArray($records2,$chiavi,$titolo_sud);
    
    echo"------------------------------------------<br>";
    
    stampaArray($records3,$chiavi,$titolo_centro);




    function stampaArray($array,$chiavi,$titolo){
        echo $titolo ."<br>";
     foreach($array as $element){
         //echo $element[$chiave] . "<br>";
         //regione i-sima 
         foreach($chiavi as $chiave){
             echo $chiave.": ". $element[$chiave]. "/ ";
         }
         echo "<br>";
     }
    }

    //inserimenti di un record nella tabella clienti del database
    $nome ="mario";
    $cognome = "Rossi";
    $dataNasciata = "1999-01-31 00:00:00";
    $citta = 261;
    try{
        $sql ="INSERT INTO clienti
        (nome, cognome, dataNascita, citta)
        VALUES (:nome, :cognome, :dataNascita, :citta);";
        $st = $connessione->prepare($sql);
        $st->bindParam(':nome', $nome);
        $st->bindParam(':cognome', $cognome);
        $st->bindParam(':dataNascita', $dataNascita);
        $st->bindParam(':citta', $citta,PDO::PARAM_INT);
        $st->execute();
        echo"record inserito correttamente";
    }catch(PDOException $e){
        echo "eccezione catturata <br>";
        echo $e->getMessage();
    }

    ?>

</body>
</html>