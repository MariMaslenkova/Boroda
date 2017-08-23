<?php
require_once "core.php";

$action = $_POST["action"];

switch ($action) {
	case 'delete':
		$id = $_POST["id"];
		$pdo = createPDO();
		$db = $pdo->prepare("DELETE FROM users WHERE ID = ?");
		$db->bindParam(1, $id);
		$db->execute();
	break;
}

echo "OK";

?>