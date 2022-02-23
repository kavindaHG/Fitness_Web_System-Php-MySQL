<?php
include '../Models/clients.php';  //iclude customer model
$clientObj=new Client();                  //create custemr object

$status=$_REQUEST["action"];
switch ($status){
    
    case "add":

        $isAdded=$clientObj->add($_POST["fName"],$_POST["lName"],$_POST["email"],$_POST["dob"],$_POST["gender"],$_POST["contry"],$_POST["img"],$_POST["confirmPassword"]);
        $msg= base64_encode("User has been successfuly added");
        header("Location:../SignUp.php?type=success&msg=$msg");

        break;

    case "loging":
        $uname=$_POST["email"];     
        $password=$_POST["Password"]; 
        $password= sha1($password);   
        
        $result=$clientObj->loginValidation($uname, $password);
                                                                
        $user_details=$result->fetch_assoc();
        
        session_start();
        $_SESSION['user']=$user_details;
        
            if($result->num_rows==1){        
                $msg= base64_encode("Login Successfull");           //check whether maching recode exist 
                header("Location:../home.php?type=success&msg=$msg"); //bring to the dashboard
            }
            else {                             //when no maching record redirect to loging page
                $msg= base64_encode("User name or password does not match");
                header("Location:../Login.php?type=error&msg=$msg");

                
            }
        break;

    case "logout":

            session_start();
            unset($_SESSION['user']);
            header("Location:../login.php");

            break;
    }