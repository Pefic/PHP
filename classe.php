<?php 
	define ("CITTA","Rimini"); //visibilità globale
	echo "Benvenuti a ".CITTA."<br>";

    class Persona {
        // proprietà 
        private $nome = ""; 
        const ENAIP = "Fondazione En.A.I.P. S. Zavatta "; 
 
        //costruttore (metodo magico)
        public function __construct($nome){
                //inizializzare della variabile $name   
                $this -> nome = $nome;
        }
                             
        //metodi
        public function getName() {
            //$this rappresenta l'oggetto che sarà costruito a runtime
            return $this -> nome;
        }
        public function stampaTutto(){
        	echo $this->getName()."<br> presso: ".self::ENAIP.CITTA."<br>"; 
        }
        
          
   }
?>                 

<?php        
        //istanzio 2 nuovi oggetti della classe Persona
        $studente = new persona("Mario Rossi");
        $docente = new persona("Giacome Verdi");              
 ?>                         
        Studente: <?php echo $studente->getName()?><br>
        Docente: <?php echo $docente->getName()?><br>
        
        Metodo "stampTutto": <?php echo $docente->stampaTutto()?><br>
        
        Corso <?php echo $studente::ENAIP ?><br>
        Corso <?php echo Persona::ENAIP ?><br>

           
          