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
        $a= array(1, 2, 3, "pippo", "pluto", false);
        $a= [1, 2, 3, "pippo", "pluto", false];//indici consecutivi
        //echo"$a[3]<br>";
        $a[3]="paperino";
        $a[]="nuovo elemento";
        $a[]="ciao";
        //echo"$a[3]<br>";
        //print_r($a); per controllare il contenuto dell'array
        //var_dump($a); per controllare il contenuto dell'array
        //echo $a[100] errore percheè non presente nell'array
        for($i=0;$i<count($a);$i++){
            //echo$a[$i]. " è ". $i. " posizione "."<br>";
            echo"$i => {$a[$i]}<br>";
        }

       
    ?>
</body>
</html>