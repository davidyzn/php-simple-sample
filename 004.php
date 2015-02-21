<!DOCTYPE html>
<html>
<body>
<?php
$favcolor="red";
switch($favcolor){
	case "red":
	echo "Your favorite color is red!";
	break;
	case "blue":
	echo "Your favorite color is blue!";
	break;
	case "green":
	echo "Your favorite color is green!";
	break;
	default:
	echo "Your favorite color is neither red,blue,or green!";

}
$x=1;
while($x<=5)
{
	echo "数字是:$x<br>";
	$x++;
}
$x=6;
do{
	echo "数字是：$x<br>";
	$x++;
}while($x<=5);
for($x=0;$x<=10;$x++){
	echo "数字是:$x<br>";
}
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
	echo "$value<br>";
}
function familyName($fname){
	echo "<br>$fname Yang.<br>";
}
familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");
function setHeight($minheight=50){
	echo "高度是：$minheight<br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
function sum($x,$y){
	$z=$x+$y;
	return $z;
}
echo "5+10=".sum(5,10)."<br>";
echo "7+13=".sum(7.13)."<br>";
echo "2+4=".sum(2,4);
$cars=array("Volvo","BMW","Volkswagen","SAAB");
echo count($cars);
?>
</body>
</html>
