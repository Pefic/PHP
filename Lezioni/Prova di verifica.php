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
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $inizio=-20;
    $numero=$inizio;
    $ripetizioni=30;
    if($numero>0){
    for($ripetizioni=$ripetizioni;$ripetizioni>0;$ripetizioni--){
        if($numero>=0){
            if($numero==date("j")){
                echo ($numero+1) ."<strong style=color:red>$numero</strong>".($numero-1)."<br>";
                //$numero=$numero-1;            
            }
            else{
        echo ($numero-1) ."<span style=color:red>$numero</span>" .($numero+1)."<br>";
    }
    $numero=$numero-1;
        }
         else{
             break;
        }
        }
        }
        else{
            for($ripetizioni=$ripetizioni;$ripetizioni>0;$ripetizioni--){
                if($numero<=0){
                echo ($numero -1).$numero.($numero+1) ."<br>";
                $numero=$numero+1;
                }
                else{
                    break;
        }
        }
        }
        echo"<br>";
        echo"<br>";
        echo"<br>";
        //$array_voto=[50, 60, 55, 40, 70, 85, 101, 101, 100, 95, 97, 98, 68, 69, 35, 21];
        $array_voto=[50, 70, 101, 100, 66, 98, 45, 40, 101, 77,];
        $e=60;
        $lode=101;
        $nlode=0;
        $numero_positivi=0;
        $somma=0;
        $specializzandi=2;
        $varspec=0;
        $spectrovati=0;
        for($voto=0;$voto<count($array_voto);$voto++){
            if($array_voto[$voto]>=$e){
                echo"<strong>".$array_voto[$voto]."</strong>"."<br>";
                if($array_voto[$voto]>=80){
                    $varspec=$varspec+$array_voto[$voto];
                    $spectrovati++;
                }
                if($array_voto[$voto]===$lode){
                    $nlode++;
                }
                $numero_positivi++;
                $somma=$somma+$array_voto[$voto];
            }
            else{
                echo"<i>",$array_voto[$voto]."</i>"."<br>";
            }
        }
            echo"la lode è stata assegnata $nlode volte<br>";
            echo"la media dei voti degli studenti è " .round(($somma/$numero_positivi),2)."<br>";
            echo"gli studenti che possono accedere alla specializzazione sono $spectrovati<br>";
            echo"la percentuale di studenti che passano alla specializzazione sono il ".((100*$specializzandi)/$spectrovati)."%<br>";
            echo"la percentuale di studenti che rimangono in lista di attesa sono il ".(100-(floor((100*$specializzandi)/$spectrovati)))."%";
    ?>
</body>
</html>