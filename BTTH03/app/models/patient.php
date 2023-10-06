<?php

class Patient{
    private $id;
    private $patientName;
    private $dateExamination;
    private $symptom;
    private $doctorID;

    public function __construct( $id, $patientName, $dateExamination, $symptom, $doctorID){
        $this-> id  = $id;
        $this->patientName = $patientName;
        $this->dateExamination = $dateExamination;
        $this->symptom = $symptom;
        $this->doctorID = $doctorID;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getPatientName(){
        return $this->patientName;
    }
    public function setPatientName($patientName){
        $this->id = $patientName;
        return $this;
    }
    public function getDateExamination(){
        return $this->dateExamination;
    }
    public function setDateExamination($dateExamination){
        $this->id = $dateExamination;
        return $this;
    }
    public function getSymptom(){
        return $this->symptom;
    }
    public function setSymptom($symptom){
        $this->id = $symptom;
        return $this;
    }
    public function getDoctorID(){
        return $this->doctorID;
    }
    public function setDoctorID($doctorID){
        $this->id = $doctorID;
        return $this;
    }
    
}