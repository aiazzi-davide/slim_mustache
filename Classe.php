<?php
require "Alunno.php";

class Classe{
    public $alunni = [];

    public function __construct (){
    //creazione array oggetti alunno
    $alunno = new Alunno("Mario", "Rossi", 18);
    $alunno2 = new Alunno("Luigi", "Verdi", 19);
    $alunno3 = new Alunno("Giovanni", "Bianchi", 20);
    array_push($this->alunni, $alunno);
    array_push($this->alunni, $alunno2);
    array_push($this->alunni, $alunno3);
    }
    public function getArray(){
        return $this->alunni;
    }
    public function getAlunno($nome){
        foreach($this->alunni as $alunno){
            if($alunno->getNome() == $nome){
                return $alunno;
            }
        }
    }
}



?>