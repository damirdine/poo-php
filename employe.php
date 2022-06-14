<?php

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

    public function getAnciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $now = new DateTime();
        $anciennete = ($now->diff($dateEmbauche))->format('%y');
        return $anciennete;
    }

    public function getPrime()
    {
        $pourcentageSurLeSalaire = 0.05;
        $pourcentageAnciennete = 0.02;
        $datePrime = "30-11";
        $actualDate = (new DateTime("30-11-2022"))->format('d-m');;
        $prime = $this->salaire*($pourcentageSurLeSalaire+$pourcentageAnciennete*$this->getAnciennete());
        $prime = round($prime,2);
        if ($actualDate == $datePrime){
            return $msg = " l’ordre de transfert de la prime de : $prime € pour $this->prenom a été envoyé à la banque.";
        }
        return $prime;
    }
    
}
?>