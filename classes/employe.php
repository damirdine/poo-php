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
    private $childList;
    private static $nbr;

    public function __construct($name, $firstname, $dateHiring, $fonction, $salary, $service, $agency,$child)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->dateHiring = $dateHiring;
        $this->fonction = $fonction;
        $this->salary = $salary;
        $this->service = $service;
        $this->agency = $agency;
        $this->childsList = array_push($this->childsList,$child);
        Employe::$nbr++;
    }

    public static function getNbrOfEmployes()
    {
        return Employe::$nbr;
    }
    public function getChildsList()
    {
        return $this->childList;
    }


    public function getSeniority()
    {
        $dateHiring = new DateTime($this->dateHiring);
        $now = new DateTime();
        $anciennete = ($now->diff($dateHiring))->format('%y');
        return $anciennete;
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
        $minYearForHV = 1;
        if ($this->getSeniority() <= $minYearForHV) {
            return false;
        }
        return true;
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

$damirdine = new Employe('ALI SOILIHI', 'Damirdine', '2019-04-12', 'stagiaire', 0, 'formation', $rouenAgency,$damirdineFamily);
$said = new Employe('Mohamed', 'Said', '2016-07-11', 'Tetch Lead', 48000, 'IT', $rouenAgency,null);
$malik = new Employe('Ziad', 'Malik', '2022-03-06', 'Gestionnaire de paye', 28750, 'RH', $rouenAgency,null);
$amani = new Employe('Assoumani', 'Amani', '2017-05-17', 'Ingénieur logiciel', 42000, 'IT', $rouenAgency,null);
$henry = new Employe('Jean', 'Henry', '2019-04-12', 'alternant', 14400, 'IT', $rouenAgency,null);
$brad = new Employe('Jean', 'Brad', '2019-04-12', 'Ingénieur logiciel', 14400, 'IT', $rouenAgency,null);
