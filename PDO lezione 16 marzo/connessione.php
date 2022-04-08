<?php
include_once "./config.php";
    try{
        //1 connessione
        $connessione = new PDO($dsn, $user, $password);
    } catch (PDOException $e){
        echo "eccezione catturata.<br>";
        echo $e->getMessage();
    }
?>