<html>
<head><title>Music For You</title></head><body>
<form method="post" action="delete_playlist.php">
	    <br>삭제 번호 입력&nbsp;<input type="text" name="b1">&nbsp;
	    <input type="submit" value="확인">
	</form>
</body>
</html>

<?php 
	$con = mysqli_connect("localhost","jiwon","4692","sungkyul");
    $b1_d = $_POST["b1"];

    $sql = "DELETE FROM playlist WHERE number=$b1_d";
    mysqli_query($con, $sql);

    $sql = "SELECT * FROM playlist";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

    	echo"<br>";
    	echo $row['number'].".   ".$row['songname']." - ";
        echo $row['singer']."<br><br>";
        echo "----------------------------------------------- <br>";
     

    }
    print "<br><a href='mfumain.html'>장르 선택으로 돌아가기</a>";
 ?>

<script>
	
</script>