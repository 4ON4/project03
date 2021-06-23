<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="Generator" content="Notepad++"/>	
	<title>안양시립도서관</title>
	<link rel="shortcut icon" href="images/ico_favicon.png">		
	<!-- css -->
	<link rel="stylesheet" href="css/common.css"/>
	<link rel="stylesheet" href="css/member_form.css"/>
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
          "left=700,top=300,width=353px,height=240px,scrollbars=no,resizable=no");
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
							<li><a href="#">도서관에 문의하기<span>-</span></a></li>							
						</ul>
					</div>
				</div> <!-- id="left_content" -->
				<div id="right_content">
					<div class="login_type">
	    			<div class="text_box">
	    				<h2>안양시립도서관 회원가입 안내</h2>
	    				<p>도서관 회원가입을 위해 ‘안양시청 통합회원’으로 가입 후, </p>
	    				<p>도서관 신규 회원으로 등록하는 절차가 필요합니다.아래 안내에 따라 회원가입 절차를 진행 해주시기 바랍니다.</p>
	    			</div>						
						<div class="type_wrap">
							<div class="type1">
								<h2>STEP1</h2>
								<div class="type_header"><h3>안양시 통합회원 회원가입</h3></div>
								<p>아래 버튼을 클릭하여 <br/>안양시 통합회원가입 페이지에서 <br/>회원가입 절차를 진행해주세요.</p>
								<button type="button1" class="button1">간편 회원가입</button>
							</div>
							<div class="type2">
								<h2>STEP2</h2>
								<div class="type_header"><h3>도서관 신규회원 등록</h3></div>
								<p>안양시 통합회원가입 완료 후<br/> 아래 버튼을 클릭하여, <br/>가입하신 계정정보로 최초 1회만 로그인하시면 <br/>신규회원 등록이 완료됩니다</p>
								<button type="button2" class="button2">간편 회원가입</button>
							</div>
							</div>
						</div>
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
								<div class="imfornmtion_box">
									<ul>
										<li>안양시 통합회원으로 가입한 경우 <span>도서관신규회원등록(새창)</span> 페이지에서 최초 1회 로그인 후 도서관 홈페이지 이용이 가능합니다.</li>
										<li>로그인이 안되시는 경우 한/영 키와 Caps Lock 키가 눌러져 있지 않은지 확인하세요.</li>
										<li>계속해서 로그인이 안되시는 경우 관리자에게 문의하시기 바랍니다.</li>
									</ul>
								</div>				       	
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
		</div>
	</section>

	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>