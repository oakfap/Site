<?php
$host = "vrsim4learning.com";
$username = "permpany";
$password = "jett7142";
$objConnect = mysql_connect($host,$username,$password);

if($objConnect)
{
	echo "MySQL Connected";
}
else
{
	echo "MySQL Connect Failed : Error : ".mysql_error();
}



 ?>
