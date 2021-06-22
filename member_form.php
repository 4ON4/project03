<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="Generator" content="Notepad++"/>	
	<title>안양시립도서관</title>
	<!-- css -->
	<link rel="stylesheet" href="css/memberform.css"/>
	<!-- jquery -->
  <script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/gray.js"></script>
	<!-- plugin -->

<script>
   function check_input()
   {
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
</head>
<body> 
	<header>
    	<?php include "header2.php";?>
  </header>
	
	<section id="section">
		<div id="contentsWrap">
			<div class="content_header">
				<div class="header_wrap">
					<div class="function1">
						<h2>회원가입</h2>
						<ul>
							<li><a href="../index.html">홈</a></li>
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
						<div class="left_menu_text"><span>회원가입</span></div>
						<ul>
							<li><a href="#">로그인<span>-</span></a></li>
							<li><a href="#">아이디 조회<span>-</span></a></li>
							<li><a href="#">비밀번호 재발급<span>-</span></a></li>
							<li class="left_active"><a href="../member_form.php">회원가입<span>-</span></a></li>
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content">
					<div class="login_box">
          	<form  name="member_form" method="post" action="member_insert.php">
			    	<div class="form_box">
	    		    	<div class="form id">
					        <div class="col1"><span>아이디</span></div>
					        <div class="col2">
										<input type="text" name="id">
					        </div>  
					        <div class="col3">
					        	<a href="#"><p onclick="check_id()">중복확인</p></a>
					        </div>                 
				       	</div>
				       	<div class="clear"></div>

				       	<div class="form">
					        <div class="col1"><span>비밀번호</span></div>
					        <div class="col2">
										<input type="password" name="pass">
					        </div>                 
				       	</div>
				       	<div class="clear"></div>

				       	<div class="form">
					        <div class="col1"><span>비밀번호 확인</span></div>
					        <div class="col2">
										<input type="password" name="pass_confirm">
					        </div>                 
				       	</div>
				       	<div class="clear"></div>

				       	<div class="form">
					        <div class="col1"><span>이름</span></div>
					        <div class="col2">
										<input type="text" name="name">
					        </div>                 
				       	</div>
				       	<div class="clear"></div>

				       	<div class="form email">
					        <div class="col1"><span>이메일</span></div>
					        <div class="col2">
										<input type="text" name="email1" class="email1" ><span>@</span><input type="text" name="email2" class="email2" >
					        </div>                 
				       	</div>
				       	<div class="clear"></div>
				       	<div class="bottom_line"> </div>
				       	<div class="buttons">
				       			<p onclick="check_input()">저장하기</p>
				       			<p id="reset_button" onclick="reset_form()">취소하기</p>
	           		</div>
			    	</div>

           </form>
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