<?php


class member {

    public string $firstname;
    public string $lastname;
    public int $phone;
    public string $address;

    public function __construct($firstname, $lastname, $phone, $address){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone; 
        $this->address = $address;    
        
    }

    
};

