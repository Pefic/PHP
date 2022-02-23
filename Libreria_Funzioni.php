<?php
    /** 
     * @param $d aaaa-mm-gg
     * @return $d gg/mm/aaaa
    */
    function data_db2user($data){
        $anno=substr($data,0,4);
        $mese=substr($data,5,2);
        $giorno=substr($data,8,2);
        return $giorno."/".$mese."/".$anno;
    }

    function data_db2user2($data){
        $a=explode("-",$data);
        return "{$a[2]}/".$a[1]."/{$a[0]}";
    }

    function anno_da_data ($data){
        $s=substr($data,0,4);
        return $s;
    }

    function mese ($m){
        global $var_globale; //variabile visibile fuori dalla funzione
       
        switch($m){
            case 1: $mese = "Gennaio"; break;
            case 2: $mese = "Febbraio"; break;
            case 3: $mese = "Marzo"; break;
            case 4: $mese = "Aprile"; break;
            case 5: $mese = "Maggio"; break;
            case 6: $mese = "Giugno"; break;
            case 7: $mese = "Luglio"; break;
        }
        return $mese;
    }

    function mese_e_giorno ($m, $g=0){
        global $var_globale; //variabile visibile fuori dalla funzione
        $var_globale="pippo<br>";
        echo $var_globale;
        switch($m){
            case 1: $mese = "Gennaio"; break;
            case 2: $mese = "Febbraio"; break;
            case 3: $mese = "Marzo"; break;
            case 4: $mese = "Aprile"; break;
            case 5: $mese = "Maggio"; break;
            case 6: $mese = "Giugno"; break;
            case 7: $mese = "Luglio"; break;
            case 8: $mese = "Agosto"; break;
            case 9: $mese = "Settembre"; break;
            case 10: $mese = "Ottobre"; break;
            case 11: $mese = "Novembre"; break;
            case 12: $mese = "Dicembre"; break;
        }
        switch($g){
            case 0: $giorno = "Domenica"; break;
            case 1: $giorno = "Lunedi"; break;
            case 2: $giorno = "Martedi"; break;
            case 3: $giorno = "Mercoledi"; break;
            case 4: $giorno = "Giovedi"; break;
            case 5: $giorno = "Venerdi"; break;
            case 6: $giorno = "Sabato"; break;
        }
        $a['mese']=$mese;
        $a['giorno']=$giorno;

        return $a;
    }

    function somma_array($array){
        $somma=0;
        foreach($array as $v){
            $somma += $v;
        }
        return $somma;
    }

    function minimo_array($array){
        $minimo=$array[0];
        foreach($array as $v){
            if($v<$minimo) $minimo = $v;
        }
        return $minimo;
    }

    function massimo_array($array){
        $massimo=$array[0];
        foreach($array as $v){
            if($v>$massimo) $massimo=$v;
        }
        return $massimo;
    }

    function nuova_data($data,$giorni=0,$mesi=0,$anni=0){
        $d=explode("-",$data);
    //$partenza=$d[2]+$_GET['giorni']; $d[0] anno, $d[1] mese, $d[2] giorno
    $partenza= date("d/m/Y", mktime(0,0,0,$d[1]+$mesi,$d[2]+$giorni,$d[0]+$anni));
    return $partenza;
    }

    function sommaGiorni($array, $chiave){
        $somma=0;
        foreach($array as $v){
            $somma += $v[$chiave];
        }
         return $somma;
        }
    /**per casa fare le funzioni inverse per tornare da data utente a data database */
   
    // echo data_db2user(date("Y-m-d"))."<br>";
    // echo data_db2user2(date("Y-m-d"))."<br>";
?>