<?php
include_once '../dbConnection.php';
$dbConnObj= new dbConnection();

class Client{

    public function  add($first_name,$last_name,$email,$dob,$gender,$country,$img_path,$confirmPassword){
            $confirmPassword = sha1($confirmPassword);
            $con=$GLOBALS['con'];
            $sql="INSERT INTO clients(first_name,last_name,email,dob,gender,country,img_path,password) VALUES('$first_name','$last_name','$email','$dob','$gender','$country','$img_path','$confirmPassword')";
            $con->query($sql) or die($con->error);
    }

    public function  loginValidation($uname, $password){
        
        $con = $GLOBALS['con'];
        $sql = "SELECT * FROM clients WHERE email='$uname' AND password='$password'";
        $results = $con->query($sql)or die($con->error);
        return $results; 
    }
}