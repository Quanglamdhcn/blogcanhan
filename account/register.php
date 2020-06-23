<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng kí Tài khoản Blog 2T - Lê Thành Trung</title>
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="description" CONTENT="Blog cá nhân Lê Thành Trung, chia sẽ thủ thuật, code. Thiết kế website cá nhân, doanh nghiệp. Design Responsive đa nền tảng, Chuẩn SEO ">
  <meta property="og:image" content="http://thanhtrungit.com/img/s1.jpg" /> 
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../wow/animate.css">
  <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../wow/wow.min.js"></script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84646361-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
<script type="text/javascript">
/*
$(document).ready(function()
{  
    //khai báo nút submit form
    var submit   = $("button[type='submit']");
     
    //khi thực hiện kích vào nút Login
    submit.click(function()
    {
        //khai báo các biến
        var username = $("input[name='user']").val(); 
        var email = $("input[name='email']").val();//lấy giá trị input tài khoản
        var password = $("input[name='pass']").val();
        var repassword = $("input[name='re-pass']").val(); //lấy giá trị input mật khẩu
         
        //kiem tra xem da nhap tai khoan chua
        if(username == ''){
            $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i> User trống</div>');
            return false;
        }
        if(email == ''){
            $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i>Email trống</div>');
            return false;
        }
        if(password == ''){
            $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i>password trống</div>');
            return false;
        }
        if(repassword == ''){
            $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i>re-password trống</div>');
            return false;
        }
        if(repassword != password){
            $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i> Mật khẩu không khớp</div>');
            return false;
        }
         
        // //lay tat ca du lieu trong form login
        // var data = $('form#form-reg').serialize();
        // //su dung ham $.ajax()
        // $.ajax({
        // type : 'POST', //kiểu post
        // url  : 'check-reg.php', //gửi dữ liệu sang trang submit.php
        // data : data,
        // success :  function(data)
        //        {                       
        //             if(data == 'false')
        //             {
        //                 $("#check").html('<div id="check" style="padding-top: 7px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red"></i> Sai tk or pass</div>');
        //             }else{
        //                 $('#check').html('Thành công');
        //             }
        //        }
        // });
        
        return false;
    }); 
    
}); */
function check(){
		$('#loadreg').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Đang kiểm tra');
		setTimeout(function(){
			$('#check').load('check-reg.php',$('#form-reg').serializeArray());
			$('#loadreg').html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng kí');
		},2000);
    	
    }
</script>

<div class="container-fluid" style="background-color: #364150 !important">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
		<center><a href="/"><img src="../img/logoweb.png" alt="Logo" width="auto" style="padding-top: 80px" /></a></center>
		
			<div class="content">
				<center><h3>Đăng ký thành viên</h3>
				    <p style="padding-top: 7px"><b><i>Nhập đủ các thông tin bên dưới:</i></b></p>
				    				 
				<form class="form-inline" id="form-reg" method="post">
				    <div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
					      <input type="text" class="form-control" name="user" placeholder="Tên Đăng Nhập (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
					      <input type="email" class="form-control" name="email" placeholder="Email (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					      <input type="password" class="form-control" name="pass" placeholder="Mật khẩu (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					      <input type="password" class="form-control" name="re-pass" placeholder="Nhập Lại Mật khẩu (*)">
					    </div>
					</div><br><br>		
					  
				</form>
				<div id="check" style="padding-top: 7px"></div>
				<button onclick="check();" name="btn-reg" class="btn-reg"><div id="loadreg"><i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng kí</div> </button>
				
				<hr>
				Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a> ngay <br><br>
				<a href="../"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Về trang chủ</a>
				</center>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
</body>