<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	require_once("incfile/head.php");
	require_once("connect.php");
	$id = intval($_GET['id']);
	

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
				
         	<?php if (isset($_SESSION['username']) && $_SESSION['right']==1) {
         	$result= mysql_query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idbv=".$id."");
			$row = mysql_fetch_array($result); 
			?>
         	
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Bạn có muốn xóa bài viết <?php echo $row['title']; ?></h4>
						</div>
						<div class="panel-body">
						<?php 
						  if(isset($_POST['xoa'])) {
						  	mysql_query("DELETE FROM baiviet where idbv=".$id." ");
						  	echo'<div class="alert alert-success">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong>Success!</strong> Đã xóa bài viết
							</div>';
						  }
						  	?>
						  <form method="POST"> 
						  <input type="submit" name="xoa" class="btn btn-success" value="Xác nhận">
						  </form>
						

							
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
								<h4>Delete Cpanel - Đề nghị đăng nhập bằng quyền admin</h4>
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

