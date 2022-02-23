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
            $voti=[],       //elenco dei voti degli studenti: 1 voto per ogni studente iscritto (quindi il numero dei voti coincide con il numero degli studenti)
            $nome,          //nome corso
            $posti=10,      //n. di posti disponibili
            $valutazione;   //valutazione assegnata al corso dagli studenti

        function __construct($nome, $posti)
        {
            $this->nome = $nome;
            $this->posti = $posti;
        }

        function setVoto($voto) //Impostazione del voto random da 1 a 10
        {
            $this->voti[]=rand(0,$voto);
        }
        function getVoto()  //Calcolo della valutazione media del corso
        {   
            $somma=0;
            for($i=0;$i<count($this->voti);$i++){
                $somma=$somma+$this->voti[$i];
            }
            $this->valutazione=round($somma/$i,2);   //Calcolo della media delle valutazioni del corso
            return $this->valutazione;
        }
        function getNome()  //Estrapolazione del nome del corso
        {   
            return $this->nome;
        }
        function setStudenti($studenti) //Impostazione del numero di partecipanti
        {
            for($i=0;$i<$studenti;$i++){
                if ($this->completo($i)===false){
                    $this->setVoto(10); //Inteso come valutazione massima 10
                }
            }
        }
        function getStudenti()  //Estrapolazione del numero di partecipanti
        {
            return count($this->voti);
        }

        /**
         * @return true se il n. degli studenti è uguale (o maggiore) al n. di posti disponibili, false altrimenti
         */
        function completo($i)   //Verifica di non superamento del numero massimo di posti
        {
            if($i<$this->posti){
                return false;
            }
            return;
        }
        /**
         * @return % di partecipazione ( = n. studenti/posti * 100)
         */
        function partecipazione()   //Calcolo della percentuale di partecipazione al corso
        {
            $this->partecipazione=round((($this->getStudenti()/$this->posti)*100),2);
            return intval($this->partecipazione);
        }
    }

    //1. assegnare i voti random ad ogni corso (in numero non superiore al n. di posti)
    //quanti voti assegnare ad ogni corso? assegnare un numero random 

    //CORSO "ANALISTA PROGRAMMATORE"
    $ap = new Corso('Analista Programmatore', 12);
    $studenti = rand(3,20);
    $ap->setStudenti($studenti);
    $ap->getStudenti();
    $ap->getVoto();
    $ap->partecipazione();

    //CORSO "IFTS"
    $ifts = new Corso('IFTS', 20);
    $studenti = rand(3,20);
    $ifts->setStudenti($studenti);
    $ifts->getStudenti();
    $ifts->getVoto();
    $ifts->partecipazione();

    //ELENCO CORSI
    $corsi = [$ap, $ifts]; //un array di oggetti!!

    //lavorare sull'array $corsi
    //2. elencare i nomi dei corsi 
    //3. dopo ogni nome inserire sempre il finanziamento (costante definita nella classe)
    
    echo "<h3><u>ELENCO CORSI:</u></h3>";
    echo "<ul>";
    for($i=0;$i<count($corsi);$i++){
        echo "<li>".$corsi[$i]->getNome()." (".Corso::FINANZIAMENTO.")</li>";
        echo "<ul>";
        echo "<li>Numero di candidati: ".$corsi[$i]->getStudenti()."</li>";
        echo "<li>Percentuale di partecipazione: ".$corsi[$i]->partecipazione()."%</li>";
        echo "<li>Valutazione del corso: ".$corsi[$i]->getVoto()."</li>";
        echo "</ul>";
    };
    echo "</ul>";
    echo "<hr><br>";
    
    //4. qual è il corso con la valutazione maggiore?
    
    $valmax="";
    if($corsi[0]->getVoto()>$corsi[1]->getVoto()){
        $valmax=$corsi[0]->getNome();
    }else{
        $valmax=$corsi[1]->getNome();
    }
    echo "Il corso che ha ottenuto la valutazione maggiore e' stato: <strong><u>".$valmax."</u></strong><br><br>";
    
    //5. qual è la partecipazione media dei corsi?
    
    $part0=$corsi[0]->partecipazione();
    $part1=$corsi[1]->partecipazione();
    $media_corsi=round((($part0+$part1)/2),2);
    echo "La partecipazione media di entrambi i corsi e' stata del: ".$media_corsi."%";      
    ?>
</body>
</html>