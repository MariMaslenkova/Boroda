<?php
$pets=array("Cat","Dog","Elc","Cow");
echo "Исходный массив:";
var_dump($pets);
$pets[1]="Popugay";
echo "Измененный массив:";
var_dump($pets);
array_push($pets, "Monkey");
echo "Добавление элемента в массив:";
var_dump($pets);

$i=0;
while ($i<count($pets)) {
	echo "<b>".$pets[$i]."</b><br>";
$i++;
}
$i=0;
do{ echo "<i>".$pets[$i]."</i><br>"; $i++; }
while ($i<count($pets)); 
	
for($i=0; $i<count($pets) ; $i++) { 
	echo "<i><b>".$pets[$i]."</b><br></i>";
	}


foreach ($pets as $pet) {
		echo "<b>".$pet."</b><br>";}


unset($pets[2]);
echo "Удаление элемента из массива:";
var_dump($pets);





$n=5;
$r=1;
for ($i=0; $i<$n; $i++) { 
$r=$r*2;
}
echo $r;





?>