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

$link=
$corsi['corso1'] = ['nome' => "IFTS", 'inizio'=>"2021/09/30", 'coordinatore'=>"Forlivesi", 'n_partecipanti'=>"20"];
$corsi['corso2'] = ['nome' => "Analista Programmatore", 'inizio'=>"2022/02/01", 'coordinatore'=>"Rossi", 'n_partecipanti'=>"12"];
$corsi['corso3'] = ['nome' => "Tecnico Programmatore", 'inizio'=>"2022/01/03", 'coordinatore'=>"Rossi", 'n_partecipanti'=>"12"];
$corsi['corso4'] = ['nome' => "Sistemista", 'inizio'=>"2022/02/01", 'coordinatore'=>"Prandini", 'n_partecipanti'=>"11"];
$partecipanti=0;
$corso=[];
foreach($corsi as $c => $v){
    echo "il nome del corso è ". $v['nome'], " ed inizia in data ". $v['inizio']. "<br>"; 
    if($v['inizio']>date("Y/m/d")){
        echo "il nome del corso è ".$v['nome']. "ed il sito del link è <a href='./iscrizione.php'>Enaip</a><br>";
    }
    if($v['coordinatore']==('Rossi')){
        $data[]=$v['inizio'];
    }
    if($data[0]<$data[1]){
        echo$data[0];
    } else $data[1];
    if($v['n_partecipanti']>$partecipanti){
    $partecipanti=$v['n_partecipanti'];
    $corso=$v['corso'];
}
}
echo "il corso con più partecipanti è ".$corso[0] ." con ".$partecipanti." partecipanti";

    
//  $corsi['corso1'] = ['nome' => "IFTS", 'inizio'=>"2021/09/30", 'coordinatore'=>"Forlivesi", 'n_partecipanti'=>"20"];
//  $corsi['corso2'] = ['nome' => "Analista Programmatore", 'inizio'=>"2022/02/01", 'coordinatore'=>"Rossi", 'n_partecipanti'=>"12"];
//  $corsi['corso3'] = ['nome' => "Tecnico Programmatore", 'inizio'=>"2022/01/03", 'coordinatore'=>"Rossi", 'n_partecipanti'=>"12"];
//  $corsi['corso4'] = ['nome' => "Sistemista", 'inizio'=>"2022/02/01", 'coordinatore'=>"Prandini", 'n_partecipanti'=>"11"];

//  $ricerca_coordinatore = "Rossi";
//  $ricerca_coordinatore_bool = false;

//  foreach ($corsi as $stampa => $array_corsi) {
//      if (date("Y/m/d") < $array_corsi['inizio']) {
//          echo "Nome Corso: ".$array_corsi['nome']." | Data Inizio: ".$array_corsi['inizio']." | <a href='./iscrizione.php'>Link al corso</a><br>";
//      } else {
//      echo "Nome Corso: ".$array_corsi['nome']." | Data Inizio: ".$array_corsi['inizio']."<br>";
//      }
//      if ($array_corsi['coordinatore'] == $ricerca_coordinatore) {
//          $ricerca_coordinatore_bool = true;
//          $ricerca_data[] = $array_corsi['inizio'];
//      }
//      $ricerca_partecipanti[] = $array_corsi['n_partecipanti'];
//  }

//  if ($ricerca_coordinatore_bool == true) {
//      sort($ricerca_data);
//      echo "Rossi è coordinatore di un corso e il corso più vecchio inizia il: ".$ricerca_data[0]."<br>";
//  }

//  $max = 0;
//  sort($ricerca_partecipanti);

//  $n_partecipanti_max = $ricerca_partecipanti[count($ricerca_partecipanti) - 1];
//  foreach ($corsi as $stampa => $array_corsi) {
//      if ($array_corsi['n_partecipanti'] == $n_partecipanti_max) {
//          echo $array_corsi['nome']." con ".$array_corsi['n_partecipanti']." partecipanti<br>";
//      }
//  }


    ?>
</body>
</html>