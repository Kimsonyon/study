<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DD베이커리</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <div class="logo">
      <a href="index.php">
        <img src="logo/LOGO.jpg">
      </a>
    </div>
    <div class="nav">
      <li>DD소개</li>
      <li>
        빵 만들기
      </li>
      <li>커뮤니티</li>
    </div>
  </div>

  <div class="wrap">
    <div class="imgslide">
      <div class="welcome">
        <p1>베이커리 카페</p1><br>
        <p2>세상에 하나뿐인 베이커리</p2>
      </div>
      <div class="imgs">
        <img src="slide/images(1).jpg">
        <img src="slide/images(2).jpg">
        <img src="slide/images(3).jpg">
        <img src="slide/images(5).jpg">
        <img src="slide/images(4).jpg">
      </div>
    </div>
  </div>

  <div class="content">
    <div class="notice">
      <br><br>
      <div class="title">공지사항</div>
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
      <div class="title">partner</div>
      <img src="partner/PARTNER.jpg" >
      <img src="partner/PARTNER_UP.png">
    </div>
    
    <div class="icons">
      <div class="imgbtn">
        <img src="icons/icon1.png">
        <input type="button" class="bt" value="고수의 레시피">
      </div>
      <div class="imgbtn">
        <img src="icons/icon2.png">
        <input type="button" class="bt" value="새소식">
      </div>
      <div class="imgbtn">
        <img src="icons/icon3.png">
        <input type="button" class="bt" value="식품안전관리">
      </div>
    </div>
  </div>

  <div class="footer">
    <div style="width:1000px;">
      <div style="width:500px;float:left;
      line-height: 50px;">
        법적고지
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        개인정보취급방침
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        개인정보처리방침
      </div>
      <div style="width:500px;float:right;">
        <p style="font-size:0.7em;line-height:25px;">
          사업자번호:222-22-22222<br>
          상호명:(주)디디베이커리<br>
          대표자:김창수<br>
          개인정보관리책임자:윤진서<br>
          상담전화:1599-0900<br>
          주소:서울특별시 서초구 논현동 222-22번지<br>
          E-mail:master@test.co.kr
        </p>
      </div>
    </div>
  </div>

</body>
</html>