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
    //calcolare per quali numeri è divisbile
    //il numero memorizzato in $numero
    //scrivere se è un numero primo
    //scrivere la stessa cosa da $inizio a $fine
    $numero=14;
    $div=0;
    //$numero_primo=true;
    //echo"divisori di $numero: ";
    for($i=2;$i<=$numero;$i++){
        //$i++;
        $div=$div+1;
        //if($div != 1 AND $div != $numero){
            //$numero_primo = false;
        //}
        if(($numero%$i)==0){
            echo"$numero è divisibile per $i<br>";
        }
    }
    if($div>2){
        echo"$numero non è un numero primo<br>";
    }
    //echo"(numero" . ($div > 2 ?"NON":"")." primo);
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $numero=14;
    echo"Divisori di $numero: ";
    for($i=2;$i<=$numero;$i++){
        if(($numero%$i)==0){
            echo $i. " ";
        }
    }

    echo"<br>";
    echo"<br>";
    echo"<br>";
    $numero=14;
    echo"$numero è divisibile per: ";
    for($i=$numero;$i>=1;$i--){
        if($numero%$i==0){
            echo" $i ";
        }
    }
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $min=1;
    $max=100;
    for($i=1;$i<100;$i++){
        if($max%$i==0){
            echo"$i<br>";
        }
    }
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $dn=0;
    for($numero=100;$numero <= 200;$numero++){
        echo "<br>Divisori di $numero: ";
        for($divisore = 1; $divisore <= $numero; $divisore++){
            if(($numero % $divisore)==0){
                echo $divisore. " ";
            }
    
        }
    }
    
    ?>
</body>
</html>