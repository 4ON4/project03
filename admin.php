<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/admin.css">
</head>
<body> 
<header>
	<?php include "header2.php";?>
</header>  
<section>
		<div id="admin_box">
			<h3 id="member_title">
				관리자 모드 > 회원 관리
			</h3>
			<ul id="member_list">
				<li>
					<div class="col1">번호</div>
					<div class="col2">아이디</div>
					<div class="col3">이름</div>
					<div class="col4">레벨</div>
					<div class="col5">포인트</div>
					<div class="col6">가입일</div>
					<div class="col7">수정</div>
					<div class="col8">삭제</div>
				</li>
<?php
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수

	$number = $total_record;

	while ($row = mysqli_fetch_array($result))
	{
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$level       = $row["level"];
		$point       = $row["point"];
		$regist_day  = $row["regist_day"];
?>

				<li>
					<form method="post" action="admin_member_update.php?num=<?=$num?>">
						<div class="col1"><?=$number?></div>
						<div class="col2"><?=$id?></a></div>
						<div class="col3"><?=$name?></div>
						<div class="col4"><input type="text" name="level" value="<?=$level?>"></div>
						<div class="col5"><input type="text" name="point" value="<?=$point?>"></div>
						<div class="col6"><?=$regist_day?></div>
						<div class="col7"><button type="submit">수정</button></div>
						<div class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></div>
					</form>
				</li>	

<?php
		$number--;
   }
?>
			</ul>
			<h3 id="member_title">
				관리자 모드 > 게시판 관리
			</h3>
			<ul id="board_list">
				<li class="title">
					<div class="col1">선택</div>
					<div class="col2">번호</div>
					<div class="col3">이름</div>
					<div class="col4 list_title">제목</div>
					<div class="col5">첨부파일명</div>
					<div class="col6">작성일</div>
				</li>
				<form method="post" action="admin_board_delete.php">
<?php
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글의 수

	$number = $total_record;

	while ($row = mysqli_fetch_array($result))
	{
		$num         = $row["num"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$file_name   = $row["file_name"];
		$regist_day  = $row["regist_day"];
		$regist_day  = substr($regist_day, 0, 10)
?>
					<li>
						<div class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></div>
						<div class="col2"><?=$number?></div>
						<div class="col3"><?=$name?></div>
						<div class="col4"><?=$subject?></div>
						<div class="col5"><?=$file_name?></div>
						<div class="col6"><?=$regist_day?></div>
					</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
				<button type="submit">선택된 글 삭제</button>
			</form>
		</ul>
	</div> <!-- admin_box -->
</section> 
<footer>
	<?php include "footer.php";?>
</footer>
</body>
</html> 