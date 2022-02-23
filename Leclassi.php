<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le classi</title>
</head>
<body>
    <?php

        class Esempio {
            //inserire proprieta e metodi
            private $testo = "testo completamente nuovo<br>";

            function __construct($t = ""){           
                echo "<br>***<br> costruttore della classe Esempio<br>";
                if (!empty($t)){
                $this -> testo = $t; //$this rappresenta l'oggetto istanziato nel momento in cui viene istanziato quel metodo
                }
            }
            function getTesto(){
                return $this -> testo;
            }
            function setTesto($t){
                $this -> testo = $t;
            }
            static function statico(){
                echo "nel metodo statico"; //serve per fare delle funzionalita generiche indipendentemente dalle caratteristiche dell'oggetto in questione.
            }
        }
        class gestioneArray{
            private $array;
            static private $contatore; // relativa alla classe e non all'oggetto.
            function __construct($a){
                $this -> array = $a; 
            }
            function empty(){
                return (! $this -> array);
            }
            function max(){
                //verifico se l'array è vuoto
                if($this -> empty()) return false;
                $max= $this -> array[0];
                foreach($this->array as $v){
                    if($v>$max){
                        $max = $v;
                    }
                }
                return $max;
            }
        }

        $obja = new gestioneArray([1, 2, 3]);
        $max = $obja -> max();
        //echo $obja -> max();
        if($max=== false){
            echo "errore";
        }else{
            echo $max;
        }

        echo "<br>la mia prima classe<br>";
        $o1 = new Esempio("testo 1");
        //$o1 -> testo = "tutto chiaro";
        //echo $o1 -> testo;
        $o1 -> setTesto('TUTTO CHIARO');
        echo $o1->getTesto();
        echo"<br>";
        $o1 :: statico();
        echo"<br>";

        

        $o2 = new Esempio();
        echo $o2 -> getTesto();


        echo "<hr>";

        // class gestioneArrayStatic{
        //     private $array;
        //     public $numero = 0;
        //     static $contatore = 0; // relativa alla classe e non all'oggetto.
        //     function __construct($a){
        //         $this -> array = $a; 
        //     }
        //     function empty(){
        //         return (! $this -> array);
        //     }
        //     function max(){
        //         //verifico se l'array è vuoto
        //         if($this -> empty()) return false;
        //         $max= $this -> array[0];
        //         foreach($this->array as $v){
        //             if($v>$max){
        //                 $max = $v;
        //             }
        //         }
        //         return $max;
        //     }
        // }

        // $objA = new gestioneArrayStatic([1, 2, 3]);
        // echo $objA ->numero=1;
        // echo "numero di objA ".$objA->numero."<br>";
        // echo "contatore di A: ". $objA-> contatore."<br>";


        // $objB = new gestioneArrayStatic([1, 2, 3]);
        // $objB ->numero=1;
        // echo "numero di objB ".$objB->numero."<br>";
        // echo "contatore di B: ". $objB-> contatore."<br>";


        //$max = $objA -> max();
        //echo $obja -> max();
        // if($max=== false){
        //     echo "errore";
        // }else{
        //     echo $max;
        // }
    ?>
</body>
</html>