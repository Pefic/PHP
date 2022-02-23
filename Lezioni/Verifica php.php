<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifiva php</title>
</head>
<body>
    <?php
    //per 365 chiama funzione rand
    $data=date("d");
    $giorni_mesi_passati=354;
    //echo$data;
    $giorni_inizio_anno=$giorni_mesi_passati+$data;
    $somma=0;
    $temperatura_sotto_lo_zero=0;
    $contatore_mesi=0;
    $somma_gennaio=0;
    $somma_febbraio=0;
    $somma_marzo=0;
    $somma_aprile=0;
    $somma_maggio=0;
    $somma_giugno=0;
    $somma_luglio=0;
    $somma_agosto=0;
    $somma_settembre=0;
    $somma_ottobre=0;
    $somma_novembre=0;
    $somma_dicembre=0;
    for($i=0;$i<=$giorni_inizio_anno;$i++){
    $a[]=rand(-10,30);
    $somma=$somma+$a[$i];
    $contatore_mesi++;
    if($a[$i]<0){
        $temperatura_sotto_lo_zero++;
    }
    //echo " ".$a[$i]." ";
    if($contatore_mesi<=31){
         if($contatore_mesi==1){
             echo"temperature gennaio<br> ";
         }
         echo$a[$i].", ";
         $somma_gennaio=$somma_gennaio+$a[$i];
    }
    if(($contatore_mesi>31)&&($contatore_mesi<=59)){
        if($contatore_mesi==32){
        echo"<br>temperature di febbraio <br>";
        }
        echo$a[$i].", ";
        $somma_febbraio=$somma_febbraio+$a[$i];
    }
    if(($contatore_mesi>59)&&($contatore_mesi<=90)){
        if($contatore_mesi==60){
        echo"<br>temperature di marzo<br> ";
        }
        echo$a[$i].", ";
        $somma_marzo=$somma_marzo+$a[$i];
    }
    if(($contatore_mesi>90)&&($contatore_mesi<=120)){
        if($contatore_mesi==91){
            echo"<br>temperature di aprile<br> ";
        }
        echo$a[$i]. ", ";
        $somma_aprile=$somma_aprile+$a[$i];
    }
    if(($contatore_mesi>120)&&($contatore_mesi<=151)){
        if($contatore_mesi==121){
        echo"<br>temperatura di maggio <br>";
        }
        echo$a[$i]. ", ";
        $somma_maggio=$somma_maggio+$a[$i];
    }
    if(($contatore_mesi>151)&&($contatore_mesi<=181)){
        if($contatore_mesi==152){
        echo"<br>temperatura di giugno<br> ";
        }
        echo$a[$i]. ", ";
        $somma_giugno=$somma_giugno+$a[$i];
    }
    if(($contatore_mesi>181)&&($contatore_mesi<=212)){
        if($contatore_mesi==182){
        echo"<br>temperatura di luglio <br>";
        }
        echo$a[$i]. ", ";
        $somma_luglio=$somma_luglio+$a[$i];
    }
    if(($contatore_mesi>212)&&($contatore_mesi<=243)){
        if($contatore_mesi==213){
            echo"<br>temperatura di agosto <br>";
        }
        echo$a[$i]. ",";
        $somma_agosto=$somma_agosto+$a[$i];
    }
    if(($contatore_mesi>243)&&($contatore_mesi<=273)){
        if($contatore_mesi==244){
            echo"<br>temperatura di settembre<br> ";
        }
        echo$a[$i]. ", ";
        $somma_settembre=$somma_settembre+$a[$i];
    }
    if(($contatore_mesi>273)&&($contatore_mesi<=304)){
        if($contatore_mesi==274){
            echo"<br>temperatura di ottobe <br>";
        }
        echo$a[$i]. ", ";
        $somma_ottobre=$somma_ottobre+$a[$i];;
    }
    if(($contatore_mesi>304)&&($contatore_mesi<=334)){
        if($contatore_mesi==305){
            echo"<br>temperatura di novembre<br> ";
        }
        echo$a[$i]. ", ";
        $somma_novembre=$somma_novembre+$a[$i];
    }
    if(($contatore_mesi>334)&&($contatore_mesi<=357)){
        if($contatore_mesi==335){
            echo"<br>temperatura di dicembre<br> ";
        }
        echo$a[$i]. ", ";
        $somma_dicembre=$somma_dicembre+$a[$i];
    }
}
    echo"<br>la temperatura media da inizio anno è di ".floor($somma/$giorni_inizio_anno)." gradi<br> ";
    echo" ci sono stati ". $temperatura_sotto_lo_zero. " giorni con la temperatura sotto lo 0 <br>";
    echo"la temperatura media di gennaio è ".floor($somma_gennaio/31)." gradi<br>";
    echo"la temperatura media di febbraio è ".floor($somma_febbraio/28)." gradi<br>";
    echo"la temperatura media di marzo è ".floor($somma_marzo/31)." gradi<br>";
    echo"la temperatura media di aprile è ".floor($somma_aprile/30)." gradi<br>";
    echo"la temperatura media di maggio è ".floor($somma_maggio/31)." gradi<br>";
    echo"la temperatura media di giugno è ".floor($somma_giugno/30)." gradi<br>";
    echo"la temperatura media di luglio è ".floor($somma_luglio/31)." gradi<br>";
    echo"la temperatura media di agosto è ".floor($somma_agosto/31)." gradi<br>";
    echo"la temperatura media di settembre è ".floor($somma_settembre/30)." gradi<br>";
    echo"la temperatura media di ottobre è ".floor($somma_ottobre/31)." gradi<br>";
    echo"la temperatura media di novembre è ".floor($somma_novembre/30)." gradi<br>";
    echo"la temperatura media di dicembre è ".floor($somma_dicembre/31)." gradi<br>";
    //print_r($a)."<br>";
    ?>
</body>
</html>