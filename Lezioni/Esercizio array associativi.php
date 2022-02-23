<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arrayassociativi.css">
</head>
<body>
    <?php
    // $s1=['nome'=>"mario", 'cognome'=>"rossi", 'corso'=>"IFTS", 'voto'=>"10"];        
    // $s2=['nome'=>"giovanni", 'cognome'=>"verdi", 'corso'=>"IFTS", 'voto'=>"8"]; 
    // $studenti=[$s1, $s2];
    $numerostudenti=0;
    $studente['nome']=[];
    $studente['cognome']=[];
    $studente['corso']=[];
    $studente['voto']=rand(0,10);
    $studenti=[];
    ?>
    <table>
        <tr>
            <th>Numero Studente</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Corso</th>
            <th>Voto</th>
            <th>Link Corso</th>
        </tr>
        <?php
        // for($i=0;$i<100;$i++){
        //     $stundenti[$i]['nome']=('marco');
        //     $stundenti[$i]['cognome']=('Rossi');
        //     $stundenti[$i]['corso']=('IFTS');
        //     $stundenti[$i]['voto']=rand(0,10);
        //     echo $studenti['nome'];
        // }
        // foreach($studenti as $k =>$v){
        //     echo $v;
        // }
    for($i=0;$i<100;$i++){
         $studenti['nome']=('Marco');
         $studenti['cognome']=('Neri');
         $studenti['corso']=('IFTS');
         $studenti['voto']=rand(0,10);
         $studenti['link']=('https:www.enaiprimini.org');
         $numerostudenti += 1;
         if($studenti['voto']>=6){
              echo"<tr>
                      <td>{$numerostudenti}</td>
                      <td>{$studenti['nome']}</td>
                      <td>{$studenti['cognome']}</td>
                      <td>{$studenti['corso']}</td
                      <td>{$studenti['voto']}</td>
                      <td>{$studenti['link']}</td>
                  </tr>";
         }
     }
    echo"<hr>"

    

    ?>
    </table>
</body>
</html>