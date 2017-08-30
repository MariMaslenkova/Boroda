<?php
define('HOST', 'localhost');
define('NAME', 'Manager');
define('PASSWORD', '123456789');
define('DBNAME', 'boroda');
function createPDO(){//в пдо описаны все функции которые умеют общаться с базой//
$pdo=new PDO ("mysql:host=".HOST."; dbname=".DBNAME, NAME, PASSWORD);//запомнить и не париться. точка склеивает строки

$pdo->query("SET NAMES 'UTF8'");

return $pdo;



}
?>