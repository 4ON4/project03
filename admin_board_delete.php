<?php
	include "define.php";

	session_start();
	if(isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
	else $userlevel = "";

	if ($userlevel != 1)
	{
		echo("
			<script>
			alert('관리자가 아닙니다. 회원삭제는 관리자만 가능합니다.');
			history.go(-1)
			</script>
		");
		exit;
	}

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

	for($i=0; $i<count($_POST["item"]); $i++){
		$num = $_POST["item"][$i];

	$sql = "select * from board where num =$num";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	$copied_name = $row["file_copied"];

		if($copied_name){
			$file_path = "./data/".$copied_name;
			unlink($file_path);
		}

		$sql = "delete from board where num = $num";
		mysqli_query($con, $sql);
	}

	mysqli_close($con);

	echo "
		<script>
		location.href = 'admin.php';
		</script>
	";

?>