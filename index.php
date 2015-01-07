<?php
class Athlete {
    public $firstName = "Lebron";
    public $lastName = "James";
    public $weight = "250";
    public $age = "30";
    public $gender = "male";
    
    function getName(){
    return"{$this->firstName}" . 
    "{$this->lastName}";
    }
}
{
    
}