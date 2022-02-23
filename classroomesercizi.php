<?php
function table($array){
    $table = '<table border="1px solid black">';
    $table .= '<tr>';
    foreach($array[0] as $k => $v){
        $table .= '<th>'.$k.'</th>';
    }
    foreach($array as $k => $v){
        $table .= '<tr>';
        foreach($v as $k => $v){
            $table .= '<td>'. $v. '</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}       
?>
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

        $min=1;
        $max=1000;
        $n=[];
        $m=100;
        $maggiorim=0;
        $start=10;
        $stop=60;
        $somma=0;
        for($i=0;$i<100;$i++){
            $n[]=rand($min, $max);
            //echo $n[$i]."<br>";
        }
        for($i=0;$i<count($n);$i++){
            if($n[$i]>$m){
                $maggiorim += 1;
            }
        }
        for($i=$start;$i<=$stop;$i++){
            $somma += $n[$i];
        }

        echo "ci sono ".$maggiorim." numeri maggiori di ".$m."<br>";
        echo "la somma dei numeri che si trovano nell'array dalla posizione ".$start." alla posizione ".$stop." è di ".$somma;
        echo"<hr>";


        $partita1=['squadra1'=>'Inter', 'squadra2'=>'Bologna', 'risultato'=>1];
        $partita2=['squadra1'=>'Juventus', 'squadra2'=>'Inter', 'risultato'=>"X"];
        $partita3=['squadra1'=>'Torino', 'squadra2'=>'Sampdoria', 'risultato'=>2];
        $partita4=['squadra1'=>'Inter', 'squadra2'=>'Bologna', 'risultato'=>''];
        $partita5=['squadra1'=>'Juventus', 'squadra2'=>'Inter', 'risultato'=>''];
        $partita6=['squadra1'=>'Torino', 'squadra2'=>'Sampdoria', 'risultato'=>''];
        $schedina=[$partita1, $partita2, $partita3];
        $mia=[$partita4, $partita5, $partita6];
        $pareggio=0;
        $risultato=0;
        for($i=0;$i<count($mia);$i++){
            $mia[$i]['risultato']=rand(0,4);
            if($mia[$i]['risultato']==0){
                $mia[$i]['risultato']='X';
            }
        }
        //print_r($mia);
    ?>
    <table>
        <thead>Schedina</thead>
        <tr>
            <td>squadra1</td>
            <td>squadra2</td>
            <td>risultato</td>
            <td>data</td>
        </tr>
        <?php
        $giorno=date("d");
        $Giorno=date("w");
        $dom=($giorno-$Giorno);
            $data=date("Y-m-".$dom);
            for($i=0;$i<count($schedina);$i++){
                $schedina[$i]['data']=$data;
            }
            //print_r($schedina);
            foreach($schedina as $k => $v){
                echo"<tr>";
                echo"<td>".$v['squadra1']."</td>";
                echo"<td>".$v['squadra2']."</td>";
                echo"<td>".$v['risultato']."</td>";
                echo"<td>".$v['data']."</td>";
                echo"</tr>";
                if($v['risultato']=='X'){
                    $pareggio += 1;
                }
            }
            echo "<hr>";
        ?>
    </table>
    <?php
    echo "le partite finite in pareggio sono ".$pareggio;
    echo"<hr>";
    echo table($mia);
    ?>

</body>
</html>