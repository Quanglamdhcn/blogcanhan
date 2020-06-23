<?php
	require_once("incfile/head.php"); 
?>
<body>
<div class="container-fluid" style="background-color: #364150 !important">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
		<center><a href="/"><img src="img/logoweb.png" alt="Logo" width="auto" style="padding-top: 80px" /></a></center>
		
			<div class="content">
				<center><h3>Đăng ký thành viên</h3>
				    <p style="padding-top: 7px"><b><i>Nhập đủ các thông tin bên dưới:</i></b></p>
				    
				 
				<form class="form-inline" action="" method="post">
				    <div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
					      <input type="text" class="form-control" placeholder="Tên Đăng Nhập (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
					      <input type="text" class="form-control" placeholder="Email (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					      <input type="password" class="form-control" placeholder="Mật khẩu (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					      <input type="password" class="form-control" placeholder="Nhập Lại Mật khẩu (*)">
					    </div>
					</div><br><br>
					<button type="button" class="btn-reg"><i class="fa fa-check-square-o" aria-hidden="true"></i> Đăng kí</button>
					  
				</form>
				</center>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
</body>