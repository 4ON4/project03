<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>안양 시립도서관</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/message_box.css">
<link rel="shortcut icon" href="images/ico_favicon.png">	
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
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
	$mode = $_GET["mode"];
	$num  = $_GET["num"];

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from message where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id    = $row["send_id"];
	$rv_id      = $row["rv_id"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	if ($mode=="send")
		$result2 = mysqli_query($con, "select name from members where id='$rv_id'");
	else
		$result2 = mysqli_query($con, "select name from members where id='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["name"];

	if ($mode=="send")	    	
		echo "송신 쪽지함 > 내용보기";
	else
		echo "수신 쪽지함 > 내용보기";
?>
							</h3>
							<p>message send</p>
						</div>
						<div id="form_content" class="cf" >
							<ul id="view_content">
								<li>
									<span class="col1"><b>제목 :</b> <?=$subject?></span>
									<span class="col2"><?=$msg_name?> | <?=$regist_day?></span>
								</li>
								<li>
									<?=$content?>
								</li>		
							</ul>
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