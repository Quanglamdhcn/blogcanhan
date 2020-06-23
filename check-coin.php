<?php
    session_start();
    require_once("connect.php");


    $username = trim($_POST['user']);
    $coin = trim($_POST['coin']);
	$query = mysql_query("select * from account where username = '".$username."' ");

	$row=mysql_fetch_array($query);
	$coinafter= $row['coin'] - $coin;
	
	$query = mysql_query("update account set coin = ".$coinafter." where username = '".$username."' ");
	echo '<center>Đã get Link...Hệ thống đã trừ '.$coin.' Xu từ tài khoản của bạn <br> Đang tự động tải xuống</center>';

?>