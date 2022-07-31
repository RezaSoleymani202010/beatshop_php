<?php
function create_user($name,$email,$password)
{
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
//$query=$conn->prepare ($conn,"INSERT INTO users (name,email,password) VALUES ('?','?','?')");
//mysqli_stmt_bind_param($query,$name,$email,$password);
//if(mysqli_stmt_execute($query)){
//    return true;
//}
//else
//return false;
//}


    $conn->query("INSERT INTO users (name,email,password) VALUES ('$name' ,'$email','$password')");
    return true;
}
function check_login($name,$password){
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
$result=$conn->query("SELECT * FROM users WHERE name ='$name' AND password = '$password' ");
if($result->fetchColumn() > 0){
    return true;
}
else{
    return false;
}
}
?>