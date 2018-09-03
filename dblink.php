<?php
$host = "localhost";
$username = "permpany";
$password = "jett7142";
$objConnect = mysql_connect($host,$username,$password);
$objDB = mysql_select_db("permpany_asiaDaimond");

if($objConnect && $objDB) {
	echo "done "; //ใส่ข้อความแจ้งเตือนสถานะการเชื่อมต่อสำเร็จ
}
else{
	echo "MySQL Connect Failed : Error : ".mysql_error();
}
?>
