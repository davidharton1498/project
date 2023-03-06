<?php
session_start();
error_reporting(0);
include_once './student.class.php';

// initializing variables
$user = $_SESSION['user'];
$type = $_SESSION['type'];
$date = date("Y-m-d h:i A");

// connect to the database

$stud=new student();
// REGISTER USER
if($_POST['action'] == "register-student") {
    $userid = htmlspecialchars($_POST["userid"]);
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirm_pass = htmlspecialchars($_POST["confirm-password"]);
    if($stud->isStudentId($userid)){
        echo 'Student has already registered';
    }elseif($confirm_pass !== $password){
        echo 'Password not match!';
    }else{
        $stud->setStudent($userid, $fname, $lname, $email, $password, $date);
    }
}
?>