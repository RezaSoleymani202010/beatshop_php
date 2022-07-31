<?php
session_start();
require_once "../model/beat.php";

if (isset($_FILES['image'])) {
    if (file_exists($_FILES['image']['tmp_name'])) {
        $path = "../images/";
        $path .= $_FILES['image']['name'];
//        var_dump($_FILES['image']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            {
                $name = $_POST['name'];
                $producer = $_POST['producer'];
                $image_path = $path;
                $result=creat_beat($name, $producer, $image_path);
                if ($result){
                    $_SESSION['successMsg'] = "بیت جدید با موقیت ثبت شد";
                    header("Location: ../view/index.php");

                }

            }
        }
    }
}