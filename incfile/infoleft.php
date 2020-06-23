


<div class="panel-group shadowpanel">
				  <div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 
function convertstr($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str); 
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
     $str = preg_replace("/(Đ)/", 'd', $str);
     $str = preg_replace("/( )/", '-', $str);
      $str = preg_replace("/(#)/", '', $str);
  //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
  return $str;
  }
						
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
						  <p class="p_info" style="font-size:15px;">System Administrator</p>
						  <i class="fa fa-angellist fa-3x" aria-hidden="true" style="color:#FFFFFF; margin-bottom:3px;"></i>
						</center>
						<div class="mess"><i class="fa fa-quote-left" aria-hidden="true"></i> Xin chào các bạn đã ghé thăm Blog cá nhân của mình. Mình Là một người đam mê CNTT, đặc biệt là thích quản trị hệ thống và chút lập trình. Thích tìm tòi và sáng tạo, viết và chia sẽ những gì mình học được. Các bạn có thể contact với mình qua thông tin bên dưới nha <i class="fa fa-hand-o-down" aria-hidden="true"></i><i class="fa fa-hand-o-down" aria-hidden="true"></i> <i class="fa fa-quote-right" aria-hidden="true"></i></div>
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
						  <i class="fa fa-facebook-square" aria-hidden="true"></i><span class="spanitem"><a target="_black" id="link" href="http://fb.com/ngai.lam.311">Facebook.com/ngai.lam.311</a></span>
						</div>
					</div>
					
				  </div>
				</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
		 	Quảng Cáo
		</div>
		<div class="panel-body">
			<a href="http://dstech.com/Huong-dan-nhan-35.000-VNd-mua-the-dien-thoai-11.html"><img src="https://lh4.googleusercontent.com/-np4UDMd9B3I/V-qHWTtl7NI/AAAAAAAAMPg/pMP_a1DYG_MaO9vo4SCQHuU_U0_FlP3OACL0B/s300-no/kiem-tien-voi-ung-dung-thanh-toan-viviet.gif"></a>


		</div>
	</div>
</div>
