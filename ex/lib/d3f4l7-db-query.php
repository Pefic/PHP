<!--  INSERT -->
<?php
    // INSERT 1 RECORD IN CUSTOMERS TABLE
    // try{
    //     $///// = $_POST['/////'];
    //     $///// = $_POST['/////'];
    //     $///// = $_POST['/////'];
    //     $sql = "INSERT INTO /////////// (/////,/////,/////)
    //     VALUES (://///,://///,://///)";
    //     // 2: PREPARE
    //     $st=$connection->prepare($sql);
    //     // 3: BIND
    //     $st->bindParam('/////',$/////,PDO::PARAM_STR);
    //     $st->bindParam('/////',$/////,PDO::PARAM_STR);
    //     $st->bindParam('/////',$/////,PDO::PARAM_INT);
    //     // 4: EXECUTE
    //     $st->execute();
    //     echo "///////////////////////////////////////";      
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
?>

<!--  SEARCH -->
<?php
    function fetchAll($connection){
        $records=[];
        try{
            // 2: PREPARE
                // QUERY STRING
            $sql="SELECT * FROM clienti";
            $st = $connection->prepare($sql);
            // 3: BIND
            // 4: EXECUTE
            $st->execute();
            // 5: FETCH
            $records = $st->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Exception caught... ";
            echo $e->getMessage();
        }
        // SEARCHED KEYS
        $keys = ['cognome','nome'];
        $message = "Numero Clienti elencati: ";
        listRecords($records,$keys,$message);
    }

    function fetchFiltered($connection,$key){
        $records=[];
        // SEARCHED KEY
        try{
            // 2: PREPARE
                // QUERY STRING
            $sql="SELECT * FROM clienti WHERE cognome LIKE :key";
            $st = $connection->prepare($sql);
            // 3: BIND
            $key2="%".$key."%";
            $st->bindParam('key',$key2,PDO::PARAM_STR);
            // 4: EXECUTE
            $st->execute();
            // 5: FETCH
            $records = $st->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Exception caught... ";
            echo $e->getMessage();
        }
        // SEARCHED KEYS
    $keys = ['cognome','nome'];
    // RETURN MESSAGE STRING
    $message = "Clienti con cognome filtrato per '$key': ";
    
    listRecords($records,$keys,$message);
    }
?>

<?php
    function listRecords($a,$ks,$message){
        echo "<strong>$message </strong>".count($a)."<br>";
        echo "  <tr>
                    <th><a href='./index.php'>Cognome</a></td>
                    <th><a href='./index.php'>Nome</a></td>
                </tr>";
        foreach($a as $v){
            // FIRST LEVEL
            $id=$v['ID_cliente'];
            echo "<tr>";
            foreach($ks as $k){
                echo "<td><a href=./premio.php?ID_cliente=".$id.">".$v[$k]."</a></td>";
            }
            echo "</tr>"; 
        }
    }

    function calcoloEta($a){
        $etaMaggiore=date("Y-m-d");
        foreach($a as $v){
            if($etaMaggiore>$a['dataNascita']){
                $etaMaggiore=$a['dataNascita'];
            }
        }
        return $etaMaggiore;
    }

    function compleanno(){

    }
?>


