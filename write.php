<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
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
				
         	<?php if (isset($_SESSION['username']) && $_SESSION['right']==1) { ?>
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Viết Bài</h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="formadd" method="POST" action="write.php">
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Tên Bài Viết</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="tenbv" placeholder="Enter name">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="pwd">Nhập nội dung:</label>
								    <div class="col-sm-10"> 
								      <textarea name="nd" id="editor1" rows="10" cols="80"></textarea>
								    </div>
								  </div>
								  
								  <script>    CKEDITOR.replace( 'editor1' );</script>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Url Img</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="urlimg" placeholder="Đường dẫn img">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Link download</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name ="urldownload" placeholder="">
								    </div>
								  </div>
									<div class="form-group">
								    <label class="control-label col-sm-2" for="labelcoin">Coin download</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" name ="coindownload" placeholder="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="email">Ngày đăng bài</label>
								    <div class="col-sm-10">
								      <input type="datetime-local" class="form-control" name="date" placeholder="Đường dẫn img">
								    </div>
								  </div>
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="pwd">Chọn chuyên mục:</label>
								  <div class="col-sm-10"> 
								  <input type="radio" name="chuyenmuc" hidden>
								  <?php
								  	$str="select * from chuyenmuc";
				  					$kq= mysql_query($str);
								  	while($row=mysql_fetch_array($kq))
							  			{ 
							  			echo'<label class="radio-inline"><input type="radio" name="chuyenmuc" value="'.$row['id'].'">'.$row['namectg'].'</label>'; 
							  			}
								  ?>
								  
								  </div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" name="addbaiviet" class="btn btn-success">Thêm</button>
								    </div>
								  </div>
								  
							</form>
							<?php

							 if(isset($_POST['addbaiviet'])) {
							 	require_once("connect.php");
							 	$tenbv= $_POST['tenbv'];
								$nd=$_POST['nd'];
								$linktai = $_POST['urldownload'];
								$coin = $_POST['coindownload'];
								$urlimg=$_POST['urlimg'];
								$date=$_POST['date'];
								$chuyenmuc=$_POST['chuyenmuc'];
							if ($tenbv=='' || $nd==''  || $urlimg=='' || $date=='' || $chuyenmuc=='' || $coin =='')
							{
								echo'Không được bỏ trống các trường giá trị';
							}
							else {
								mysql_query("INSERT INTO `baiviet`(`idctg`, `title`,`content`,`linkdownload`,`coindownload`,`urlimg`,`date`) 
							VALUES (".$chuyenmuc.",'".$tenbv."','".$nd."','".$linktai."',".$coin.",'".$urlimg."','".$date."')");
								echo'Đã thêm bài';
							}
							
								
							
							
							 }
								

							?>
						</div>
					</div> 
         
				</div>
			</div>
						
		</div> <!-- End right-->
		 <?php } else { ?>
		 	<!-- Start chưa đăng nhập -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Quản Lí bài viết - Vui lòng Đăng nhập bằng quyền admin</h4>
							</div>

						</div>
					</div>
				<?php } ?>


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

