<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body>
	<header>
		<?php include "header.php";?>
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
							<li class="left_active"><a href="board_list.php">게시판 목록<span>-</span></a></li>
							<li><a href="board_form.php">게시판 글쓰기<span>-</span></a></li>
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content" class="cf">
					<div id="board_box">
							<div id="board_box">
								<h3 class="title">
									게시판 > 내용보기
								</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";
	mysqli_query($con, $sql);
?>
								<ul id="view_content">
									<li>
										<span class="col1"><b>제목 :</b> <?=$subject?></span>
										<span class="col2"><?=$name?> | <?=$regist_day?></span>
									</li>
									<li>
<?php
	if($file_name) {
		$real_name = $file_copied;
		$file_path = "./data/".$real_name;
		$file_size = filesize($file_path);

		echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
		<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
	}
?>
<?=$content?>
									</li>
								</ul>
								<ul class="buttons">
										<li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
										<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
										<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
										<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
								</ul>
							</div> <!-- board_box -->

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