<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập 2T - Lê Thành Trung</title>
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
function check(){
		$('#loadlog').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Đang kiểm tra');
		setTimeout(function(){
			$('#check').load('check-log.php',$('#form-log').serializeArray());
			$('#loadlog').html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng nhập');
		},2000);
    	
    }
</script>


<div class="container-fluid" style="background-color: #364150 !important">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
		<center><a href="/"><img src="../img/logoweb.png" alt="Logo" width="auto" style="padding-top: 80px" /></a></center>
		
			<div class="content">
				<center><h3>Đăng nhập</h3>
				    <p style="padding-top: 7px"><b><i>Nhập đủ các thông tin bên dưới:</i></b></p>
				    				 
				<form class="form-inline" id="form-log" method="post">
				    <div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
					      <input type="text" class="form-control" name="user" placeholder="Tên Đăng Nhập (*)">
					    </div>
					</div>
				
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					      <input type="password" class="form-control" name="pass" placeholder="Mật khẩu (*)">
					    </div>
					</div>
					<br><br>		
					  
				</form>
				<button onclick="check();" name="btn-reg" class="btn-reg"><div id="loadlog"><i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng Nhập</div> </button>
				<div id="check" style="padding-top: 7px"></div>
				<hr>
				Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a> ngay <br><br>
				<a href="../"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Về trang chủ</a>
				</center>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
</body>