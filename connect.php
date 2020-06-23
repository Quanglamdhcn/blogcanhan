<?php
echo'<meta charset="UTF-8">';

 
$conn=mysql_connect("localhost","root","123456") or die(" khong the ket noi");
mysql_select_db("thanhtrungcit",$conn);
mysql_set_charset("utf8");



?>
