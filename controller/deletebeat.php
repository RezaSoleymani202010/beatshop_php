<?php
require_once "../model/beat.php";
session_start();
$id=intval($_POST['id']);
$result=delete_beat($id);

    if ($result){
        $_SESSION['successMsg'] = "بیت با موفقیت حذف شد";
        header("Location: ../view/beats.php");


}
