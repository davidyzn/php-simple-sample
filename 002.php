<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2>PHP 很有趣！</h2>";
echo "Hello world!<br>";
echo "我计划学习 PHP！<br>";
echo "这段话","由","多个","字符串","串接而成。";
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");
echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "<br>";
echo "My car is  a {$cars[0]}";
print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "<br>";
print "My car is a  $cars[0]";
echo "<br>";
$x=5985;
var_dump($x);
echo "<br>";
$x=-345;
var_dump($x);
echo "<br>";
$x=0x8c;
var_dump($x);
echo "<br>";
$x=047;
var_dump($x);
$x=10.365;
var_dump($x);
echo "<br>";
$x=2.4e3;
var_dump($x);
echo "<br>";
$x=8e-5;
var_dump($x);
$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
?>
</body>
</html>
