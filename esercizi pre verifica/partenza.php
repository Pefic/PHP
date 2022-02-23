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

        echo $_GET['data'] ." ". $_GET['giorni'] ."<br>";

        //echo partenza($_GET['data'],$_GET['giorni']);

        $d=explode("-",$_GET['data']);
        //$partenza=$d[2]+$_GET['giorni'];
        $partenza= date("d/m/Y", mktime(0,0,0,$d[1],$d[2]+$_GET['giorni'],$d[0]));
        //echo $partenza;

        echo nuova_data($_GET['data'],$_GET['giorni'],0,0);

        function nuova_data($data,$giorni=0,$mesi=0,$anni=0){
            $d=explode("-",$data);
        //$partenza=$d[2]+$_GET['giorni']; $d[0] anno, $d[1] mese, $d[2] giorno
        $partenza= date("d/m/Y", mktime(0,0,0,$d[1]+$mesi,$d[2]+$giorni,$d[0]+$anni));
        return $partenza;
        }


        // function data_db2user($data){
        //     $anno=substr($data,0,4);
        //     $mese=substr($data,5,2);
        //     $giorno=substr($data,8,2);
        //     return $giorno."/".$mese."/".$anno;
        // }
        // function partenza($data,$giorni){
        //     $anno=substr($data,0,4);
        //     $mese=substr($data,5,2);
        //     $giorno=substr($data,8,2)+$giorni;
        //     return $giorno."/".$mese."/".$anno;
        // }
    ?>
</body>
</html>