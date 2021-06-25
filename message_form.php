<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>안양 시립도서관</title>
<link rel="shortcut icon" href="images/ico_favicon.png">	
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/message_send_form.css">
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
							<li class="message_on tab1"><a href="#">쪽지보내기</a></li>
							<li class="tab2"><a href="message_box.php?mode=rv">송신쪽지함</a></li>
							<li class="tab3"><a href="message_box.php?mode=send">수신쪽지함</a></li>
						</ul>
					</div>
					<div class="content">
						<div class="form">
							<div class="form_header cf">
									<h3>메세지 보내기</h3>
									<p>message send</p>
							</div>
							<div class="form_content" >
								<article>
									<div id="message_box"  class="cf">
										<form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
											<div id="write_box" class="cf">
												<ul>
													<!-- <li> -->
														<div class="col1"><img src="images/user.png" alt="보내는사람"/><span>보내는 사람 :</span> </div>
														<div class="col2"><span><?=$userid?></span></div>
														<div class="col3"><p>*보내는 사람의 아이디 입니다. </p></div>
													</li>
													<li>
														<div class="col1"><img src="images/send.png" alt="보내는사람"/><span>수신 아이디 :</span> </div>
														<div class="col2"><input name="rv_id" type="text" placeholder="Id" class="guideText"></div>
														<div class="col3"><p>*수신자의 아이디를 정확하게 입력해주세요!</p></div>
													</li>
													<li>
														<div class="col1"><img src="images/free-icon-search-4484497.png" alt="보내는사람"/><span>제목 :</span> </div>
														<div class="col2"><input name="subject" type="text" placeholder="제목을 입력해주세요!" class="guideText"></div>
														<div class="col3"><p>*제목을 입력해주세요!(특수문자제외)</p></div>
													</li>
													<li id="text_area">
														<div class="col1"><img src="images/free-icon-smartphone-3629055.png" alt="보내는사람"/><span>내용 :</span> </div>
														<div class="text_area">
															<textarea name="content" placeholder="내용을 입력해주세요" class="guideText" ></textarea>
														</div>
													</li>
												</ul>
												<button class="cf" type="button" onclick="check_input()">보내기</button>
											</div>
										</form>
									</div> <!-- message_box -->
								</article>
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