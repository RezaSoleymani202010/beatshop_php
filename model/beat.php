<?php

//$result=$conn->query("create table beats( id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR (50) , producer VARCHAR (50) NOT NULL , image_path VARCHAR (50)  )");

function get_beat()
{
//    session_start();
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
    $query = $conn->prepare("select * from beats");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    $_SESSION['beats'] = $result;


}

function creat_beat($name, $producer, $image_path)
{
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
    $query = $conn->prepare("INSERT INTO beats (name,producer,image_path) VALUES ( ?,?,?)");
    $query->bindParam(1, $name);
    $query->bindParam(2, $producer);
    $query->bindParam(3, $image_path);
    $result = $query->execute();
    return 1;

}

function delete_beat($id)
{
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
    $query = $conn->prepare("DELETE  FROM beats WHERE id= ? ");
    $query->bindParam(1, $id);
    $result = $query->execute();
    return 1;


}

function update_beat($id, $name, $producer, $image_path)
{
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
    $query = $conn->prepare("UPDATE beats SET `name` = ?, `producer` = ? , `image_path` =?  WHERE `id` = ? ");
    $query->bindParam(1, $name);
    $query->bindParam(2, $producer);
    $query->bindParam(3, $image_path);
    $query->bindParam(4, $id);
    $result = $query->execute();
    return 1;


}
function search_beat($search){
    $conn = new PDO("mysql:host=localhost;dbname=beata", "root", "");
$query= $conn->prepare("SELECT * FROM beats WHERE name= ? OR producer= ? ");
//$query->bindParam("ss",$search, $search);
    $query->bindParam(1,$search);
    $query->bindParam(2,$search);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
  return $result;
}