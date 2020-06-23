<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">

</head>


<?php
    require_once("../connect.php");


    $username = trim($_POST['user']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $repassword = trim($_POST['re-pass']);
    $kq_user= mysql_query("select * from account where username='".$username."' ");
    $kq_mail= mysql_query("select * from account where email='".$email."' ");
    $partten = "/^[A-Za-z0-9_\.]{2,32}$/";
    $parttenmail = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9].{2,12})(.[a-zA-Z]{2,12})+$/";



    if (!empty($username) && !empty($email) && !empty($password) && !empty($repassword))
    {
	if(!preg_match($partten ,$username, $matchs))
            echo  "<font color='red'>Username bạn vừa nhập không đúng định dạng</font>  ";
        else
        if (mysql_num_rows($kq_user) > 0 )
            echo'<font color="red">Tên đăng nhập đã tồn tại</font> ';
        else 
		if(!preg_match($parttenmail ,$email, $matchs))
                echo  "<font color='red'>Mail bạn vừa nhập không đúng định dạng </font> ";
		else
            if (mysql_num_rows($kq_mail) > 0)
                echo'<font color="red">Email đã tồn tại trong hệ thống</font> ';
            else
                if ($password != $repassword)
                    echo'<font color="red">Mật khẩu không khớp</font> ';
                else 
                {
                    mysql_query("INSERT INTO `account`(`username`, `password`, `email`) 
                        VALUES ('".$username."','".$password."','".$email."')");
                    echo'<font color="red">Đăng kí Thành công! <a href="login.php">Đăng nhập</a> ngay</font> ';
                }
        $a=0;        
    }
    else{
        //neu dang nhap sai
        echo '<font color="red">Vui lòng nhập đầy đủ</font> ';
    }

?>
