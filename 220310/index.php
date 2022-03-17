<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
	<ul class="topmenu">
		<li><a href="login.html">Login</a></li>
		<li><a href="signup.html">Signup</a></li>
		<li><a href="idpw.html">Id/Pw</a></li>
	</ul>
	<div class="logo">
		<a href="index.php">
			<img src="logo/logo.png">
		</a>
	</div>
</div>
<div id="nav">
	<ul class="menu">
		<li>여행가이드 소개</li>
		<li>국내 여행지</li>
		<li>해외 여행지</li>
	</ul>
</div>

<div id="wrap">
	<div id="imgslide">
		<div class="welcome">
			여행가이드에 오신것을 환영합니다.
		</div>
		<div class="imgs">
			<img src="images/slide/images(1).jpg">
			<img src="images/slide/images(2).jpg">
			<img src="images/slide/images(3).jpg">
			<img src="images/slide/images(4).jpg">
			<img src="images/slide/images(5).jpg">
		</div>
	</div>
	<div id="content">
		<div class="notice">
			<br><br>
			<div class="title">
				<img src="images/flight.png" width="20" height="20"> 공지사항
			</div>
			<table class="table1">
				<tr>
					<th>제목</th>
					<th>작성일</th>
				</tr>

<?php 
  //db서버에 접속하는 문법.
  $conn=mysqli_connect("localhost","playsega","tjddyd2daQ!","playsega");
  $sql="select * from notice order by no desc" ;
  $rs=mysqli_query($conn,$sql);
?>  
<?php while($row=mysqli_fetch_array($rs)){ ?>
				<tr>
					<td><?php echo $row["title"] ?></td>
					<td><?php echo $row["writeday"] ?></td>
        </tr>
<?php } ?>
        </table>

		</div>
		<div class="partner">
			<br><br>
			<div class="title">
				<img src="images/flight.png" width="20" height="20"> 정보나눔
			</div>
			<img src="images/partner/info.png">
		</div><!--partner end-->
		<div class="clear"></div>
		<div class="bg">
			<img src="images/bg.png">
		</div>
		<div class="icons">
			<div class="imgbtn">
				<img src="images/icons/새소식.png">
				<input type="button" class="bt" value="새소식">
			</div>
			<div class="imgbtn">
				<img src="images/icons/여행음악.png">
				<input type="button" class="bt" value="여행음악">
			</div>
			<div class="imgbtn">
				<img src="images/icons/여행매뉴얼.png">
				<input type="button" class="bt" value="여행매뉴얼">
			</div>
			<br><br>
			<p style="color:#999;font-size:0.9em;">
			Copyright admin@test.com all rights reserved since 2022</p>
		</div><!--icons end-->
		<div class="clear"></div>
		<div class="box1">
			<br><br>
			<iframe width="450" height="300" src="https://www.youtube.com/embed/lXEBUJ8mxvM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box1">
			<br><br>
			<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1646706752867" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1646706752867",
		"key" : "29e69",
		"mapWidth" : "450",
		"mapHeight" : "250"
	}).render();
</script>
		</div>
		<div class="clear"></div>
	</div><!--content end-->
</div><!--wrap end-->
<div id="footer">
	<div style="width:1000px;">
		<div style="width:500px;float:left;">
			이메일 무단수집거부
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			개인정보 처리방침
		</div>
		<div style="width:500px;float:right;">
			<p style="font-size:0.7em;line-height:25px;">
				상호명:여행을 사랑하는 사람들(주)<br>
				대표자:홍길동<br>
				개인정보책임자:유관순<br>
				상담전화:1588-9000<br>
				주소:부산광역시 해운대구 우동 정릉빌딩 504호
			</p>
		</div>
	</div>
</div>
</body>
</html>

