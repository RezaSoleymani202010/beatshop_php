<?php
session_start();
require_once "../model/user.php";
$name = $_POST['name'];
$password = $_POST['pswd'];
$result = check_login($name, $password);
if ($result == true) {
    $_SESSION['successMsg'] = "خوش امدید".$name;
    $_SESSION['loginStatus']=true;
//    print_r($_SESSION['successMsg']);
    header("Location: ../view/index.php");
}
else{

    $_SESSION['errorMsg'] = "یافت نشد".$name;
//    print_r($_SESSION['successMsg']);
    header("Location: ../view/login.php");
}