<!DOCTYPE html>
<html>
<body>
<h1> my first php page </h1>
<?php
echo "Hello World!";
$x=5;
$y=6;
$z=$x+$y;
echo $z;
$txt="Hello World!";
$x=5;
$y=10.5;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
function myTest()
{
	$y=10;
	echo "<p>中函数内部测试变量:</p>";
	echo "变量x是:$x";
	echo "<br>";
	echo "变量y是：$y";

}
myTest();
echo "<p>在函数之外测量变量</p>";
echo "变量x是：$x";
echo "<br>";
echo "变量y是：$y";
function myTest2()
{
	global $x,$y;
	$y=$x+$y;
}
myTest2();
echo $y;
echo "<br>";
function myTest3()
{
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
myTest3();
echo $y;

?>
</body>
</html>
