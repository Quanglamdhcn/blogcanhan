<?php 
	require_once("incfile/head.php");
	require_once("connect.php");
?>
<body>



	<?php require_once("incfile/navbar.php"); ?>
	
	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			<!-- Col Left -->
			<div class="col-md-3">
				<?php 
					require_once("incfile/infoleft.php");
				?>
			</div> <!-- End col left -->
			<!-- Start right-->
			<div class="col-md-9">
					<!-- Start slide-->
						
					<!--End slide-->
					<br>
         
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Tạo Chuyên Mục</h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="formadd" method="POST">
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Tên Chuyên Mục:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="tenctg" placeholder="Enter name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="pwd">Mô tả chuyên mục:</label>
								    <div class="col-sm-10"> 
								      <textarea type="text" class="form-control" name="motacm" placeholder="Nhập mô tả"></textarea>
								    </div>
								  </div>
								  
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" name="addctg" class="btn btn-success">Thêm</button>
								    </div>
								  </div>
								  
							</form>
							<?php

							 if(isset($_POST['addctg'])) {
							 	require_once("connect.php");
							 	$namecm= $_POST['tenctg'];
								$motacm=$_POST['motacm'];
								$sql = "select * from chuyenmuc where namectg = '$namecm'";
								$query = mysql_query($sql);
								$num_rows = mysql_num_rows($query);
								if ($num_rows>0) {
										echo "Tên chuyên mục đã tồn tại !";
									}
								else 
									if ($namecm == '' or $motacm=='')
										echo'Không được bỏ trống giá trị';
									else 
									{
							mysql_query("INSERT INTO `chuyenmuc`(`namectg`, `mota`) VALUES ('".$namecm."','".$motacm."')");
										echo'Đã thêm';
									}
								
							 }
								

							?>
						</div>
					</div> 
         
				</div>
			</div>
						
		</div> <!-- End right-->
		</div>
		

	</div>
 
</div>
<!-- ENd Main -->
</div> 
<script type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/c/e/cee6e386b5fa9981bd27c11adda4f8db/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
</script>
<?php
require_once("incfile/end.php");
?>
</body>
</html>

