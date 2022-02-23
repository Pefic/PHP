<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
</head>
<body>
    <?php
        $stringa = "ecco la mia nuova variabile";
        //echo $stringa." ". "frase concatenata <br>"; //(il punto unisce le due stringhe)
        //echo "<br>";
        $stringa2 ="seconda riga";
        $stringa = 1; //intero
        $var = false; // numero 0; stringa vuota; array vuoto o valore nullo.
        echo $var."<br>";
        $var = true; // tutto ciò che non è falso come valore.
        echo "$stringa <br> $stringa2"; //le varianti non si possono mettere in apici''
        //$stringa = "ora è cambiata";
        //echo $stringa;
        //echo"stringa";
        echo"<br>";
        echo "<h1> Esercizio </h1>";
        $a=10;
        $b=2;
        $c=$a+$b;
        //echo "$c<br>";
        echo"$a+$b= ";
        // echo "<br>";
        echo $a+$b;
        echo"<br>";
        echo $a."+".$b."=".($a+$b);
        echo "<br>";
        echo "$a+$b=".($a+$b);
        //echo "3pippo" + 1;
        echo "<br>";
        echo "3"-3; 
        echo "<br>";
        //operatore modulo % 
        //lo faremo tra qualche lezione
        //se === a 0=dispari
        //se === a 1=pari
        //$i += 1;
        $i=1;
         echo "<div>riga 1".((($i++%2)==0)? "pari":"dispari")."</div>";
         //$i++; //=$i++ o $i=$i+1 
         echo "<div>riga 2".((($i++%2)==0)? "pari":"dispari")."</div>";
         //$i++;
         echo "<div>riga 3".((($i++%2)==0)? "pari":"dispari")."</div>";
         //$i++;
         echo "<div>riga 4".((($i++%2)==0)? "pari":"dispari")."</div>";
          
          echo "<br>";
        //operatore ternario
          echo "<hr>";
           $orario = date("H");
        //prima delle 13 orario_pausa=12 
        //altrimenti orario_pausa=17
          $orario_pausa = ($orario<13)? 12 : 17;
        //echo "è ora di fare".(($orario == 17)?"pausa":"lezione<br>");
          $pausa = (($orario == $orario_pausa)?"pausa":"lezione<br>");
           echo "è ora di fare". $pausa;
           echo $orario
        
        
    ?>
   
</body>
</html>