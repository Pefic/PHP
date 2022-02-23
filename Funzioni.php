<?php
include 'Libreria_Funzioni.php';

    $a=[10, 20, 30, 5];

    echo somma_array($a);
    echo"<br>";
    echo minimo_array($a);
    echo"<br>";
    echo massimo_array($a);




    // function anno_da_data ($data){
    //     $s=substr($data,0,4);
    //     return $s;
    // }
    // function mese ($m){
    //     global $var_globale; //variabile visibile fuori dalla funzione
       
    //     switch($m){
    //         case 1: $mese = "Gennaio"; break;
    //         case 2: $mese = "Febbraio"; break;
    //         case 3: $mese = "Marzo"; break;
    //         case 4: $mese = "Aprile"; break;
    //         case 5: $mese = "Maggio"; break;
    //         case 6: $mese = "Giugno"; break;
    //         case 7: $mese = "Luglio"; break;
    //     }
    //     return $mese;
    // }
    // function mese_e_giorno ($m, $g=0){
    //     global $var_globale; //variabile visibile fuori dalla funzione
    //     $var_globale="pippo<br>";
    //     echo $var_globale;
    //     switch($m){
    //         case 1: $mese = "Gennaio"; break;
    //         case 2: $mese = "Febbraio"; break;
    //         case 3: $mese = "Marzo"; break;
    //         case 4: $mese = "Aprile"; break;
    //         case 5: $mese = "Maggio"; break;
    //         case 6: $mese = "Giugno"; break;
    //         case 7: $mese = "Luglio"; break;
    //     }
    //     switch($g){
    //         case 0: $giorno = "Domenica"; break;
    //         case 1: $giorno = "Lunedi"; break;
    //         case 2: $giorno = "Martedi"; break;
    //         case 3: $giorno = "Mercoledi"; break;
    //         case 4: $giorno = "Giovadi"; break;
    //         case 5: $giorno = "Venerdi"; break;
    //         case 6: $giorno = "Sabato"; break;
    //     }
    //     $a['mese']=$mese;
    //     $a['giorno']=$giorno;

    //     return $a;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
</head>
<body>
    <!-- funzione come una scatola nel quale possiamo inviare degli input e la funzione ci da dei dati di output, sequenza di codice che vengono eseguite sui parametri inseriti in input e ci invia degli output
    nome funzioni
    count
    sum
    sort (ordina dal più grande al più piccolo)
    rsort(revers sort ordina al contrario)
    asort(per ordinare elementi all'interno di un array associativo)
    asortr
    ksort(ordina in base alle chiavi gli array associativi)
    ksortr
    $c=count($a)
    
    $s=somma(3,5);

    function somma ($a , $b){ //function serve per definire una nuova funzione
       $c = $a + $b; //le variabili usate all'interno delle funzioni esiste soltanto all'interno delle funzioni stesse
       return $c; oppure return $a + $b;
       $x=2
       $y=4
       somma ($x,$y);
    }

-->
    <?php
    //  echo somma(4,5);
    // function somma( $a, $b){
    //     $a + $b;
    //     return $a + $b;
    //}
    // $data=date("Y-m-d");
    // $anno=anno_da_data($data);
    // echo $anno ."<br>";
    // $m=date("m");
    // $g=date("w");
    // $var_globale="variabilie globale<br>";
    // echo substr($data,0,4);

    //echo "è il mese di " .mese(date("m"))."<br>";
    // martedi 08 febbraio 2022
    // date("w") serve per trovare il giorno della settimana espresso in numeri da 0 a 6
    //$a=mese_e_giorno($m, $g);
    //$a2=mese_e_giorno($m); se da un valore uguale a 0 il valore all'interno della funzione diventa opzionale, partendo sempre dall'ultimo.
    //var_dump($a);
    //echo $a2['giorno']." ".date("d")." ". $a2['mese']." ". date("Y")."<br>";
    // echo "anno della data ".data_db2user($data)." = ". $anno;
    ?>
</body>
</html>