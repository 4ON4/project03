<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP프로그래밍</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css"/>
	<link rel="stylesheet" type="text/css" href="./css/board.css"/>
	<script>
	function check_input(){
		if(!document.board_form.subject.value.trim())
		{
			alert("제목을 입력하세요!");
			doucument.board_form.subject.focus();
			return;
		}
		if(!document.board_form.content.value.trim())
		{
			alert("내용을 입력하세요!");
			doucument.board_form.content.focus();
			return;
		}
		document.board_form.submit();
	}
	
	</script>
</head>
<body>
	<header>
		<?php include "header2.php"?>
	</header>
	<section id="section">
		<div id="contentsWrap">
			<div class="content_header">
				<div class="header_wrap">
					<div class="function1">
						<h2>게시판</h2>
						<ul>
							<li><a href="index.php">홈</a></li>
							<li><a href="#">&gt;&nbsp;게시판</a></li>
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
						<h1 class="hidden">게시판</h1>
						<div class="left_menu_logo"><a href="#"><img src="images/lnb_bg.png" alt=""/></a></div>
						<div class="left_menu_text"><span>게시판</span></div>
						<ul>
							<li ><a href="board_list.php">게시판 목록<span>-</span></a></li>
							<li class="left_active"><a href="board_form.php">게시판 글쓰기<span>-</span></a></li>
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content" class="cf">
					<div id="board_box">
						<h3 id="hidden">
							게시판> 글 쓰기
						</h3>
						<form name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
							<ul id="board_form">
								<li>
									<span class="col1">이름:</span>
									<span class="col2"><?=$username?></span>
								</li>
								<li>
									<span class="col1">제목:</span>
									<span class="col2"><input name="subject" type="text"/></span>
								</li>
								<li>
									<span class="col1">내용:</span>
									<span class="col2">
										<textarea name="content"></textarea>
									</span>
								</li>
								<li>
									<span class="col1">첨부파일:</span>
									<span class="col2"><input type="file" name="upfile"/></span>
								</li>
							</ul>
							<ul class="buttons">
								<li><button type="button" onclick="check_input()">완료</button></li>
								<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>
	<footer>
		<?php include "footer.php"?>	
	</footer>
</body>
</html>