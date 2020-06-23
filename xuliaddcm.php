<?php
	echo'<meta charset="UTF-8">';
	$conn=mysql_connect("localhost","root","") or die(" khong the ket noi");
	mysql_select_db("blogcanhan",$conn);
	mysql_set_charset("utf8");
	$str="select * from chuyenmuc";
	$kq=mysql_query($str);
	if($_POST)
	{
	    $name1 = $_POST['name'];
	    $mota1 = $_POST['mota'];
	    while ( $row = mysql_fetch_array($kq)) {
	    	if ($name1 == $row['namectg'])
	    	{
	    		echo'Tên Chuyên mục đã tồn tại';
	    	}
	    	else 
	    		{
	    			echo'Thêm';
	    			break;
	    		}
	    }

	}

?>