<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'jiwon';
		$pw = '4692';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $memberhw_name = $_POST['name'];
		$memberhw_email = $_POST['email'];
	    $memberhw_pw1 = $_POST['pw1'];
		$memberhw_nickname = $_POST['nickname'];

		$sql = "insert into memberhw (
				member_name,
				member_email,
				member_pw1,
				member_nickname
		)";
		
		$sql = $sql. "values (
				'$memberhw_name',
				'$memberhw_email',
				'$memberhw_pw1',
				'$memberhw_nickname'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입이 완료되었습니다. 로그인 화면으로 이동합니다.")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "sign.html";
</script>

</html>