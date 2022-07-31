<?php
session_start();
$_SESSION['id']=$_POST['id'];
echo "
<form method='post' action='../controller/update_beat.php' enctype='multipart/form-data'>
نام جدید
<input name='name' type='text'><br>
سازنده جدید
<input name='producer' type='text'><br> 
<input type='submit'>ذخیره
<input type='file' name='image'> عکس جدید
</form>

";

//<form action="../controller/update_beat.php" method="post" enctype="multipart/form-data">
//
//   <h3>ویرایش بیت</h3>
//  نام جدید  <input type="text" name="name"><br>
// سازنده ی جدید   <input type="text" name="producer"><br>
// عکس جدید   <input name="image" type="file">
//  ذخیره  <input name="id" type="submit" >upload
//</form>