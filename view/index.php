<?php
session_start();
if (!isset($_SESSION['loginStatus'])) {
    $_SESSION['errorMsg'] = "error not login";
    header("Location: login.php");
}


if (isset($_SESSION['successMsg'])) {
    echo " <div class='alert alert-success' >" . $_SESSION['successMsg'] . "</div>";
    unset($_SESSION['successMsg']);
}


if (isset($_SESSION['errorMsg'])) {
    echo " <div class='alert alert-warning' >" . $_SESSION['errorMsg'] . "</div>";
    unset($_SESSION['errorMsg']);
}

?>
<h3>مشاهده لیست کاربران
</h3>
<a href="users.php">users_list</a>

<h3>لیست بیت ها
</h3>
<a href="beats.php">beats_list</a>
<h3>ایجاد بیت جدید
</h3>
<a href="create_beat.php">creat_beat</a>

