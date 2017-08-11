<?php
$season=$_GET["season"];
if($season=="winter"){
	echo "<img src=\"637401133 (1).gif\">";
}
else
if($season=="autumn"){
	echo "<img src=\"619632481.gif\">";
}
else
if($season=="spring"){
	echo "<img src=\"29496284.gif\">";
}
else
if($season=="summer"){
	echo "<img src=\"gif_big_2436.gif\">";
}
else {echo "<img src=\"gus-animatsionnaya-kartinka-0031.gif\">";
}
echo "<br>";
$month=$_GET["month"];
switch ($month) {
	case 1:
		echo "Yanvar";
		break;
	case 2:
	echo "Fevral";
		break;
		case 3:
		echo "Mart";
		break;
		case 4:
		echo "Aprel";
		break;
		case 5:
		echo "May";
		break;
		case 6:
		echo "Iyn";
		break;
		case 7:
		echo "Iyl";
		break;
		case 8:
		echo "Avgust";
		break;
		case 9:
		echo "Sentyabr";
		break;
		case 10:
		echo "Oktyabr";
		break;
		case 11:
		echo "Noyabr";
		break;
		case 12:
		echo "Decabr";
		break;

	default:
		echo "Такого месяца НЕТ!";
		break;
}

?>