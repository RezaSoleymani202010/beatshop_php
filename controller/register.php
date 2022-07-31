<?php
session_start();
require_once "../model/user.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pswd'];
$result=create_user($name,$email,$password);
if ($result==true){
    $_SESSION['successMsg'] = "کاربر با موقیت ثبت نام شد";
    print_r($_SESSION['successMsg']);
    header("Location: ../view/login.php");
}