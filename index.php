<?php

class Salary {

    //Variabili
    private $monthly;
    private $thirteenthMonthly;
    private $fourteenthMonthly;

    public function __construct($monthly, $thirteenthMonthly, $fourteenthMonthly) {

        $this->setMonthly($monthly);
        $this->setThirteenthMonthly($thirteenthMonthly);
        $this->setFourteenthMonthly($fourteenthMonthly);

    }

    public function getMonthly() {

        return $this -> monthly;
    }
    public function setMonthly($monthly) {

        $this -> monthly = $monthly;
    }
    public function getThirteenthMonthly() {

        return $this -> thirteenthMonthly;
    }
    
    public function setThirteenthMonthly($thirteenthMonthly) {

        $this -> thirteenthMonthly = $thirteenthMonthly;
    }

    public function getFourteenthMonthly() {

        return $this -> fourteenthMonthly;
    }
    public function setFourteenthMonthly($fourteenthMonthly) {

        $this -> fourteenthMonthly = $fourteenthMonthly;
    }

    public function getAnnualSalary() {

        $monthly = $this->getMonthly();
        return $monthly * 12
            + ($this->getThirteenthMonthly() ? $monthly : 0 ) 
            + ($this->getFourteenthMonthly() ? $monthly : 0 );
        
    }

    public function getHtml(){

        $AnnualSalary =
            "Salario Mensile: " . $this->getMonthly() . "<br>"
            . "Tredicesima: " . ($this->thirteenthMonthly ? "✅" : "❌" ) . "<br>"
            . "Quattordicesima: " . ($this->fourteenthMonthly ? "✅" : "❌" ) . "<br>"
            . "Salario Annuale: " . $this->getAnnualSalary() . "<br>";
        return $AnnualSalary;
            
    }

}

class Person {

    //Variabili
    private $name;
    private $surname;
    private $dateOfBirth;
    private $fiscalCode;

    public function __construct( $name, $surname, $dateOfBirth, $fiscalCode) {

        $this -> setName($name);
        $this -> setSurname($surname);
        $this -> setDateOfBirth($dateOfBirth);
        $this -> setFiscalCode($fiscalCode);

    }

    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }
    public function getSurname() {

        return $this -> surname;
    }
    public function setSurname($surname) {

        $this -> surname = $surname;
    }

    public function getDateOfBirth() {

        return $this -> dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth) {

        $this -> dateOfBirth = $dateOfBirth;
    }

    public function getFiscalCode() {

        return $this -> fiscalCode;
    }
    public function setFiscalCode($fiscalCode) {

        $this -> fiscalCode = $fiscalCode;
    }

    public function getHtml() {

        return 

               $this -> getName() . "<br>"
             . $this -> getSurname() . "<br>"
             . "Data di nascita: " . $this -> getDateOfBirth() . "<br>"
             . "Codice fiscale: " . $this -> getFiscalCode() . "<br>";

    }
}

class Employee extends Person {

    //Variabili
    private Salary $salary;
    private $hireDate;

    public function __construct($name, $surname, $dateOfBirth, $fiscalCode, Salary $salary, $hireDate) {

        parent::__construct($name, $surname, $dateOfBirth, $fiscalCode);
        $this -> setSalary($salary);
        $this -> setHireDate($hireDate);

    }

    public function getSalary() {

        return $this -> salary;

    }

    public function setSalary($salary) {

        $this -> salary = $salary;

    }

    public function getHireDate() {

        return $this -> hireDate;

    }
    public function setHireDate($hireDate) {

        $this -> hireDate = $hireDate;

    }

    public function getAnnualSalary() {

        return $this->getSalary()->getAnnualSalary();

    }

    public function getHtml() {

        return 
               parent :: getHtml()
            . "Data di assunzione: " . $this -> getHireDate() . "<br>"
             . $this -> getSalary() -> getHtml();
           
    }
}


class Boss extends Person {

    //Variabili
    private $dividend;
    private $bonus;

    public function __construct($name, $surname, $dateOfBirth, $fiscalCode, $dividend, $bonus) {

        parent::__construct($name, $surname, $dateOfBirth, $fiscalCode);
        $this -> setDividend($dividend);
        $this -> setBonus($bonus);

    }

    public function getDividend() {

        return $this -> dividend;

    }

    public function setDividend($dividend) {

        $this -> dividend = $dividend;

    }

    public function getBonus() {

        return $this -> bonus;

    }
    public function setBonus($bonus) {

        $this -> bonus = $bonus;

    }

    public function getAnnualSalary(){

        return $this->getDividend() * 12
            + $this->getBonus();
            
    }

    public function getHtml() {

        return
            parent::getHtml()
            . "Dividendo: " . $this->getDividend() . "<br>"
            . "Bonus: " . $this->getBonus() . "<br>"
            . "Salario Annuale: " . $this->getAnnualSalary();

    }
}

$salary1 = new Salary(5837, true, true);
echo $salary1->getHtml();

echo "___________________ <br>";

$employee1 = new Employee("Giorgia", "Meloni", "1977-01-15", "MLNGRG77A55H501C", $salary1, "1997-03-21");
echo $employee1 -> getHtml();

echo "___________________ <br>";

$boss1 = new Boss("Gianna", "Nannini", "195-06-14", "NNNGNN54H54I726A", 7675, 15000);
echo $boss1->getHtml();

echo " <br><br> esempio di Person: </br>";

$person1 = new Person("Mario", "Rossi", "25-01-1995", "MRARSS95A25H501P");
echo $person1->getHtml();

