<?php 
require_once ('./classes/agency.php');
require_once ('./classes/employe.php');
require_once ('./classes/manager.php');
require_once ('./classes/family.php');

$damirdineChildList = 
[
    new Child('hary',15),
    new Child('madi',18),
    new Child('rami',7)
];
$damirdine = new Employe('ALI SOILIHI', 'Damirdine', '2019-04-12', 'stagiaire', 0, 'formation', $rouenAgency,$damirdineChildList);

$said = new Employe('Mohamed', 'Said', '2016-07-11', 'Tetch Lead', 48000, 'IT', $rouenAgency);
$malik = new Employe('Ziad', 'Malik', '2022-03-06', 'Gestionnaire de paye', 28750, 'RH', $rouenAgency);
$amani = new Employe('Assoumani', 'Amani', '2017-05-17', 'Ingénieur logiciel', 42000, 'IT', $rouenAgency);
$henry = new Employe('Jean', 'Henry', '2019-04-12', 'alternant', 14400, 'IT', $rouenAgency);
$brad = new Employe('Jean', 'Brad', '2019-04-12', 'Ingénieur logiciel', 14400, 'IT', $rouenAgency);

//Manager 

$mehdi = new Manager('Mehdi', 'Maizi', '2019-04-12', 'Manager IT', 72000, 'IT', $rouenAgency);


//voir note pour solution plus generique

//$employeList = array($damirdine,$said,$malik,$amani,$henry,$brad);

$nbrOfEmployes = Employe::getNbrOfEmployes();

function getSortAlphaByNameFirstname($employeList){
    usort($employeList,[Employe::class, "sortByNameFirstname"]);
    return $employeList;
}

function getSortAlphaByService($employeList){
    usort($employeList,[Employe::class, "sortByService"]);
    return $employeList;
}

function getPayroll($employeList){
    $payrollArray=[];
    foreach($employeList as $employe){
        array_push($payrollArray,$employe->payroll());
    }
    $payroll = array_sum($payrollArray);
    return $payroll;
}


var_dump($mehdi->getPrime());