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
    $inizio=-30;
    $numero=$inizio;
    $ripetizioni=20;
    for($ripetizioni=$ripetizioni;$ripetizioni>0;$ripetizioni--){
        if($numero>=0){
            echo" $numero ";
        }
        else{
            if($numero<=0){
                echo"$numero";
            }
        }
    }
    ?>
</body>
</html>