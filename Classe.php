<?php
require "Alunno.php";

class Classe{
    protected $alunni = [];
    public function __construct (){
    //creazione array oggetti alunno
    $alunno = new Alunno("Mario", "Rossi", 18);
    $alunno2 = new Alunno("Luigi", "Verdi", 19);
    $alunno3 = new Alunno("Giovanni", "Bianchi", 20);
    $alunni = array($alunno, $alunno2, $alunno3);
    
    }
    function getArray(){
        return $this->alunni;
    }
}



?>