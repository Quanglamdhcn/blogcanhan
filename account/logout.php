<?php 
session_start();
session_destroy();
echo 'Đã đăng xuất!! Hệ thống đang chuyển hướng về Trang chủ';
header('Location: ../index.php');
echo'<script> window.location = "../"; </script>';
?>