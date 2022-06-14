<?php 
require_once 'employe.php';

$damirdine = new Employe('ALI SOILIHI','Damirdine','2019-04-12','stagiaire',0,'formation');
$said = new Employe('Mohamed','Said','2016-07-11','Tetch Lead',48000,'IT');
$malik = new Employe('Ziad','Malik','2021-03-06','Gestionnaire de paye',28750,'RH');
$amani = new Employe('Assoumani','Amani','2017-05-17','Ingénieur logiciel',42000,'IT');
$henry = new Employe('Jean','Henry','2019-04-12','alternant',14400,'formation');

//voir note pour solution plus generique

$employeList = array($damirdine,$said,$malik,$amani,$henry);
$nbrEmployes = count($employeList);

function getEmployeNbr($employeList){
    return count($employeList);
}
function getSortAlphaByName($employeList){
    sort($employeList);
    return $employeList;
}
function getSortAlphaByService($employeList){
    sort($employeList, );
    return $employeList;
}



var_dump(getSortAlphaByName($employeList));