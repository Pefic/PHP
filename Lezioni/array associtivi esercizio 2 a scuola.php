<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $corso1 = array ('nome'=>"IFTS", 'inizio'=>"2021-09-30",'coordinatore'=>"Forlivesi", 'n_partecipanti'=>20);
        $corso2 = array ('nome'=>"Analista Programmatore", 'inizio'=>"2022-02-01",'coordinatore'=>"Rossi",'n_partecipanti'=>20);
        $corsi = array($corso1, $corso2);
        $coordinatoreRossi=('non trovato');
        $coordinatoreRossiinizio = date("Y")+100;
        $npartecipanti = 0;
        $nomecorso="";
        for($i=0;$i<count($corsi);$i++){
            $corso = $corsi[$i];
            echo $corso['nome']." -{$corso['inizio']} ";
            if($corso['inizio']>date("Y-m-d")){
            echo "<a href='./iscrizione.php'>iscriviti</a> ";
            }
            echo "<br>";
        //esercizio 8            
            if($corso['coordinatore']==('Rossi')){
                $coordinatoreRossi="trovato";
                if($corso['inizio'] < $coordinatoreRossiinizio){
                    $coordinatoreRossiinizio = $corso['inizio']; 
                }
                //assegno una data enorme cosi che vada a confrontare sempre un valore in maniera decrescente
            }
            if($corso['n_partecipanti']>$npartecipanti){
            $npartecipanti=$corso['n_partecipanti'];
            $nomecorso=$corso['nome'];
            }
            else if($corso['n_partecipanti']==$npartecipanti){
                $npartecipanti .= $corso['nome'];  
            }
    }
            echo $coordinatoreRossi. " dal ". $coordinatoreRossiinizio;
            echo "<br> il corso con maggioro numero di partecipanti è ". $npartecipanti . " del corso ". $nomecorso;


            //$corsi[]=$corso3
            //$corsi[]=$studente[$i]
            //$corso1[]="nuovo elemento"
            // aggiungo 100 corsi
            $nomi=["A","B","C","D"];
            $r=rand(0,3);
            $nomerandom=$nomi[$r];
            for($i=0;$i<100;$i++){
            $corso3 = array ('nome'=>$nomerandom, 'inizio'=>"2021-09-30",'coordinatore'=>"Forlivesi", 'n_partecipanti'=>rand(0,100));
            $corsi[]=$corso3;
            }
            print_r($corsi);

    ?>
</body>
</html>