<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $elemento=$x[$i] in questo modo scompongo $x arrai bidimensionale in $elemento che è un arrei associativo -->
    <?php
    
    // $prodotti=rand(20,100);
    // $soldi=rand(500,10000);
    $categoria1=['nome'=>"scarpe",'n_prodotti'=>rand(20,40),'fatturato'=>rand(500,10000)];
    $categoria2=['nome'=>"maglioni",'n_prodotti'=>rand(20,40),'fatturato'=>rand(500,10000)];
    $categoria3=['nome'=>"pantaloni",'n_prodotti'=>rand(20,40),'fatturato'=>rand(500,10000)];
    $categorie=[$categoria1,$categoria2,$categoria3];
    $annuale=[];
    $annocorrente="";
    $ptotale=0;
    $fatturato=0;
    $fatminore=20000; //altrimenti $categorie[0]['fatturato']
    $minnome=""; 
    $fatmaggiore=0; //altrimenti $categorie[0]['fatturato']
    $maxnome="";
    $fatturato10=[];
        //punto 1 e punto 4
        for($i=0;$i<count($categorie);$i++){
            $categorie[$i]['anno']=date('Y');
            $cat=$categorie[$i];
            switch($i){
                case 0: echo "<h3 style='background-color: yellow ;'>{$cat['nome']}<h3>";
                break;
                case 1: echo "<h3 style='background-color: green ;'>{$cat['nome']}<h3>";
                break;
                case 2: echo "<h3 style='background-color: lightblue ;'>{$cat['nome']}<h3>";
                break;
            }
        }
        //punto 2 e punto 3
        foreach($categorie as $k => $v){
            $ptotale += $v['n_prodotti'];
            $fatturato += $v['fatturato'];

            if($v['fatturato']>$fatmaggiore){
                $fatmaggiore = $v['fatturato'];
                $maxnome=$v['nome'];
            }
            if($v['fatturato']<$fatminore){
                $fatminore = $v['fatturato'];
                $minnome=$v['nome'];
            }
            //echo $v['anno']."<>";
        }
        // punto 5
        for($i=1;$i<=10;$i++){
            switch ($i){
                case 1: $anno=date("Y")-9 ; $fanno=$fatturato - 900;
                break;
                case 2: $anno=date("Y")-8 ; $fanno=$fatturato - 800;
                break;
                case 3: $anno=date("Y")-7 ; $fanno=$fatturato - 700;
                break;
                case 4: $anno=date("Y")-6 ; $fanno=$fatturato - 600;
                break;
                case 5: $anno=date("Y")-5 ; $fanno=$fatturato - 500;
                break;
                case 6: $anno=date("Y")-4 ; $fanno=$fatturato - 400;
                break;
                case 7: $anno=date("Y")-3 ; $fanno=$fatturato - 300;
                break;
                case 8: $anno=date("Y")-2 ; $fanno=$fatturato - 200;
                break;
                case 9: $anno=date("Y")-1 ; $fanno=$fatturato - 100;
                break;
                case 10: $anno=date("Y") ; $fanno=$fatturato;
                break;
            }
            //echo $anno;
            $annuale[$anno]['fatturato']=$fanno;
        }
        // for($i=0;$i<10;$i++){
        //     $annuale['anno']=(2022-1);
        //     $annuale['fatturato']=($fatturato-100);
        // }
        // foreach($annuale as $k => $v){
        //    echo $v['fatturato']."<br>";
        //    echo $v['anno']."<br>";
        // }
        echo "il numero totale di prodotti è ".$ptotale ."<br>";
        echo "il fatturato minore è di ".$fatminore." della categoria ".$minnome."<br>";
        echo "il fatturato maggiore è di ".$fatmaggiore." della categoria ".$maxnome."<br>";
        echo "il fatturato medio è di ".($fatturato/(count($categorie)))."<br>";
        foreach($annuale as $k=>$v){
            echo $k." ". $v['fatturato'] ."<br>";
        }
        //print_r($annuale);
        //print_r($categorie);
    ?>

</body>
</html>