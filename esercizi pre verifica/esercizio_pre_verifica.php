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
    function data_db2user($data){
        $anno=substr($data,0,4);
        $mese=substr($data,5,2);
        $giorno=substr($data,8,2);
        return $giorno."/".$mese."/".$anno;
    }
// Premessa
// Un hotel vuole gestire sul suo sito internet i commenti dei clienti che soggiornano in
// hotel: il progetto prevede che il navigatore possa visualizzare tutti i messaggi già presenti
// e inserirne uno nuovo.
// Esercizio PHP
// Creare un form in cui il navigatore possa inserire i dati relativi ad un nuovo commento
// sul soggiorno in hotel: nome, data di inizio del soggiorno, n. di giorni, tipologia di
// vacanza (business o privata), n. di persone e il testo del commento.
// Nella pagina successiva sono definiti alcuni array contenenti i dettagli di ogni commento
// e un array contenente tutti gli array dei singoli commenti, tipo quelli definiti sotto, i cui
// valori sono da considerare non statici, cioè non noti a priori.
// $commento1 = [‘nome’=>”Mario Rossi”, ‘data’=>”2022-01-10”, ‘giorni’ => 4, ecc. ];
// $commento2 = [‘nome’=>”Giovanni Verdi”, ‘data’=>”2021-12-30”, ‘giorni’ => 2, ecc. ];
// $commenti = [$commento1, $commento2];

// 1. Riepilogare i dati inseriti nel form.
// 2. Creare un nuovo array con i dati inseriti nel form secondo lo schema utilizzato
// nell’array $commento1 e $commento2, poi aggiungerlo all’array $commenti
// 3. Elencare tutti i nomi delle persone che hanno inserito un commento e la rispettiva
// data di soggiorno (nel formato gg/mm/aaaa)
// 4. Elencare le tipologie di vacanza specificando quanti commenti sono presenti per
// ogni tipologia (es. business -> 2 commenti).
// Non elencare le tipologie senza commenti.
// 5. Nell’elenco del punto 3, vicino ad ogni nome, inserire un link alla pagina di
// dettaglio “./dettaglio.php”, trasmettendo a questa pagina il nome della persona.
// 6. Sommare tutti i n. di giorni dei vari commenti all’interno di $commenti;
// generalizzare il codice appena scritto all’interno di una funzione con 2 argomenti
// in ingresso: un array bidimensionale e una stringa che corrisponde alla chiave di
// cui restituire i valori sommati function somma_elementi ($a, $chiave)

    echo "nome: ". $_REQUEST['name']."<br>";
    echo "data di inizio: ". $_REQUEST['data']."<br>";
    echo "numero di giorni: ". $_REQUEST['giorni']. "<br>";
    $vacanza=["businnes", "privata"];
    if($_REQUEST['vacanza']==1){
        echo "la sua vacanza è stata di tipo: ".$vacanza[0]. "<br>";
        $cm3=$vacanza[0];
    } else { 
        $cm3=$vacanza[1] ;
        echo "la sua vacanza è stata di tipo: ".$vacanza[1]. "<br>";
    }
    echo "numero di persone alloggiate: ".$_REQUEST['persone']. "<br>";
    echo "commento lasciato: ".$_REQUEST['note']. "<br>";
    $_REQUEST['vacanza']=$cm3;
    $commento3=$_REQUEST;
     $commento1 = ['name'=>'Giovanni','data'=>'2022-12-30','giorni'=>6, 'vacanza'=>'privata','persone'=>5,'note'=>'entusiasmante e incantevole', 'voto'=> 7];
     $commento2 = ['name'=>'Antonio','data'=>'2022-10-12','giorni'=>8, 'vacanza'=>'businnes','persone'=>1,'note'=>'calmo rilassante e professionale','voto'=>8];
     $commenti = [$commento1, $commento2];
     $commenti[]=$commento3;

     foreach($commenti as $k => $v){
         echo $v['name']. " <a href='./dettaglio.php?nome={$v['name']}&"." "."cognome=rossi'>Dettaglio</a> <a href='./dettaglio.php?nome={$v['note']}'>Commento</a> ";//nome = diventa la chiave del valore passato nella query quindi possiamo stamparlo 
         //con $_GET['nome']
         $data=$v['data'];
         echo data_db2user($data). "<br>";
     }
          // Se volessi fare un confronto tra date per verificare che sia compresa in un intervallo
     // foreach($commenti as $v){
         //if($v['data'] > date('Y')-01-01 $$ $v['data']< date('Y')-12-31){
            // echo $v['data'];
    //}
     //}
     $privata=0;
     $businnes=0;
     foreach($commenti as $k => $v){
        if($v['vacanza']==="privata"){
            $privata += 1;
            //echo $v['vacanza']. "<br>";
        } else{
            $businnes += 1;
            //echo $v['vacanza']. "<br>";
        }
     }
     if($businnes>0){
         echo $vacanza[0]. " sono presenti: ".$businnes. " commenti <br>";
    }
     if($privata>0){
     echo $vacanza[1]. " sono presenti: ".$privata. " commenti <br>";
    }

    $day='giorni';
    echo "i giorni totali di permanenza sono: ". sommaGiorni($commenti, $day)."<br>";

    $pers='persone';
    echo "le persone totali che alloggiano nella struttura sono: ". sommaGiorni($commenti,$pers)."<br>";
    
    // 7 new
    //elencare le date di soggiorno ed inserire un link alla pagina partenza.php
    //a cui inviere la data di arrivo e il numero di giorni
    //e la data di partenza
    foreach($commenti as $k => $v){
        echo $v['data']. "<a href='partenza.php?data={$v['data']}&giorni={$v['giorni']}'>partenza</a><br>";
    }
    //funzione
    function sommaGiorni($array, $chiave){
    $somma=0;
    foreach($array as $v){
        $somma += $v[$chiave];
    }
     return $somma;
    }
    //punto 4 alternativo
    //$vacanze[]=0;
    // foreach($commenti as $k => $v){
    //     $vacanze[$v['tipologia']]++;
    // }
    // altro metodo
    //$vacanze['businnes']=0;
    
    ?>
</body>
</html>