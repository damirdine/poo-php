<?php
class Agency {
    private $name;
    private $address;
    private $postalCode;
    private $city;
    private $restaurant;

    public function __construct($name,$address,$postalCode,$city,$restaurant)
    {
        $this->name = $name;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->restaurant = $restaurant;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAddress()
    {
        $address = $this->address . ', ' . $this->postalCode .', ' .$this->city;
        return $address;
    }
    public function haveRestaurant()
    {
        if($this->restaurant!==true){
            return false;
        }
        return true;
    }

};

$rouenAgency = new Agency('afpa Rouen','2 rue du jean','76300','Rouen',true);