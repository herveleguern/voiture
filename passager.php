<?php
class Passager{
    private $nom;
    private $ceintureAttachee; //booleen TRUE si la ceinture est attachée
    function __construct($nom, $ceintureAttachee=FALSE) {
        $this->nom = $nom;
        $this->ceintureAttachee=$ceintureAttachee;
    }   

    public function __toString(){
        return ($this->ceintureAttachee==TRUE)?"$this->nom : Ceinture":"$this->nom : Pas de ceinture";
    }

    public function getCeintureAttachee(){
        return $this->ceintureAttachee;
    }
}
?>