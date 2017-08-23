<!DOCTYPE html>
<html>
	<head>
		<title>Users</title>
		<link rel="stylesheet" href="styles.css">
		<script src="main.js"></script>
		<script src="jquery-3.2.1.min.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			require_once "core.php"; //подключение других файлов пхп//
			require_once "users.php";
			echo NAME; //если переменная обьявлена через дефайн то знак доллара не ставиться//

$pdo=createPDO(); //обьект для подключения к базе данных
$db=$pdo->prepare('SELECT*FROM users');
$db->execute();
$users=$db->fetchAll();
foreach ($users as $user) {
	$man=new User();
	$man->id=$user["ID"];
	$man->Name=$user["Name"];
	$man->Login=$user["Login"];
	$man->Password=$user["Password"];
	$man->Bdate=$user["Bdate"];
	$man->Phone=$user["Phone"];
	$man->Sex=$user["Sex"];
	$man->draw();
}



			//$fakeuser=new User();
			//$fakeuser-> id=1;
			//$fakeuser-> Name="Tirion";
			//$fakeuser-> Login="Lanister111";
			//$fakeuser-> Password="5252";
			//$fakeuser-> Bdate="01.01.01";
			//$fakeuser-> Phone="+985124587965";
			//$fakeuser-> Sex=1;
			//$fakeuser->draw(); //функция для вывода пользователя на экран
			?>
	</body>
</html>


