<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempio <?php echo "PHP";?></title>
</head>
<body>
    <!--commento in HTML-->
    <?php
    //commento in linea
    /*
    commentiamo tutto che serve
    */
    echo "prima pagina";
    echo "<br>";
    echo date("D/d/M/Y/h:i:s");
    echo "<br>";
    echo 'daniele dice:"pausa"<br>'; 
    echo 'daniele dice:\'pausa\'<br>';
    echo "daniele dice:\"pausa\" ";
    
    ?>
    
    <p>ciao 
        <?php 
        echo"a tutti";
        ?>
    </p>
    

    <?php
        echo "a tutti!";
    ?>
</body>
</html>