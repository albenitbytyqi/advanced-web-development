<?php


namespace App\Models;


class Studenti{
    private $id;
    private $fullName;
    private $birthdate;
    private $gender;

    public function __construct($id,$fullName,$birthdate,$gender){
        $this->id = $id;
        $this->fullName = $fullName;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    public function getId()
    {
        return $this->id;
    }




    public function getFullName()
    {
        return $this->fullName;
    }




    public function getBirthdate()
    {
        return $this->birthdate;
    }




    public function getGender()
    {
        return $this->gender;
    }





}
