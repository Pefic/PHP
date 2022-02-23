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
    $a=12;
    $b=10;

    if($a>$b)
        echo "$a maggiore di $b";
        
        else
            if($a  ==  $b)
            echo"$a uguale $b";
            
            else 
                echo"$a minore $b";
        
        
        echo"<br>fine";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";

        //date due variabili a e b fare in modo che a sia maggiore di b
        $a=2;
        $b=4;
        echo "a=$a b=$b<br>";
        if($a<$b){
                //devo scambiare il contenuto di a e di b
                $c=$a;
                $a=$b;
                $b=$c;

        }
        echo "a=$a b=$b";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        //$totale è il totale delle ore di PHP 72
        //$ore è il numero delle ore per ogni lezione
        //calcolare il numero di lezioni necessarie
        $totale=83;
        $ore=4;
        $lezioni=floor($totale/$ore);
        $lezioniextra=(($totale/$ore)-floor($totale/$ore))*$ore;
        //$lezioniextra=$totale-1-round($totale/$ore);
        echo" servono $lezioni da 4 ore e 1 lezione da $lezioniextra ora per completare il corso";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        
        //sercizio 3) verificare se $x è compreso tra 0 e 10 ($a e $b)
        $a=0;
        $b=10;
        $x=5;
        if(($x >= $a) && ($x <= $b)) //and=&&
        echo"$x compreso";
        //echo"true";
        //else echo "false";
        else echo"$x non compreso";
        echo"<br>"; 
        echo"<br>"; 
        echo"<br>"; 
        echo"<br>"; 
        //verficare che $eta non sia compresa tra 30 e 40
        // simbolo negazione (!)
        $eta=32;
        $minima=30;
        $massima=40;
        if(($eta>$minima) && ($eta<$massima))
        echo"$eta non ammesso";
        else echo"$eta ammesso";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        //con o logico: or logico ||
        if (($eta<$minima) || ($eta>$massima))
        echo"$eta anni : ammesso";
            
       
    ?>
</body>
</html>