<?php 
	require_once("connect.php");
	$id = intval($_GET['id']);
	$title = mysql_query("select * from baiviet where idbv=".$id."");
	$row= mysql_fetch_array($title);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $row['title']; ?></title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="description" CONTENT="Blog cá nhân Lê Thành Trung, chia sẽ thủ thuật, code">
  <meta property="og:image" content="<?php echo $row['urlimg']; ?>"/> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/likeblog.css">
  <link rel="stylesheet" href="wow/animate.css">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">
<meta property="fb:app_id" content="1104249069624594" />
<meta property="fb:admins" content="100008565965493"/>

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="wow/wow.min.js"></script>
<script src="css/Locklike_blog.js"></script>
<!-- analystic -->

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84646361-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/df843eb0216b37c3bb8ec3e3a9f4e52b.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
</script>
  <script>
    new WOW().init();
  </script>
  <script type="text/javascript">
    $(function() {
     $(window).scroll(function() {
     if ($(this).scrollTop() != 0) {
     $("#bttop").fadeIn();
     } else {
     $("#bttop").fadeOut();
     }
     });
     $("#bttop").click(function() {
     $("body,html").animate({
     scrollTop: 0
     }, 800);
     });
    });
    </script>
<script type="text/javascript">
		function checkcoin(){
		
			$('#result').load('check-coin.php',$('#form-coin').serializeArray());
		
    	
    }
</script>

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1104249069624594";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<body>

		<?php require_once("incfile/navbar.php"); ?>
		<?php 
			$result= mysql_query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idbv=".$id."");
			$row = mysql_fetch_array($result);
			function islogin()
			{
				if (isset($_SESSION['username']))
					return 1;
				else return 0;
			}
		?>
			<script>
			$(document).ready(function(){
				var bool = <?php echo islogin(); ?>;
			    $("#loadnd").click(function(){
			    	if (bool==0)
			    		$("#notlog").removeClass("ancontent");
			    	else 

			        	$("#islog").removeClass("ancontent");
			        
			    });
			});
			</script>
		<!-- Main -->
		<div max-width="900px">
		<div class="container-fluid">
			<div class="row">
				<!-- Col Left -->
				
				<div class="col-md-9">
						<!-- Start slide-->
						<!--End slide-->
				<img src="http://gsmpro.vn/new1.gif"> <a href="http://dstech.com/baiviet.php?id=12">"Thêm bạn Thêm Vui" Nhận ngay 35.000 vào tài khoản khi đăng kí sử dụng app Ví Việt</a> <img src="http://gsmpro.vn/new1.gif">
						<!-- Start Info -->
						<div class="panel-group shadowpanel">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Chuyên Mục > <?php echo $row['namectg']; ?> > <?php echo $row['title']; ?></h4>
							</div>
							<div class="panel-body">
								<div id="titlect">
								<h3><?php echo $row['title']; ?></h3>
								<div class="tag"><i class="fa fa-tags" aria-hidden="true"></i> Chuyên mục: <?php echo $row['namectg']; ?></div>
								<div class="tag"><i class="fa fa-user" aria-hidden="true"></i><a href="http://fb.com/tnit97"> Author : Thành Trung</a></div>
								<div class="tag"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date'];?></div>
							</div>
								<br>
								<?php echo $row['content']; ?><br>
								<?php 
								if ($row['linkdownload'] != '') 
								{

								if (!isset($_SESSION['username']))
									echo'<center><a href="account/login.php"><button type="button" class="btn btn-success">
										<i class="fa fa-cloud-download" aria-hidden="true"></i> Download File - Vui lòng đăng nhập để lấy link Download</button></a></center>';
								else
									{
										$strcoin="select * from account where username='".$_SESSION['username']."'";
									  	$kq= mysql_query($strcoin);
									  	$rowcoin=mysql_fetch_array($kq);
									  	if ($row['coindownload']==0)
												echo'<center><a href="'.$row['linkdownload'].'" target="blank"><button type="button" class="btn btn-success">
										<i class="fa fa-cloud-download" aria-hidden="true"></i> Download File - Phí: '.$row['coindownload'].' Xu</button></a></center>';
										else 
										if ($rowcoin['coin'] >= $row['coindownload'])
										{
										echo'
										<form id="form-coin" method="POST">
											<input type="number" name="coin" value="'.$row['coindownload'].'" hidden>
											<input type="text" name="user" value="'.$_SESSION['username'].'" hidden>
										</form>';
										

											echo'<center><a href="'.$row['linkdownload'].'" target="blank" ><button onclick="checkcoin();" type="button" class="btn btn-success">
												<i class="fa fa-cloud-download" aria-hidden="true"></i> Download File - Phí: '.$row['coindownload'].' Xu</button></a></center>
												<div id="result" class="mess"></div>';
										}
										
										else 
											echo'<center><a href="http://fb.com/tnit97" target="blank" ><button type="button" class="btn btn-success">
										<i class="fa fa-cloud-download" aria-hidden="true"></i> Bạn đang có '.$rowcoin['coin'].' Xu - không đủ '.$row['coindownload'].' Xu để download - Click vào đây liên hệ Admin để nạp Xu</button></a></center>';
										



									}
									
								}
								?>	
								<?php if (isset($_SESSION['username']) && $_SESSION['right']==1)
								{
									?> 
									<a href="editpost.php?id=<?php echo $id;?>"" class="btn btn-success">Chỉnh sửa</a> <a href="delpost.php?id=<?php echo $id;?>" class="btn btn-success">Xóa</a>
									<?php 
								}
								?>							
							</div>
			
						</div> 

	          
					</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Bình Luận</h4>
		</div>
	<div class="panel-body">
		<div class="fb-comments" xid="<?php echo $row['idbv'] ?>" data-numposts="20" data-colorscheme="light" width="100%" data-version="v2.3"></div>
	</div>
</div>
</div>


				</div><!-- End left-->
				<!-- Col right-->
				<div class="col-md-3">
					<?php 
						require_once("incfile/infoleft.php");
					?>
				</div> <!-- End col right -->
							
			</div> 
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

