<?php session_start(); ?>
<script> 
	function del() { 
		var msg = "確定刪除嗎？！"; 
 		if (confirm(msg)==true){ 
  			return true; 
 		}
 		else{ 
  		return false; 
 		}
 	} 
</script>

<?php
	$link = @mysqli_connect('localhost','root','','test');

	if(!$link) die("connect wrong");
	mysqli_set_charset($link,'utf8');

 

	if($_SESSION['Acc'] != null){
		$id = $_SESSION['Acc'];

		$sql = "SELECT * FROM register WHERE Account = '$id'" ;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_row($result);
		
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\" onsubmit=\"return del();\">";
        echo "Account：$row[0] <br>";
        echo "Password：$row[1]<br>";
        
        

        echo "<input type=\"checkbox\" name=\"name_d\" value=\" \" />";
        echo "Name：$row[2]<br>";
        
		echo "<input type=\"checkbox\" name=\"phone_d\" value=\" \" />";
        echo "Phone：$row[3] <br>";

        echo "<input type=\"checkbox\" name=\"email_d\" value=\" \" />";
        echo "Email：$row[4]<br>";

        echo "<input type=\"checkbox\" name=\"birthday_d\" value=\" \" />";
        echo "Birthday：$row[5]<br>";

        echo "<input type=\"checkbox\" name=\"skype_d\" value=\" \" />";
        echo "Skype：$row[6] <br>";

        echo "<input type=\"checkbox\" name=\"gradyear_d\" value=\" \" />";
        echo "GradYear：$row[7] <br>";

        echo "<input type=\"checkbox\" name=\"sport_d\" value=\" \" />";
        echo "Fav Sports : $row[8]<br>";

        echo "<input type=\"checkbox\" name=\"media_d\" value=\" \" />";
        echo "Media : ";
			if($row[9] == 1) {echo "FB";}
			if($row[10] == 1) {echo "IG";}
		
		echo "<br><br>";
        echo "<input type=\"submit\" name=\"delete\" value=\"刪除\" />";
        
        echo "</form>";


	}
	else{
		echo "NO AUTHORITY";
	}



?>