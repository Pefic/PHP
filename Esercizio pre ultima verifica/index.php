<?php
function compleanno($data){
  $arr = explode('-',$data);
  $arr1 = explode(' ',$arr[2]);
  //echo $arr[1] . " " . $arr1[0];
  if(($arr[1] == date('m')) && ($arr1[0] == date('d'))){
    return true;
  } else return false;
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
<form action="./index.php" method="get" enctype="multipart/form-data">
    <input type="text" name="cognome" id="cognome">
  <input type="submit" value="filtra / rimuovi filtro" name="submit">
</form>
<!-- <button type="button" class="btn btn-primary button-border"><a class="button-link" href="./index.php?nome='rimosso'">Rimuovi filtro</a></button><br> -->
<?php
 include_once "./connection.php" ;
if(count($_GET) != 0){
  $key = $_GET['cognome'];
    //filtrare per cognome l'elenco;
  // try{
  //     $sql = "SELECT * FROM clienti";
  //     $st = $connessione->prepare($sql);
  //     $st->execute();
  //     $filtri = $st->fetchAll(PDO::FETCH_ASSOC);
  // }catch (PDOException $e){
  //     echo "eccezione catturata.<br>";
  //     echo $e->getMessage();
  // }
  try{
    // 2: PREPARE
        // QUERY STRING
    $sql="SELECT * FROM clienti WHERE cognome LIKE :key";
    $st = $connessione->prepare($sql);
    // 3: BIND
    $key2=$key."%";
    $st->bindParam('key',$key2,PDO::PARAM_STR);
    // 4: EXECUTE
    $st->execute();
    // 5: FETCH
    $clienti = $st->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo "Exception caught... ";
    echo $e->getMessage();
}
  // $arr = explode(,$key);
  // print_r($arr);
  // foreach($filtri as $filtro){
  //   if(strtoupper($key) == strtoupper($filtro['cognome'])){
  //     echo $filtro['nome'] . " " . $filtro['cognome'] . "<br>";
  //   }
  // }
  if($key == ''){
    echo "sono stati trovati: " . count($clienti) . " clienti<br>";
  }else{
  echo "sono stati trovati: " . count($clienti) . " clienti con la ricerca: " . $key . "<br>";
  }
  $contatore = 0;
$data = $clienti[1]['dataNascita'];
$nomeAnziano = '';
$idAnziano = 0;
 foreach($clienti as $cliente){
   //echo $cliente['nome'] ." ". $cliente['cognome'] . "<br>";
   if($data<$cliente['dataNascita']){

   }else {
     $data = $cliente['dataNascita'];
     $nomeAnziano = $cliente['nome'] ." ". $cliente['cognome'];
     $idAnziano = $cliente['ID_cliente'];
  }
   $contatore += 1;
 }
 
//echo "sono stati elencati: " . $contatore . " clienti.<br>";
//echo " il cliente più anziano è: " . $nomeAnziano;
echo "il cliente più anziano è: <a href='premio.php?id_anziano={$idAnziano}'> $nomeAnziano </a> <br>";

$compleanno = 0;
//compleanno($clienti[1]['dataNascita']);
foreach($clienti as $cliente){
  $comp = $cliente['dataNascita'];
  //echo $comp;
  if(compleanno($comp)===true){
    $compleanno += 1;
  }
}
echo "oggi è il compleanno di: ". $compleanno . " clienti<br>";
// foreach($filtra as $filtro){
//   echo $filtro['nome'] . " " . $filtro['cognome'];
// }
  foreach($clienti as $cliente){ 
    echo $cliente['nome'] . " " . $cliente['cognome'] . "<br>";
  }
} else{
try{
    $st = $connessione->prepare("SELECT * FROM clienti");
    $st->execute();
    $clienti = $st->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e){
            echo "eccezione catturata.<br>";
            echo $e->getMessage();
}
$contatore = 0;
$data = $clienti[1]['dataNascita'];
$nomeAnziano = '';
$idAnziano = 0;
 foreach($clienti as $cliente){
   echo $cliente['nome'] ." ". $cliente['cognome'] . "<br>";
   if($data<$cliente['dataNascita']){

   }else {
     $data = $cliente['dataNascita'];
     $nomeAnziano = $cliente['nome'] ." ". $cliente['cognome'];
     $idAnziano = $cliente['ID_cliente'];
  }
   $contatore += 1;
 }
 
echo "sono stati elencati: " . $contatore . " clienti.<br>";
//echo " il cliente più anziano è: " . $nomeAnziano;
echo "il cliente più anziano è: <a href='premio.php?id_anziano={$idAnziano}'> $nomeAnziano </a> <br>";



$compleanno = 0;
compleanno($clienti[1]['dataNascita']);
foreach($clienti as $cliente){
  $comp = $cliente['dataNascita'];
  //echo $comp;
  if(compleanno($comp)===true){
    $compleanno += 1;
  }
}
echo "oggi è il compleanno di: ". $compleanno . " clienti";
}
// foreach($filtra as $filtro){
//   echo $filtro['nome'] . " " . $filtro['cognome'];
// }
?>

  
</body>
</html>