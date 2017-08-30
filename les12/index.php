<?php
require_once "core.php"; //подключает файл коре пхп//
$login=$_POST["login"];
$password=$_POST["pass"]; 

$pdo=createPDO(); //типа вошли в пхпмай однин//
$db=$pdo->prepare("SELECT*FROM users WHERE login=? and password=?"); //препаре подготовить//
$db->bindParam(1,$login); //первое номер столбца, второе то на что меняем//
$db->bindParam(2,$password);
$db->execute();
$users=$db->fetchAll();

if (count($users)==0) {
	echo "Неверный логин или пароль";
}
else {
	var_dump($users[0]); //не эхо потомучто это не простая строка. имеет данные
	echo "Есть такой";
}
?>