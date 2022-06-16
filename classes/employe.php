<?php
class Employe
{
    private  $name = "";
    private  $firstname = "";
    private  $dateHiring;
    private  $fonction = "";
    private  int $salary;
    private  $service;
    private  $agency;
    private  $childList = [];
    private static $nbr;

    public function __construct($name, $firstname, $dateHiring, $fonction, $salary, $service,$agency, $childList=[])
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->dateHiring = $dateHiring;
        $this->fonction = $fonction;
        $this->salary = $salary;
        $this->service = $service;
        $this->agency = $agency;
        $this->childList = $childList;
        Employe::$nbr++;
    }
    

    public static function getNbrOfEmployes()
    {
        return Employe::$nbr;
    }
    public function getChildList()
    {
            return $this->childList;
    }

    public function getSeniority()
    {
        $dateHiring = new DateTime($this->dateHiring);
        $now = new DateTime();
        $seniority = ($now->diff($dateHiring))->format('%y');
        return $seniority;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }

    public function getAgency()
    {
        return $this->agency;
    }

    public function getPrime()
    {
        $primeSalaryPerCent = 0.05;
        $primeSalaryPerYearOfSeniority = 0.02;
        $datePrime = "30-11";
        $actualDate = (new DateTime())->format('d-m');;
        $prime = $this->salary * ($primeSalaryPerCent + $primeSalaryPerYearOfSeniority * $this->getSeniority());
        $prime = round($prime, 2);
        if ($actualDate == $datePrime) {
            return $getPrime = " l’ordre de transfert de la prime de : $prime € pour $this->firstname a été envoyé à la banque.";
        }
        return $prime;
    }
    public function getHolidayCheck()
    {
        $minYearForHC = 1;
        if ($this->getSeniority() <= $minYearForHC) {
            return false;
        }
        return true;
    }
    public function getChristmasCheck()
    {
        $nbrOfChild = count($this->childList);
        if($nbrOfChild==0){
            return false;
        }
        $ChildCkeckArray=[];
        foreach($this->childList as $child){
            if($child->getAge()>=0 && $child->getAge() <=10){
                $childCheck = 20;
                array_push($ChildCkeckArray, $childCheck);
            }
            else if($child->getAge()>10 && $child->getAge()<=15){
                $childCheck = 30;
                array_push($ChildCkeckArray, $childCheck);
            }
            else if($child->getAge()>15 && $child->getAge()<=18){
                $childCheck = 50;
                array_push($ChildCkeckArray, $childCheck);
            }
        }
        $ChristmasCheckAmount = array_sum($ChildCkeckArray);
        return [true,$ChristmasCheckAmount ];
    }
    public static function sortByNameFirstname($a, $b)
    {
        if ($a->name === $b->name) {
            return strtolower($a->firstname) <=> strtolower($b->firstname);
        }
        return strtolower($a->name) <=> strtolower($b->name);
    }

    public static function sortByService($a, $b)
    {
        if ($a->service === $b->service) {
            if ($a->name === $b->name) {
                return strtolower($a->firstname) <=> strtolower($b->firstname);
            }
            return strtolower($a->name) <=> strtolower($b->name);
        }
        return strtolower($a->service) <=> strtolower($b->service);
    }

    public function payroll()
    {
        return $this->salary + $this->getPrime();
    }
}
