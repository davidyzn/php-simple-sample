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
?>
</body>
</html>
