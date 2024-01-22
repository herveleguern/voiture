<?php
class Voiture {
    private $nom;
    private $nbChevaux;
    private $lesPassagers; //tableau
    private $vitesse; //0 est le point mort

    function __construct($nom, $nbChevaux, $lesPassagers,$vitesse = 0) {        //double underscore devant construct
        $this->nom = $nom;
        $this->nbChevaux = $nbChevaux;
        $this->lesPassagers = $lesPassagers;
        $this->vitesse = $vitesse;
    }

    public function getVitesse() {
        return $this->vitesse;
    }
    public function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
    }
    public function passerVitesseSuperieure() {
        $this->vitesse++;
    }
    public function retrograder() {
        $this->vitesse--;
    }
    public function getNom(){
        return $this->nom;
    }
    
    public function ajouterPassager($nom, $ceintureAttachee=FALSE){
        $this->lesPassagers[]=new Passager($nom, $ceintureAttachee);
    }

    public function __toString(){
        //cette instance de Voiture = this
        $msg=$this->nom." ".$this->nbChevaux." chevaux ".PHP_EOL;
        //et les Passagers de cette Voiture
        foreach($this->lesPassagers as $unPassager){
            $msg.="$unPassager".PHP_EOL;
            //ou avec appel explicite de __toString()
            //$msg.=$unPassager->__toString().PHP_EOL;
        }
        return $msg;
    }

}
?>


