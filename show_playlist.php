<html>
<head><title>Music For You</title></head><body>
</body>
</html>

<?php 

	$con = mysqli_connect("localhost","jiwon","4692","sungkyul");
	$sql = "SELECT * FROM playlist"; 
    $result = mysqli_query($con, $sql);
        
    while($row = mysqli_fetch_assoc($result)) {

        echo"<br>";
    	echo $row['number'].".   ".$row['songname']." - ";
        echo $row['singer']."<br><br>";
        echo "----------------------------------------------- <br>";

     
    }
	
    print "<br><a href='mfumain.html'>장르 선택으로 돌아가기</a><br>";
    print "<br><a href='delete_playlist.php'>재생목록 삭제하기</a>";

?>