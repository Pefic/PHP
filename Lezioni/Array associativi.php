<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativi</title>
</head>
<body>
    <!-- 
        [Array associativi]
        $a=[1, 2, 3,] array che ha gli indici assegnati in automatico 
        "0" cointiene elemento 1
        "1" cointiene elemento 2
        "2" cointiene elemento 3
        $a=['0'=>1, '1'=>2, '2'=>3]; possiamo esprimere e assegnare noi quale sia l'indice dei singoli elementi all'interno dell'array
        $a=['0'=>1, '5'=>2, '2'=>3]; il ciclo for si usa solo quando nell'array abbiamo tutti indici consecutivi, quindi non utilizzabile negli array associativi
        $festeggiato=['nome'=>"Ruslan", 'anno'=>2000, 'voto'=>10] la chiave deve sempre essere messa tra apici, perchè ci ricordano che contengono un testo statico
        Si chiamano associativi perchè è possibile associare una chiave ad un contenuto. la chiave non può essere una variabile.
        echo $festeggiato['nome'];
        $festeggiato['nome']="Marco"; per cambiare valore all'interno dell'array
        $festeggiato[]="valore"; aggiungiamo un nuovo valore al primo indice disponibile cioè lo 0
        $festeggiato['nuova chiave']="valore";
        unset per eliminare un elemento dall'array
        per aggiungere un'informazione al valore di un indice basta $festeggiato['nome'] .= "Rossi" che diventa cosi Ruslan Rossi.

        foreach che esegue un ciclo con una serie di interazioni che va bene per ogni tipologia di array
        si puo anche usare questa forma foreach($festeggiato as $chiave=>$valore)
        foreach($festeggiato as $valore){
            istruzioni da eseguire ad ogni interazione;
        }
         foreach($festeggiato as $valore){
             echo $valore; --in questo modo $valore assume in automatico il valore della prima chiave presente nell'array.--
         }
         se ci interessa avere a video anche la chiave dell'array e non solo il valore dobbiamo usare 
         foreach($festeggiato as $chiave=>$valore){
             echo "$chiave=$valore";
         }
         $chiave e $valore possono assumere qualunque nome noi vogliamo;
     -->
    <?php
        $numero=1;
        $temperatura1=['gennaio'=>-1, 'febbraio'=>5, 'marzo'=>15];
        $temperatura2=['gennaio'=>-10, 'febbraio'=>15, 'marzo'=>10];
        $temperatura3=['gennaio'=>-3, 'febbraio'=>7, 'marzo'=>20];
        $temperature=[$temperatura1,$temperatura2,$temperatura3];
         foreach( $temperature as $k => $v ){
             //echo $numero.") ".$k." ". $v. " gradi <br>";
             echo $numero.") ".$k." ". $v['febbraio']. " gradi <br>";
             //var_dump($v);
             $numero++;
             $febbraio = array_column($temperature, 'febbraio');
            //print_r($febbraio);
            echo min($febbraio);
         }
         echo"<hr>";










        $festeggiato=['nome'=>"Ruslan", 'anno'=>2000, 'voto'=>10, 'eta'=>22, 'sesso'=>"uomo"];
        $festeggiato['nome'] .= ' Rossi';
        //echo$festeggiato['nome'];
        // $festeggiato[]='Nuovo';
        // print_r($festeggiato);
        foreach($festeggiato as $key => $value){
            //echo $festeggiato[$key];
            echo "$key = $value <br>";
           // echo $value."<br>";
           // echo $key."<br>";

        }
        
        echo"<br>";
        echo"<hr>";
        // temperatura media dei mesi memorizzati
        $temperature=['gennaio'=>-1, 'febbraio'=>5, 'marzo'=>15];
        $somma=0;
        $temp=0;
        foreach($temperature as $c => $v){
            echo "$c = $v <br>";
            $somma += $v;
            $temp ++;
        }
        echo "la temperatura media è di ". (floor($somma/$temp)). "<br>";
        echo"<hr>";
        //$a temperature e assegnare 12 volte temperature random
        $mesi=[];
        $a=['t'=>-10, 'giorni'=>31];
        $mesi['gennaio']=$a;
        $mesi['febbraio']=$a;
        $mesi['marzo']=$a;
        $somma=0;
        for($m=1;$m<=12; $m++){   
            switch($m) {
                case 1: $nomemese_m="gennaio"; $giornimese=31;
                break;
                case 2: $nomemese_m="febbraio"; $giornimese=28;
                break;
                case 3: $nomemese_m="marzo"; $giornimese=30;
                break;
                case 4: $nomemese_m="aprile"; $giornimese=31;
                break;
                case 5: $nomemese_m="maggio"; $giornimese=30;
                break;
                case 6: $nomemese_m="giugno"; $giornimese=31;
                break;
                case 7: $nomemese_m="luglio"; $giornimese=30;
                break;
                case 8: $nomemese_m="agosto"; $giornimese=30;
                break;
                case 9: $nomemese_m="settembre"; $giornimese=31;
                break;
                case 10: $nomemese_m="ottobre"; $giornimese=30;
                break;
                case 11: $nomemese_m="novembre"; $giornimese=31;
                break;
                case 12: $nomemese_m="dicembre"; $giornimese=31;
                break;
            }
            //$mesi[$nomemese_m]=['t'=>rand(-10, 30), 'giorni'=>$giornimese];
            $mesi[$nomemese_m]['t']=rand(-10, 30);
            $mesi[$nomemese_m]['giorni']=$giornimese;
            //echo $mesi[$nomemese_m]."<br>";
            //$a;
            //rand(-10, 30);
            //echo $nomemese_m ." ". $mesi[$nomemese_m]. "<br>";
            //$somma += $mesi[$nomemese_m];
        }
        //var_dump($mesi);
        //echo "<br>la temperatura media dei 12 mesi dell'anno è ". (floor($somma/12)). "<br>";
        foreach($mesi as $mese=>$array_mese){
            echo $mese." "."(".$array_mese['giorni']."): ". $array_mese['t']." <br>";
        }

        //
        //$s=['nome'=> "Mario", 'voto'=>30];

        //nome - cognome - vot
        // mario   rossi   30
        // giovanni    verdi   20
        //tabella con riga statica
        echo"<hr>";
        $s1=['nome'=>"mario", 'cognome'=>"rossi", 'voto'=>"30"];        
        $s2=['nome'=>"giovanni", 'cognome'=>"verdi", 'voto'=>"20"];        
        $s3=['nome'=>"marco", 'cognome'=>"neri", 'voto'=>"26"];
        $studenti=[$s1, $s2, $s3];        
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Voto</th>
        </tr>
        <?php
        for($i=0;$i<count($studenti);$i++){
            $studente = $studenti[$i];
            //$voto=$studente['voto'];
            echo"<tr>
                <td>{$studente['nome']}</td>
                <td>{$studente['cognome']}</td>
                <td>{$studente['voto']}</td>
            </tr>";
        }
        ?>
    </table>
    <!-- 
        $s1=['nome'=> "Mario", 'voto'=>30]; 
        $s2=['nome'=> "Giovanni", 'voto'=>20]; 
        $s3=['nome'=> "Luca", 'voto'=>25]; 
        $s4=['nome'=> "Marco", 'voto'=>31]; 
        $studenti=[$s1, $s2, $s3, $s4]; oggni array ha le stesse chiavi, array bidimensionale in cui ogni array ha le stesse chiavi

    -->
</body>
</html>