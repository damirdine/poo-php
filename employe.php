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

    public function anciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $now = new DateTime();
        $anciennete = ($now->diff($dateEmbauche))->format('%y');
        return $anciennete;
    }

    public function prime()
    {
        $pourcentageSurLeSalaire = 0.05;
        $pourcentageAnciennete = 0.02;
        $datePrime = "30-11";
        $actiualDate = (new DateTime("30-11-2022"))->format('d-m');;
        $prime = $this->salaire*($pourcentageSurLeSalaire+$pourcentageAnciennete*$this->anciennete());
        $prime = round($prime,2);
        if ($actiualDate == $datePrime){
            return $msg = " l’ordre de transfert de la prime de : $prime € pour $this->prenom a été envoyé à la banque.";
        }
        return $prime;
    }
    
}
$damirdine = new Employe('ALI SOILIHI','Damirdine','2019-04-12','stagiaire',26000,'formation');
var_dump($damirdine->prime());
?>