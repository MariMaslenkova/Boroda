function getSeosonImage(){
var seoson=document.getElementById ("seoson").value;
var image=document.getElementById ("image");
switch (seoson){
case "winter": image.src="http://advancedtreecare.ca/images/winter_treecare_newmarket_ontario.png";
break;
case "vesna": image.src="https://files5.adme.ru/files/news/part_148/1481665/28991465-Depositphotos_8831337_xl-2015-1489735474-900-a9fabe9cad-1489771005.jpg";
break;
case "summer": image.src="http://www.benethillmonastery.org/wp-content/uploads/2017/07/Summer.jpg";
break;
case "autumn": image.src="http://az616578.vo.msecnd.net/files/2016/09/16/636095925276772401-952315342_orange-and-red-autumn-forest.jpg";
break;
default: image.src="http://remarok.net/dems/big/Remarok.net11568.jpg";
}}