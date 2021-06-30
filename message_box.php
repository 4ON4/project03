<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>안양 시립도서관</title>
<link rel="shortcut icon" href="images/ico_favicon.png">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/message_box.css">
<script>
  function check_input() {
  	  if (!document.message_form.rv_id.value)
      {
          alert("수신 아이디를 입력하세요!");
          document.message_form.rv_id.focus();
          return;
      }
      if (!document.message_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.message_form.subject.focus();
          return;
      }
      if (!document.message_form.content.value)
      {
          alert("내용을 입력하세요!");
          document.message_form.content.focus();
          return;
      }
      document.message_form.submit();
   }
</script>
</head>
<body>
<header>
    <?php include "header.php";?>
</header>
<?php
	if (!$userid )
	{
		echo("<script>
				alert('로그인 후 이용해주세요!');
				history.go(-1);
				</script>
			");
		exit;
	}
?>
	<section id="section" class="cf">
		<div id="section_wrap">
			<div class="contents">
				<div class="content_header">
					<h2>나의 쪽지함</h2>
				</div>
				<div class="content_wrap cf">
					<div class="content_tab">
						<ul class="buttons">
							<li class="tab1"><a href="message_form.php">쪽지보내기</a></li>
							<li class="message_on tab2"><a href="message_box.php?mode=rv">송신쪽지함</a></li>
							<li class="tab3"><a href="message_box.php?mode=send">수신쪽지함</a></li>
						</ul>
					</div>
					<div class="content">
						<div class="form">
							<div class="form_header cf">
								<h3>
<?php
 		if (isset($_GET["page"]))
			$page = $_GET["page"];
		else
			$page = 1;

		$mode = $_GET["mode"];

		if ($mode=="send")
			echo "송신 쪽지함 > 목록보기";
		else
			echo "수신 쪽지함 > 목록보기";
?>
								</h3>
								<p>message send</p>
							</div>
							<div id="form_content" class="cf" >
								<div id="message_box" class="cf">
									<form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
										<div id="send_box" class="cf">
										<!-- <div> 필요없음 -->
										<div id="message" class="cf">
											<div class="message_box1 cf">
												<div class="col1">번호</div>
												<div class="col2">제목</div>
												<div class="col3">
<?php						
		if ($mode=="send")
			echo "받은이";
		else
			echo "보낸이";
?>
												</div>
												<div class="col4">등록일</div>
											</div>
<?php
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

	if ($mode=="send")
		$sql = "select * from message where send_id='$userid' order by num desc";
	else
		$sql = "select * from message where rv_id='$userid' order by num desc";

	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
      $num    = $row["num"];
      $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];

      if ($mode=="send")
	  		$msg_id = $row["rv_id"];
      else
	  		$msg_id = $row["send_id"];
	  
      $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
      $record = mysqli_fetch_array($result2);
      $msg_name = $record["name"];	  
?>								
											<div class="message_box2 cf">
												<div class="col1"><?=$number?></div>
												<div class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></div>
												<div class="col3"><?=$msg_name?>(<?=$msg_id?>)</div>
												<div class="col4"><?=$regist_day?></div>
											</div>
<?php
	   $number--;
   }
   mysqli_close($con);
?>
										</div>
										<div id="page_num">
											<ul class="num">
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
			if ($page == $i)     // 현재 페이지 번호 링크 안함
			{
				echo "<li><b> $i </b></li>";
			}
			else
			{
				echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
			}
   	}
   	
   	if ($total_page>=2 && $page != $total_page)		
   	{
			$new_page = $page+1;	
			echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
		}
		else 
			echo "<li>&nbsp;</li>";
?>
											</ul>
										</div>
									</form>
								</div> <!-- message_box -->
							</div>
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