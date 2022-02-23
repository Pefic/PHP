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
        //Esercizio 1 Dati $a e $b, calcolare la media tra i 2 numeri

        echo"<h3>Esercizio 1</h3>";
            $a=2;
            $b=4;
            $c=($a+$b)/2;
            echo"la media di $a e $b è = $c";
            echo"<br>";
            echo"<br>";
            echo"<br>";

        //Esercizio 2 Scrivere se la variabile $x è multipla di 3

        echo"<h3>Esercizio 2</h3>";
            $a=7;
            if($a % 3 == 0)
            Echo "il numero $a è multiplo di 3";
            else echo"il numero $a non è multiplo di 3";
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 3 Invertire il contenuto di $x e $y

        echo"<h3>Esercizio 3</h3>";
            $x=3;
            $y=5;
            Echo "x=$x e y=$y<br>";
            $c=$x;
            $x=$y;
            $y=$c;
            echo"adesso x=$x e y=$y";
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 4 2 fratelli hanno $f1 e $f2 anni: calcolare la differenza di età (non è detto che $f1 sia maggiore di $f2!)

        echo"<h3>Esercizio 4</h3>";
            $f1=18;
            $f2=15;
            $diff=0;
            if($f1>$f2){
            $diff=$f1-$f2;}
            else{$diff=$f2-$f1;}
            echo"i due fratelli hanno $diff di differenza";
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 5 Dato $numero scrivere a quale decina appartiene

            echo"<h3>Esercizio 5</h3>";
            $n=26;
            $unita=$n/10;
            $decina=(floor($unita));
            echo"la decina del numero $n è $decina";
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 6 Il corso è composto da 8 ore a settimana. Quante settimane servono per fare 105 ore?

        echo"<h3>Esercizio 6</h3>";
            $oret=105;
            $ores=8;
            $set=floor($oret/$ores);
            echo"servono $set"; 
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 7 Verificare se è più grande il nome o il cognome!

        echo"<h3>Esercizio 7</h3>";
            $n="pisacane";
            $s="angelo";
            if ($n<$s)
            echo"$n minore di $s";
            else echo"$n maggiore di $s";
            
            echo"<br>";
            echo"<br>";            echo"<br>";

            //Esercizio 8 Data la stringa $testo verificare se inizia con una lettera maiuscola;

        echo"<h3>Esercizio 8</h3>";
            $testo="Elisa";
            $upper=ctype_upper($testo[0]);
            $lower=ctype_lower($testo[0]);
            switch($testo){
                case$upper;
                echo"$testo inizia con una lettera maiuscola";
                break;
                case$lower;
                echo"$testo inizia con una lettera minuscola";
                break;
            }
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 9 $x è un numero compreso tra $a e $b?

        echo"<h3>Esercizio 9</h3>";
            $x=15;
            $a=3;
            $b=10;
            if(($x>$a) && ($x<$b))
            echo"$x compreso";
            else echo"$x non compreso";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<br>";

            //Esercizio 10 elencari i numeri da 10 a 100
            //1) scrivere se è pari o dispari
            //2) elencari i primi 10 numeri dispari

        echo"<h3>Esercizio 10</h3>";
            $min=10;
            $max=100;
            $dispari=0;
            $pari=0;
            for($i=$min;$i<=100;$i++){
                if($i%2==0){
                echo"$i pari<br>";}
               else 
               echo"$i dispari<br>";
                }
                for($i=$min;$i<=100;$i++){
                    if($i%2==1){
                        $dispari=$dispari+1;
                        echo"$i è il $dispari numero dispari<br>";
                    }
                    if($dispari==10){
                        break;
                    }
                }
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            $min=10;
            $max=100;
            $dispari=0;
            $pari=0;
            for($i=$min;$i<=100;$i++){
                if($i%2==1){
                    $dispari=$dispari+1;
                    echo"$i è il $dispari numero dispari<br>";
                }
                if($dispari==10){
                    break;
                }
            }
                //if($i%2==0){
                //echo"$i pari<br>";}
               //else
         
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<br>";

            //Esercizio 11 Elencare i numeri multipli di 7(da 1 a 100)
            //1) elencarne solo 7
            $min=1;
            $max=100;
            $multipli=0;
            for($i=$min;$i<$max;$i++){
                if($i%7==0){
                $multipli=$multipli+1;
                echo"$i multiplo di 7<br>";
                
                }
                //if($multipli==7){
                   //break;
              //  }
            }

            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<br>";
    ?>
    
</body>
</html>