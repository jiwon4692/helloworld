<?php
	$con = mysqli_connect("localhost","jiwon","4692","sungkyul");
	$name;
    $mess;
    

	$sql = "insert into playlist (
			songname,
            singer
	)";
	
	$sql = $sql. "values (
			'Crazy In Love (Feat. JAY Z)',
			'Beyonce'
	)";

	if($con->query($sql)){ 
	  echo '<script>alert("재생목록에 추가되었습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "list_Energy.html";
</script>