<?php

class Person {

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