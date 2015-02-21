<!DOCTYPE html>
<html>
<body>
<?php
$cars=array("Volvo","BMW","SAAB","Volkswagen");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
	echo $cars[$x];
	echo "<br>";
}
/*
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
echo "Peter is". $age['Peter']."years old.";
echo "<br>";
foreach($age as $x=>$x_value){
	echo "Key=" .$x.",Value=". $x_value;
	echo "<br>";
}
*/
echo "ok";
sort($cars);
$clength=count($cars);
for($x=0;$x<$clength;$x++)
{
	echo $cars[$x];
	echo "<br>";
}
$numbers=array(3,5,1,22,11);
rsort($numbers);
for($x=0;$x<count($numbers);$x++)
{
	echo $numbers[$x];
    echo "<br>";
}
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
ksort($age);
foreach($age as $x=>$x_value)
{
	echo "Key=". $x. ",Value=".$x_value;
	echo "<br>";
}
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
?>
</body>
</html>
