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
    $a=[1, 2, 3, 2, 1, 6, 7, 5, 4, 6, 8, 9, 11, 23, 36, 7,];
    $massimo=0;
    $elemento=36;
    $x=0;
    for($i=0;$i<count($a);$i++){
        echo $a[$i]."<br>";
        if($a[$i]==$elemento){
            $x=$x+1;
        }
        if($a[$i]>$massimo){
            $massimo=$a[$i];
        } //else{
            //$massimo=$massimo;
        //}
    }
    echo "il numero piu grande all'interno dell'array è ". $massimo;
    echo "<br>il numero ". $elemento. " compare ".$x. " volte";
    ?>
</body>
</html>