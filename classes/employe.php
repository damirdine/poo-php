<?php

class Employe
{
    private  $name = "";
    private  $firstname = "";
    private  $dateHiring;
    private  $fonction="";
    private  int $salary;
    private  $service;
    private static $nbr;

    public function __construct($name,$firstname,$dateHiring,$fonction,$salary,$service)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->dateHiring = $dateHiring;
        $this->fonction = $fonction;
        $this->salary= $salary;
        $this->service = $service;
        Employe::$nbr++;
    }

    public static function getNbrOfEmployes(){
        return Employe::$nbr;
    }
    
    public function getAnciennete()
    {
        $dateHiring = new DateTime($this->dateHiring);
        $now = new DateTime();
        $anciennete = ($now->diff($dateHiring))->format('%y');
        return $anciennete;
    }
    public function getSalaire(){
        return $this->salaire;
    }

    public function getPrime()
    {
        $primeSalaryPerCent= 0.05;
        $primeSalaryPerYearOfSeniority = 0.02;
        $datePrime = "30-11";
        $actualDate = (new DateTime("30-11-2022"))->format('d-m');;
        $prime = $this->salary*($primeSalaryPerCent+$primeSalaryPerYearOfSeniority*$this->getAnciennete());
        $prime = round($prime,2);
        // if ($actualDate == $datePrime){
        //     return $msg = " l’ordre de transfert de la prime de : $prime € pour $this->firstname a été envoyé à la banque.";
        // }
        return $prime;
    }
    public static function sortByNameFirstname($a, $b)
    {
        if ($a->name===$b->name){
            return strtolower($a->firstname) <=> strtolower($b->firstname);
        }
        return strtolower($a->name) <=> strtolower($b->name);
    }

    public static function sortByService($a, $b)
    {
        if ($a->service===$b->service){
            if ($a->name===$b->name){
                return strtolower($a->firstname) <=> strtolower($b->firstname);
            }
            return strtolower($a->name) <=> strtolower($b->name);
        }
        return strtolower($a->service) <=> strtolower($b->service);
    }
    public function payroll(){
        return $this->salary+$this->getPrime();
    }
}
?>