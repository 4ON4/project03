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
	<link rel="stylesheet" type="text/css" href="css/member.css">	
	<!-- jquery -->
    <script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/gray.js"></script>
	<script type="text/javascript" src="./js/member_modify.js"></script>
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

<?php    
   	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
	
	<section id="section">
		<div id="contentsWrap">
			<div class="content_header">
				<div class="header_wrap">
					<div class="function1">
						<h2>정보수정</h2>
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
						<h1 class="hidden">회원정보수정</h1>
						<div class="left_menu_logo"><a href="#"><img src="images/lnb_bg.png" alt=""/></a></div>
						<div class="left_menu_text"><span>정보수정</span></div>
						<ul>
							<li><a href="#">로그인<span>-</span></a></li>
							<li><a href="#">아이디 조회<span>-</span></a></li>
							<li><a href="#">비밀번호 재발급<span>-</span></a></li>
							<li><a href="member_form.php">회원가입<span>-</span></a></li>
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content">
					<div id="main_content">
						<div id="join_box">
						<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
								<div class="form id">
									<div class="col1"><span>아이디</span></div>
									<div class="col2">
										<span><?=$userid?></span>
									</div>                 
								</div>
								<div class="clear"></div>

								<div class="form">
									<div class="col1"><span>비밀번호</span></div>
									<div class="col2">
										<input type="password" name="pass" value="<?=$pass?>">
									</div>                 
								</div>
								<div class="clear"></div>
								<div class="form">
									<div class="col1"><span>비밀번호 확인</span></div>
									<div class="col2">
										<input type="password" name="pass_confirm" value="<?=$pass?>">
									</div>                 
								</div>
								<div class="clear"></div>
								<div class="form">
									<div class="col1"><span>이름</span></div>
									<div class="col2">
										<input type="text" name="name" value="<?=$name?>">
									</div>                 
								</div>
								<div class="clear"></div>
								<div class="form email">
									<div class="col1"><span>이메일</span></div>
									<div class="col2">
										<input type="text" name="email1" class="email1" value="<?=$email1?>">@<input 
											   type="text" name="email2" class="email2" value="<?=$email2?>">
									</div>                 
								</div>
								<div class="clear"></div>
								<div class="bottom_line"> </div>
								<div class="buttons">
									<p onclick="check_input()">저장하기</p>
									<p id="reset_button" onclick="reset_form()">취소하기</p>
								</div>
						</form>
						</div> <!-- join_box -->
					</div> <!-- main_content -->
				</div>
			</div>
		</div>

	</section>

	<footer>
    	<?php include "footer.php";?>
    </footer>


</body>
</html>