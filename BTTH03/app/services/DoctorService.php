<?php

require_once APP_ROOT.'./app/models/doctor.php';

class DoctorService{
    public function getAllDoctor()
    {
        
        try{
            //Buoc 1: Ket noi Database
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root','');
            // Bước 2: Truy vấn dữ liệu từ bảng employees (điều này phụ thuộc vào tên bảng thực tế của bạn)
        $sql = "SELECT * FROM doctor";
        $stmt = $conn->query($sql);

        $doctors = [];
        while ($row = $stmt->fetch()) {
            $doctor = new Doctor($row['id'], $row['doctorName'], $row['specialist']);
            $doctors[] = $doctor;
        }
      
        return $doctors; 
        
       
        }catch(PDOException $e){
            // echo $e->getMessage();
            return $doctors = [];
        }
    }
}