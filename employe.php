<?php
// $date = '10/03/2020';
// $date1 =new DateTime($date);
// $date2 = new DateTime();
// $diff = $date1->diff($date2);
// var_dump($diff->format('%r%y years'));

class Employe
{
    private  $nom = "";
    private  $prenom = "";
    private  $dateEmbauche;
    private  $fonction="";
    private  int $salaire;
    private  $service;

    public function __construct($nom,$prenom,$dateEmbauche,$fonction,$salaire,$service)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;

    }

    public function _anciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $now = new DateTime();
        $anciennete = ($now->diff($dateEmbauche))->format('%r%y years');
        return $anciennete;
    }
    
}


$damirdine = new Employe('ALI SOILIHI','Damirdine','2021-04-12','stagiaire',0,'formation');
var_dump($damirdine->_anciennete());

?>