<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="Generator" content="Notepad++"/>	
	<title>안양시립도서관</title>
	<!-- css -->
	<link rel="stylesheet" href="css/style.css"/>
	<!-- jquery -->
    <script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/script.js"></script>
	<!-- plugin -->
	<script src="js/gray.js"></script>
    <script>
	window.open("images/imformation.png", "", "resizable=no, toolbar=no, width=400, height=400")
    </script>	
	<script>
	var tid;
	var cnt = parseInt(20);//초기값(초단위)
	function counter_init() {
		tid = setInterval("counter_run()", 1000);
	}

	function counter_reset() {
		clearInterval(tid);
		cnt = parseInt(60);
		counter_init();
	}

	function counter_run() {
		document.getElementById("counter").innerText = time_format(cnt);
		cnt--;
		if(cnt < 0) {
			clearInterval(tid);
			self.location = "sub6/sub6.html";
		}
	}
	function time_format(s) {
		var nHour=0;
		var nMin=0;
		var nSec=0;
		if(s>0) {
			nMin = parseInt(s/60);
			nSec = s%60;

			if(nMin>60) {
				nHour = parseInt(nMin/60);
				nMin = nMin%60;
			}
		} 
		if(nSec<10) nSec = "0"+nSec;
		if(nMin<10) nMin = "0"+nMin;

		return ""+nHour+":"+nMin+":"+nSec;
	}
	</script>
	<script>
		counter_init();
	</script>
</head>
<body> 
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<?php include "main.php";?>
	</section> 
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>