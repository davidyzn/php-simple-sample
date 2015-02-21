<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<input type="submit">
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname2">
<input type="submit">

<?php
$name=$_REQUEST['fname'];
echo $name;
$name=$_POST['fname2'];
echo $name;
?>
<a href="test_get.php?subject=PHP&web=W3school.com.cn">测试 $GET</a>
<?php
echo "Study".$_GET['subject']."at".$_GET['web'];
?>
</body>
</html>
