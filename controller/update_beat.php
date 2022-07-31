<?php
require_once "../model/beat.php";
session_start();
$id=intval($_SESSION['id']);
$result=update_beat($id,$_POST['name'],$_POST['producer'],$_POST['image_path']);

    if ($result){
        $_SESSION['successMsg'] = "بیت با موفقیت اپدیت شد";
        header("Location: ../view/beats.php");
}
