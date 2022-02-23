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
    $persone=["Rossi Mario","Verdi Giovanni","Gialli Giulia","Neri Marco","Blu Marta"];
    $persona=("Binachi Candido");
    $conta=1;
    $minuto=date("i");
    $nuovo=("Nuovo Antonino");
    $trovato=false;
        for($i=0;$i<count($persone);$i++){
            if($persone[$i]<=$i){
                $sfondo="#ccc";
                if($i%3==0){
                    $sfondo="#aaa";
                } 
                else if($i%3==1){
                    $sfondo="#bbb";
                }
                Echo "<div style='background-color:$sfondo'>".$persone[$i]." è in posizione ".$conta."</div><br>";
                $conta=$conta+1;
            }
             if($persone[$i]===$persona){
                 $trovato=true;
                 $i_trovato=$i+1;                 
                }
            //assegno il primo minimo
            if($i==0){
                $min=$persone[0];
            }
            if($persone[$i]<$min){
                $min= $persone[$i];
            }
            }
            if($trovato){
            echo "<strong>". $persona."</strong>" ." è in posizione ". $i_trovato."<br>";
            } else{
                echo $persona." non è in lista di attesa<br>";
            }
            echo"<br>il primo in ordine alfabetico è ".$min."<br>";
        //print_r($persone)."<br>";
    sort($persone);
        echo "se si considerasse l'ordine alfabetico, ".$persone[0]." sarebbe il primo paziente ad essere visitato<br>";
    $persone_totali=60;
    $durata=10;
    $ora=date("H");
    $persone_ora=(60/$durata);
    $minuti=date("i");
    $minuti_lavorati_interi=$minuti-($minuti%10);
    echo "il numero visitabile di persone all'ora è ".$persone_ora."<br>";
    $visite_totali=($persone_ora*5);
    echo "il numero di visite giornaliere è ".$visite_totali."<br>";
    echo "la percentuale di persone che si possono visitare oggi è il ". (($visite_totali*100)/$persone_totali)."%<br>";
    if($ora>13){
        echo" sono state gestite tutte le ".$visite_totali." persone <br> ";
    } 
    else{
        if(($ora<13)&&($ora>8)){
            echo"sono state gestite ".((($ora-8)*$persone_ora)+($minuti_lavorati_interi/10))."<br>";
        }
        if($ora>13){
            echo "concluso orario di lavoro<br>";
        } else{
            if($ora<8){
                echo"l'orario di lavoro deve ancora incominciare<br>";
            }
        }
    }
    //print_r($persone);
    ?>
</body>
</html>