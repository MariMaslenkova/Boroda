<?php
require_once "core.php";

$pdo = createPDO();

$db=$pdo->prepare("INSERT INTO cafe (Name, Sex, Bdate, Fdish, Sale) VALUES(?,?,?,?,?)");

$Name=$_POST["Name"];
$db->bindParam(1,$Name); 
$Sex=$_POST["Sex"];
$db->bindParam(2,$Sex);
$Bdate=$_POST["Bdate"];

$Bdate = date("Y-m-d", strtotime($Bdate));

$db->bindParam(3,$Bdate);
$Fdish=$_POST["Fdish"];
$db->bindParam(4,$Fdish);
$Sale=$_POST["Sale"];
$db->bindParam(5,$Sale);
$db->execute();// отдает запрос базе на выполнение

echo "success";
?>