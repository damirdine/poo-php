<?php 
require_once ('./classes/agency.php');
require_once ('./classes/employe.php');

//voir note pour solution plus generique

$employeList = array($damirdine,$said,$malik,$amani,$henry,$brad);

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

var_dump($malik->getHolidayVouchers());