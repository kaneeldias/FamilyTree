<?php

require_once "application/libraries/validators/Validators.php";
require_once "application/libraries/exceptions/InvalidInputException.php";
require_once "application/libraries/database/Database.php";

class PersonModel extends CI_Model{

    private $f_name;
    private $l_name;
    private $gender;

    public function newPerson($f_name, $l_name, $gender){

        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->gender = $gender;
        if(!$this->validate()) throw new InvalidInputException();
        $this->insert();

    }

    private function insert(){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO persons (first_name, last_name, gender) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $f_name, $l_name, $gender);

        $f_name = $this->f_name;
        $l_name = $this->l_name;
        $gender = $this->gender;

        $stmt->execute();
        $stmt->close();
        $conn->close();

    }

    private function validate(){
        if(Validators::isEmpty($this->f_name)) return false;
        if(Validators::isEmpty($this->l_name)) return false;
        if(Validators::isEmpty($this->gender)) return false;
        if(!Validators::isAlpha($this->f_name)) return false;
        if(!Validators::isAlpha($this->l_name)) return false;
        if(!Validators::validGender($this->gender)) return false;
        return true;
    }


}