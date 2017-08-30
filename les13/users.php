<?php
require_once "core.php";

$pdo = createPDO();

$db=$pdo->prepare("INSERT INTO clients (email, city, bdate, password) VALUES(?,?,?,?)");

$email=$_POST["email"];
$db->bindParam(1,$email); 
$city=$_POST["city"];
$db->bindParam(2,$city);
$date=$_POST["date"];

$date = date("Y-m-d", strtotime($date));

$db->bindParam(3,$date);
$password=$_POST["password"];
$db->bindParam(4,$password);
$db->execute();// отдает запрос базе на выполнение


?>