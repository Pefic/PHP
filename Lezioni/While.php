<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
    //l'elenco dei giorni che mancano 
    //a natale
    //solo se siamo nel mese di dicembre
    $mese=date("m");
    if($mese==12){
    echo "siamo a dicembre<br>";
    $giorni=date("d");
    $n=25;
    while($giorni<25){
        echo $giorni.date("/m/Y ") . ("-").(25-($giorni ++)) . "  giorni a natale <br>";
        if(($giorni-25)==0)
        echo $giorni.date("/m/Y ")."è natale";
    }
    }
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    //echo "Oggi è il giorno ".date("d/m/Y")."<br>";
   // $giorno=date("d");
    //if(date("F")=="June");{
     //   echo "I giorni che mancano a Natale sono:"."<br>"."<br>";
     //   while($giorno<25){
     //       if((25-$giorno)==1){
      //          echo $giorno.date("/m/Y")." - Domani è Natale!"."<br>";
      //      }else{
      //          echo $giorno.date("/m/Y")." -".(25-$giorno)." giorni a Natale"."<br>";
     //       }
      //      $giorno++;
     //   }
 //   }
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $mese=date("m");
    $giorni=date("d");
    if($mese==12){
        echo"siamo a dicembre<br>";
        while($giorni<31)
        echo $giorni.date("/m/Y") . "mancano"." - ". (31-($giorni++))." giorni a capodanno"."<br>";
        if($giorni==31){
            echo $giorni.date("/m/Y")." è capodanno<br>";
        }
    }
    ?>
</body>
</html>