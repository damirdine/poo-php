# POO PHP

Nous sommes dans un contexte d’une entreprise d’envergure nationale. Celle-ci souhaite se doter d’un système informatique pour gérer ses employés.

Pour utiliser l'application : 
- Avoir PHP d'installer.

- Sur un terminal : 
    - `git clone https://github.com/damirdine/poo-php.git`
    - `cd poo-php`
    - `php index.php`

#### Gestion des employés.
- [x] Écrire une classe **Employe**.
- [x] Écrire  une  méthode permettant de savoir depuis combien d’années l’employé est dans l’entreprise:
    - `$employe->getSeniority()`
- [x] Calculer prime de chaque employé : 
    - `$emplye->getPrime()`

#### Créer un reporting d’informations sur les employés de l’entreprise
- [x] Afficher le nombre d’employés de l’entreprise. :
    - `$nbrOfEmployes`
- [x] Afficher toutes les informations des employés par ordre alphabétique sur le nom et le prénom :
    - `getSortAlphaByNameFirstname($employeList)`
- [x] Afficher toutes les informations des employés par ordre alphabétique de service, nom et prénom. 
    - `getSortAlphaByService($employeList)`
- [x] Afficher le montant total du coût que représentent tous les salariés (masse salariale) calculé à partir des salaires et des primes.
    - `getPayroll($employeList)`

#### Gérer les agences de l'entreprise.
- [x] Écrire une nouvelle classe Agence qui contient tous ces éléments
- [x] Modifier la classe Employé afin que celui-ci soit rattaché à une agence :
    - `$emplyoe->getAgency()`

#### Gérer restauration par agence.
- [x] Modifier la classe Agence pour gérer les modes de restauration.
- [x] Afficher dans la console chaque mode de restauration de chaque employé selon l’agence dans laquelle il se trouve:
    - `$employe->getAgency()->haveRestaurant()`

#### Gestion des chèques Vacances des employés par rapport à leurs agences.
- [x] Savoir  si  celui-ci  peut  disposer  de  chèques vacances ou non.
    - `$employe->getHolidayCheck()`

#### Gestion des chèques Noël des employés par rapport à leurs agences.
- [x] Afficher dans la console si l’employé a le droit d’avoir des chèques  Noël  (Oui/Non).
    - `$employe->getChristmasCheck()`
- [x] Et si la réponse est Oui, afficher dans la console combien  de chèques de chaque montant sera distribué à l’employé.
- [x] 

#### Créer la classe Directeur et gérer le calcul de la prime et le versement pour celui-ci.
- [x] Créer la classe Directeur qui et un employé comme un autre qui bénéficie d’un statut particulier. 
- [x] Gérer le calcul de la prime et le versement pour celui-ci. 
    - `$manager->getChristmasCheck()`
 