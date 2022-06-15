<?php
class Agency {
    private $name;
    private $address;
    private $postalCode;
    private $city;

    public function __construct($name,$address,$postalCode,$city)
    {
        $this->name = $name;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }

};

$rouenAgency = new Agency('afpa','2 rue du jean','76300','Rouen');