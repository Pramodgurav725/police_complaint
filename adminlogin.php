<?php
$name=$_POST['pramod'];
$pass=$_POST['pramod'];
$name=$_POST['abhay'];
$pass=$_POST['abhay'];

if($name==$pass)
{
	echo "<script>window.location.assign('afteradminlogin.php');</script>";
}
else
{
	readfile('adminlogin2.html');
}


?>