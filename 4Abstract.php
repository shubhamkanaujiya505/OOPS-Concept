<?php
// abtract means adhura somethig is missing
// function declear successfully but not implement

//in abstract class we canot make a directly object 
// but we can inhertit base class and then we make object  drived classs and access the abstract data 
// class abc{
//  public abstract function xyz(); // this is abstract function declear successfully but not implement
// }



// create  BaseEmployee because same code repeated
abstract class BaseEmployee{
    protected $firstname;
    protected $lastname;
    public function getFullName(){
        return $this->firstname." ".$this->lastname ;
    }

    public abstract function getMonthlySalary(); //beacuse this function is implement in all drived classes

    public function __construct($f, $l){
        $this->firstname=$f;
        $this->lastname=$l;
    }
}
class FulltimeEmployee extends BaseEmployee{ // inherit baseEmploye class because same code repeat
    protected $annualSalary;
    public function getMonthlySalary(){
        return $this->annualSalary/12;
    }
}
class ContractEmployee extends BaseEmployee{ // inherit baseEmploye class because same code repeat
    protected $hourlyRate;
    protected $totalHours;
    
    public function getMonthlySalary(){
        return $this->hourlyRate * $this->totalHours ;
    } 
}
$fulltime = new FulltimeEmployee('Aman','Bansal');
$contract = new ContractEmployee('prashant','Mathur');
echo $fulltime->getMonthlySalary();
echo $contract->getFullName();

// $baseemp = new BaseEmployee("base","employee");
// echo $baseemp->getFullName();

?>
