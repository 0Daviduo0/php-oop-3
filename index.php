<?php

class Salary {

    //Variabili
    private $monthly;
    private $thirteenthMonthly;
    private $fourteenthMonthly;

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

    public function getAnnualSalaryHtml(){

        $AnnualSalary = $this->monthly * 12
            + ($this->thirteenthMonthly ? 1 : 0)
            + ($this->fourteenthMonthly ? 1 : 0);
        return $AnnualSalary;
            
    }


}

class Person {

    //Variabili
    private $id;
    private $name;
    private $surname;
    private $dateOfBirth;
    private $fiscalCode;

    public function __construct($id, $name, $surname, $dateOfBirth, $fiscalCode) {

        $this -> setId($id);
        $this -> setName($name);
        $this -> setSurname($surname);
        $this -> setDateOfBirth($dateOfBirth);
        $this -> setFiscalCode($fiscalCode);

    }

    public function getId() {

        return $this -> id;
    }
    public function setId($id) {

        $this -> id = $id;
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
               $this -> getId() . "<br>"
             . $this -> getName() . "<br>"
             . $this -> getSurname() . "<br>"
             . $this -> getDateOfBirth() . "<br>"
             . $this -> getFiscalCode() . "<br>";
    }
}

class Employee extends Person {

    //Variabili
    private array $salary;
    private $hireDate;

    public function __construct($id, $name, $surname, $dateOfBirth, $fiscalCode, array $salary, $hireDate) {

        parent::__construct($id, $name, $surname, $dateOfBirth, $fiscalCode);
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

        return $this -> salary;

    }
    public function setHireDate($hireDate) {

        $this -> hireDate = $hireDate;

    }

    public function getHtml() {

        return 
               parent :: getHtml() . "<br>"
             . $this -> getSalary() . "<br>"
             . $this -> getHireDate() . "<br>";
    }
}


class Boss extends Person {

    //Variabili
    private $dividend;
    private $bonus;

    public function __construct($id, $name, $surname, $dateOfBirth, $fiscalCode, $dividend, $bonus) {

        parent::__construct($id, $name, $surname, $dateOfBirth, $fiscalCode);
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

    public function getHtml() {

        return 
               parent :: getHtml() . "<br>"
             . $this -> getDividend() . "<br>"
             . $this -> getBonus() . "<br>";
    }
}