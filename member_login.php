<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="박은서"/>
	<title>안양시립도서관</title>

	<!-- css -->
	<link rel="stylesheet" href="css/common.css"/>
	<link rel="stylesheet" href="css/member_login.css"/>

	<!-- jquery -->
    <script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/gray.js"></script>
	<script type="text/javascript" src="./js/login.js"></script>	
	<!-- 낮은버전 시맨틱 태그 -->
	<script src="js/html5div.js"></script>
	<script src="js/html5shiv.js"></script>
	<!-- 프리픽스 -->
	<script src="js/prefixfree.min.js"></script>
</head>
<body>

	<!-- 헤더 -->
	<header>
    	<?php include "header2.php";?>
  </header>


	<section id="section">
		<div id="contentsWrap">
			<div class="content_header">
				<div class="header_wrap">
					<div class="function1">
						<h2>로그인</h2>
						<ul>
							<li><a href="./index.php">홈</a></li>
							<li><a href="#">&gt;&nbsp;회원정보</a></li>
							<li><a href="#">&gt;&nbsp;로그인</a></li>
						</ul>
					</div>
					<div class="function2">
						<div class="share_wrap">
							<div class="share"><a href="공유하기"></a></div>
							<div class="share_con">
								<ul>
									<li><a href="#"><div class="kakaotalk"></div></a></li>
									<li><a href="#"><div class="twitter"></div></a></li>
									<li><a href="#"><div class="facebook"></div></a></li>
									<li><a href="#"><div class="Qr"></div></a></li>
									<li><a href="#"><div class="link"></div></a></li>
								</ul>
							</div>
						</div>
						<div class="print"><a href="프린트하기"></a></div>
					</div>
				</div>
			</div>
			<div class="content_bottom">
				<div id="left_content">
					<div class="left_menu">
						<h1 class="hidden">회원정보</h1>
						<div class="left_menu_logo"><a href="#"><img src="images/lnb_bg.png" alt=""/></a></div>
						<div class="left_menu_text"><span>로그인</span></div>
						<ul>
							<li class="left_active"><a href="#">로그인<span>-</span></a></li>
							<li><a href="#">아이디 조회<span>-</span></a></li>
							<li><a href="#">비밀번호 재발급<span>-</span></a></li>
							<li><a href="member_form.php">회원가입<span>-</span></a></li>
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content">
					<div class="login_box">
						<img src="images/img_login.jpg" alt="로그인을 해주세요"/>
						<form name="login_form" method="post" action="login.php">
							<ul class="login_top">
								<li><input type="text" name="id" placeholder="아이디" ></li>
								<li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li>
							</ul>
						</form>
						<ul class="login_bottom">
							<li class="find"><a href="#">아이디 찾기 <span>|</span></a></li>
							<li class="find"><a href="#">비밀번호 찾기 <span>|</span></a></li>
							<li class="find"><a href="member_form.php">회원가입</a></li>
						</ul>
						<div class="button">
							<a href="#" onclick="check_input()">로그인</a>
						</div>
						<div class="imfornation_box">
							<ul>
								<li>안양시 통합회원으로 가입한 경우 <span>도서관신규회원등록(새창)</span> 페이지에서 최초 1회 로그인 후 도서관 홈페이지 이용이 가능합니다.</li>
								<li>로그인이 안되시는 경우 한/영 키와 Caps Lock 키가 눌러져 있지 않은지 확인하세요.</li>
								<li>계속해서 로그인이 안되시는 경우 관리자에게 문의하시기 바랍니다.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<footer>
    	<?php include "footer.php";?>
    </footer>


</body>
</html>