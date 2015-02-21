<!DOCTYPE html>
<html>
<body>
<?php
class Car
{
	var $color;
	function Car($color="green"){
		$this->color=$color;
	}
	function what_color(){
		return $this->color;
	}
}
function print_vars($obj){
	foreach (get_object_vars($obj) as $prop => $val) {
		echo "\t$prop=$val\n";
	}
}
$herbie=new Car("white");
echo "\herbie:Properties\n";
print_vars($herbie);
echo strlen("Hello world!");
echo strpos("Hello world!","world");
define("Greeting","Welcome to W3School.com.cn!");
echo Greeting;
$a="Hello";
$b=$a."world!";
echo $b;
echo "<br>";
$x="Hello";
$x .=" world!";
echo $x;

$x=10;
echo ++$x;
echo "<br>";
$y=10;
echo $y++;
echo "<br>";
$z=5;
echo --$z;
echo "<br>";
$i=5;
echo $i--;
echo "<br>";
$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
$z=$x+$y;
var_dump($z);
echo "<br>";
var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
var_dump($x<>$y);
echo "<br>";
var_dump($x !==$y);

?>
</body>
</html>
