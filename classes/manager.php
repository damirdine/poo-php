<?php
class Manager extends Employe
{
    public function getPrime()
    {
        $primeSalaryPerCent = 0.07;
        $primeSalaryPerYearOfSeniority = 0.03;
        $datePrime = "30-11";
        $actualDate = (new DateTime())->format('d-m');;
        $prime = parent::getSalary() * ($primeSalaryPerCent + $primeSalaryPerYearOfSeniority * $this->getSeniority());
        $prime = round($prime, 2);
        if ($actualDate == $datePrime) {
            return $prime;
        }
        return $prime;
    }
}

?>