<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invia-dati.php</title>
</head>
<body>
    <!-- "Dati del form arrivati correttamente"; -->
    <?php
       //var_dump($_GET);
       //var_dump($_POST);
       //var_dump($_REQUEST);
        echo "Ciao ".$_REQUEST['nome']. " ecco i dati che hai compilato <br>";
        foreach($_REQUEST as $k => $v){
            //echo $k. ": ". $v." <br>";
        }
        
        echo "CAP: {$_REQUEST['cap']}<br>";
        echo "Indirizzo: {$_REQUEST['indirizzo']}<br>";
        echo "Località: {$_REQUEST['localita']}<br>";
        echo "Sesso: ". ($_REQUEST['sesso']=='f'?"femmina":"maschio")."<br>";

       echo "animali preferiti:<ul>";
       $animali=['cane','gatto','cavallo','mucca'];
       foreach($animali as $v){
           if(array_key_exists($v, $_REQUEST)){
               print "<li>$v</li>";
           }          
       }
       echo"</ul>";
       
       $abitazione=[1=>'villa a schiera', 2=>'casa unifamiliare', 3=>'bifamiliare', 4=>'condominio <=5', 5=>'condominio > 5'];
       $inidice= $_REQUEST['abitazione'];
       echo "abitazione: ". $abitazione[$inidice];
       //var_dump($_REQUEST);
       var_dump($_FILES);
       echo "sono stati caricati i seguenti documenti: <br>";
       foreach($_FILES as $k => $v){
           echo $v['name']."<br>";
       }
        foreach($_FILES as $k => $v){
                $from=$v['tmp_name'];
                $name=$v['name'];
            if($v['error']==0){
                echo "file caricato correttamente: ".$name."<br>";
                move_uploaded_file($from, $name);
            } else{
                echo" file non caricato: ".$name."<br>";
            }
        }

       foreach($_FILES as $key => $file){
           if( ! $file['error']){
               $from=$file['tmp_name'];
               $name=$file['name'];
               if( ! move_uploaded_file($from,$name)){
                   echo "Errore di caricamento";
               }
           }
       }
       //$from=($_FILES['documentoIdentita']['tmp_name']);
       //move_uploaded_file($from,"destinazione.jpg");
       //var_dump($_REQUEST);
       //in questo caso usiamo le chiavi come valori in quanto è una check box e sappiamo a priori come è composto un array
       
       
       //    if(array_key_exists('nome', $_REQUEST)){
           //        print "ciao {$_REQUEST['nome']}!!<br>";
           //    }
           //    echo "Animali preferiti:<ul>";
           //    if(array_key_exists('cane', $_REQUEST)){
               //        echo "<li>cane</li>";
    //    }
    //    if(array_key_exists('gatto', $_REQUEST)){
    //        echo "<li>gatto</li>";
    //    }
    //    if(array_key_exists('cavallo', $_REQUEST)){
    //        echo "<li>cavallo</li>";
    //    }
    //    if(array_key_exists('mucca', $_REQUEST)){
    //        echo "<li>mucca</li>";
    //    }
    ?>
</body>
</html>