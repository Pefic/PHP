<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsi OOP</title>
</head>

<body>
    <?php

    class Corso
    {
        const FINANZIAMENTO = "Il corso è finanziato con i fondi dell'Unione Europea";
        private
            $voti = [], //elenco dei voti degli studenti: 1 voto per ogni studente iscritto (quindi il numero dei voti coincide con il numero degli studenti)
            $nome, //nome corso
            $posti = 10, //n. di posti disponibili
            $valutazione;  //valutazione assegnata al corso dagli studenti


        function __construct($nome, $posti)
        {
            $this->nome = $nome;
            $this->posti = $posti;
        }

        function setVoto($voto)
        {   //DA FARE
            //$this -> voti[]= rand(0,$voto);
            $a[]=$voto;
            if(count($voto)<=10){
            foreach($voto as $v){
                $this -> voti[]= $v;
            }
            }else {
                for($i=0;$i<10;$i++){
                    $this -> voti[]= rand(0,10);
                }
            }
        }
        function getVoto()
        {   //DA FARE
            $somma=0;
            $cont=1;
            foreach($this-> voti as $v){
                $somma += $v;
                $cont += 1;
            }
            $this -> valutazione = round($somma/2);
            return $this -> valutazione;
        }
        function setStudenti($studenti)
        {   //DA FARE
            $this -> posti = $studenti;
        }
        function getStudenti()
        {   //DA FARE
            return $this -> posti;
        }

        /**
         * @return true se il n. degli studenti è uguale (o maggiore) al n. di posti disponibili, false altrimenti
         */
        function completo()
        {   //DA FARE
        }
        /**
         * @return % di partecipazione ( = n. studenti/posti * 100)
         */
        function partecipazione()
        {   //DA FARE
            $this -> partecipazione = $this->getStudenti();
            return $this -> partecipazione;
        }
        function getNome(){
            return $this -> nome; 
        }
    }

    $ap = new Corso('Analista Programmatore', 12);
    $v=[];
    for($i=0;$i<$ap->getStudenti();$i++){
        $v[]=rand(0,10);
    }
    $ap -> setVoto($v);
    echo "ap ". $ap -> getVoto()."<br>";
    $studentiap=rand(1,20);
    $ap -> setStudenti($studentiap);

    //echo $ap -> getNome();
    $ifts = new Corso('IFTS', 20);
    $studentiifts=rand(1,20);
    $ifts -> setStudenti($studentiifts);
    for($i=0;$i<$ifts->getStudenti();$i++){
        $v[]=rand(0,10);
    }
    $ifts -> setVoto($v);
    echo "ifts ". $ifts -> getVoto()."<br>";
    echo "<hr>";
    //DA FARE
    //1. assegnare i voti random ad ogni corso (in numero non superiore al n. di posti)
    //quanti voti assegnare ad ogni corso? assegnare un numero random 

    $corsi = [$ap, $ifts]; //un array di oggetti!!
    foreach($corsi as $v){
       echo $v -> getNome() . " ". corso::FINANZIAMENTO ."<br>";
       //echo "".$v -> getVoto()."<br>";
    }
    $votoap=$corsi[0] -> getVoto();
    $votoifts=$corsi[1] -> getVoto();
    $corso_val_maggiore="";
    if($votoap > $votoifts){
        $corso_val_maggiore = $corsi[0] -> getNome();
    } else $corso_val_maggiore = $corsi[1] -> getNome();

    $part1= $ap->partecipazione();
    $part2= $ifts->partecipazione();
    $partmedia=($part1+$part2)/2;

    echo "il corso con la valutazione maggiore è ". $corso_val_maggiore ."<br>";
    echo "la media di partecipazione dei corsi è ". $partmedia;
    
    //DA FARE 
    //lavorare sull'array $corsi
    //2. elencare i nomi dei corsi 
    //3. dopo ogni nome inserire sempre il finanziamento (costante definita nelal classe)
    //3. qual è il corso con la valutazione maggiore?
    //4. qual è la partecipazione media dei corsi?



    ?>
</body>

</html>