<?php
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
/*
if(mysql_query("CREATE DATABASE mydb",$con))
{
	echo "Database created";
}
else
{
	echo "Error creating database:".mysql_error();
}
*/
mysql_select_db("mydb",$con);
$sql="CREATE TABLE Persons(
	FirstName varchar(15),
	LastName varchar(15),
	Age int)";
mysql_query($sql,$con);
mysql_close($con);
?>