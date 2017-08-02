<DOCTYPE html>
<head>
<script src="main.js"></script>
<link href="styles.css" rel="stylesheet">
<title>Бородатый хакер</title>
</head>
<body>
<div class="test">Hello</div>
<p>World</p>
<span>Boy</span>
<span>Маша</span>
<br>
<p id="d888">Продаю автозапчасти</p>
<br>
<img src="http://goodimg.ru/img/tsvetochek-risunok1.jpg" width="300" height="300">
<br>
<img src="img\nnn.jpg">
<br>
<a target="_blank" href="http:\\www.migle.by">
<button>Продаю картошку</button>
</a>
<br>
<button onclick="test()">ТЫК-ТЫК</button>
<br>
<input onkeyup="test()" type="text">
<input id="vfdcbczj" type="email">
<input type="number">
<br>
<input type="date">
<br>
<input type="checkbox">
<br>
<?php
function bel2USD($sum){
	$result=$sum/1.9;
	return $result;
}
$result=bel2USD(20);
$result=round($result,5);
echo "<h1>$result</h1>";
?>
</body>
