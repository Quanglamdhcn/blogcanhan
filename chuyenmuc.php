<?php 
	
	require_once("connect.php");
	$idcm=intval($_GET['id']);
	$seo = mysql_query("select * from chuyenmuc where id=".$idcm."");
	$row = mysql_fetch_array($seo);
function convertstr($strurl) {
    $strurl = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $strurl);
     $strurl= preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $strurl);
     $strurl = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strurl);
     $strurl = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $strurl);
     $strurl = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $strurl);
     $strurl = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(đ)/", 'd', $strurl); 
     $strurl = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $strurl);
     $strurl = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $strurl);
     $strurl = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $strurl);
     $strurl = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $strurl);
     $strurl= preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $strurl);
     $strurl= preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(Đ)/", 'd', $strurl);
     $strurl = preg_replace("/( )/", '-', $strurl);
     $strurl = preg_replace("/(#)/", '', $strurl);
 
  return $strurl;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chuyên mục <?php echo $row['namectg']; ?></title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="description" CONTENT="Blog cá nhân Đỗ Tùng Lâm, chia sẽ thủ thuật, kiến thức NETWORK">
  <meta property="og:image" content="img/s1.jpg" /> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="wow/animate.css">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="wow/wow.min.js"></script>
<!-- analystic -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84646361-1', 'auto');
  ga('send', 'pageview');

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
</head>
<body>

	<?php require_once("incfile/navbar.php"); ?>

	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			
			<!-- Start left-->
			<div class="col-md-9">
					<!-- Start slide-->
					<!--End slide-->
			
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Chuyên Mục > 
								<?php 
								$str="select * from chuyenmuc  where id=".$idcm."";
				  				$kq= mysql_query($str);
								while($row=mysql_fetch_array($kq)) {echo $row['namectg']; } ?></h4>
						</div>
						<div class="panel-body">
						<!-- Hiển thị bv -->
							<?php 

								$result= mysql_query("select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idctg=".$idcm." ORDER BY bv.idbv desc");
								if(mysql_num_rows($result) == 0)
									echo'Chưa có bài viết nào.';
								else
								while($row = mysql_fetch_array($result)){

										$url= convertstr($row['title']);
								
									?>
									<?php 
									echo'<div class="post">
										<div class="row">
											<div class="col-sm-3">
												<center><img id="imgthumb" src="'.$row['urlimg'].'"></center>
											</div>
											<div class="col-sm-9">
												<h3><a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a></h3>
												<div class="tag"><i class="fa fa-tags" aria-hidden="true"></i> Chuyên mục: '.$row['namectg'].'</div>
												<div class="tag"><i class="fa fa-user" aria-hidden="true"></i> Author : KunCIT</div>
												<div class="tag"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['date'].'</div>

												
												<div class="tag"><a href="'.$url.'-'.$row['idbv'].'.html">Xem thêm</a></div>
											</div>
										</div>
									</div>';
								}
		
							?>
							
							<!-- end bv-->
						</div>
					</div> 
          
				</div>
			</div><!-- End left-->
			<!-- Col right-->
			<div class="col-md-3">
				
<div class="panel-group shadowpanel">
				  <div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 

						
					  	$str="select * from baiviet order by idbv desc limit 5";
					  	$kq= mysql_query($str);
						if(mysql_num_rows($kq) == 0)
					  		echo 'Chưa bài viết nào';
					  	else 
					  		while($row=mysql_fetch_array($kq))
					  			{ 
									$url= convertstr($row['title']);
					  				echo'<div class="newpost">
											<img src="img/rss.png" width="5px"> <a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a>
											<hr>
										</div>'; 
					  			}
				  	?>
					</div>
					<div class="panel-heading">
						<center>
						  <img id="avatar" src="img/user1.jpg">
						  <p class="p_info"><b>ĐỖ TÙNG LÂM</b></p>
						  <p class="p_info" style="font-size:15px;">SYSTEM ADMINISTRATOR</p>
						  <i class="fa fa-angellist fa-3x" aria-hidden="true" style="color:#FFFFFF; margin-bottom:3px;"></i>
						</center>
						<div class="mess"><i class="fa fa-quote-left" aria-hidden="true"></i> Xin chào các bạn đã ghé thăm Blog cá nhân của mình. Mình Là một người đam mê CNTT, đặc biệt là thích Lập trình và Quản trị hệ thống. Thích tìm tòi và sáng tạo, viết và chia sẽ những gì mình học được. Các bạn có thể contact với mình qua thông tin bên dưới nha <i class="fa fa-hand-o-down" aria-hidden="true"></i><i class="fa fa-hand-o-down" aria-hidden="true"></i> <i class="fa fa-quote-right" aria-hidden="true"></i></div>
					</div>
					<div class="panel-body">
						<div id="contact">
						  <span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span><span class="spanitem">02/12/1998</span>
						</div>
						<div id="contact">
						  <i class="fa fa-transgender" aria-hidden="true"></i><span class="spanitem">Giới tính: Nam</span>
						</div>
						<div id="contact">
						  <i class="fa fa-phone-square" aria-hidden="true"></i><span class="spanitem">0336.229.123</span>
						</div>
						<div id="contact">
						  <i class="fa fa-map-marker" aria-hidden="true"></i><span class="spanitem">38/52 Đường Mỹ Đình - Q.Nam Từ Liêm - TP.Hà Nội</span>
						</div>
						<div id="contact">
						  <i class="fa fa-facebook-square" aria-hidden="true"></i><span class="spanitem"><a target="_black" id="link" href="https://www.facebook.com/ngai.lam.311">facebook.com/ngai.lam.311</a></span>
						</div>
					</div>
					
				  </div>
				</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
		 	Ads
		</div>
		<div class="panel-body">
			<!-- Start of ouo.io banner code -->
<a href="http://ouo.io/ref/3wEMWC3p"><img src="http://ouo.io/images/banners/r4.jpg" title="ouo.io - Make short links and earn the biggest money" /></a>
<!-- End of ouo.io banner code -->

		</div>
	</div>
</div>

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

