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
    //Esrcizi
    //dato un array di numeri, calcolare la media
    //1 cercare un array  $e all'interno dell'array $a
    //1a qualte volte compare?
    //1b in quali posizioni?
    $a= [1, 2, 3, "pippo", "pluto", 1, 1]; 
    $e=3;
    $trovato=false;
    $conta=0;
    $i_stringa="";
    $i_array=[];
    for($i=0;$i<count($a);$i++){
        if($a[$i]===$e){
            //echo "trovato elemento $e<br>";
            //echo "$e si trova in posizione ". $i."<br>";
            $i_trovato=$i;
            $i_stringa=$i_stringa . " $i ";
            $trovato=true;
            $conta++;//$conta=$conta+1
            $i_array[]=$i;
        }
    }
        if($trovato){
            //echo "trovato elemento $e ($conta volte)";
            //echo"con indice $i_stringa";
            //echo "(in ultima posizione $i_trovato)<br>";
            echo"con indici ";
            for($i=0;$i<count($i_array);$i++){
                echo $i_array[$i]." ";
            }
        }
    ?>
</body>
</html>