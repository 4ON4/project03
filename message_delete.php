<meta charset="UTF-8">

<?php
   define('DBuser','aze624');
   define('DBpass','ay2111!!');
   define('DBname','aze624');

   $num = $_GET["num"];
   $mode = $_GET["mode"];
   
   $con = mysqli_connect("localhost",DBuser,DBpass,DBname);
   $sql = "delete from message where num=$num";
   mysqli_query($con,$sql);

   mysqli_close($con); //DB 연결 끊기
   
   if($mode == "send")
	$url = "message_box.php?mode=send";
   else
	$url = "message_box.php?mode=rv";
	
	echo "
		<script>
			location.href='$url';
		</script>
	";
   
   
?>