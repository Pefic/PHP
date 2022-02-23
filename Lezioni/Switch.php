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
        //quanti giorni mancano a capodanno esercizio per casa
        //quanti giorni ha il mese corrente tutti gli altri(31)
        $mese=date("m");
        $anno=2021;
        $mese=2;
        switch($mese){
            case 11: case 4: case 6: case 9: 
                $giorni_del_mese=30;
                break;
                case 2:
                    $giorni_del_mese=28;//verifica che sia anno bisestile
                    if (!($anno % 4==0)){
                        $giorni_del_mese++; //(altrimenti $giorni del mese=29 else 28)
                    }
                echo"N. di giorni del $mese=$giorni_del_mese";
                break;
                default: 
                $giorni_del_mese=31;
            }
    ?>
    <h2 style="blackgr"></h2>;
</body>
</html>