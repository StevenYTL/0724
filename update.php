<?php session_start(); ?>
<?php
	$link = @mysqli_connect('localhost','root','','test');

	if(!$link) die("connect wrong");
	mysqli_set_charset($link,'utf8');

	if($_SESSION['Acc'] != null){
		$id = $_SESSION['Acc'];
		echo $id;

		$sql = "SELECT * FROM register WHERE Account = '$id'" ;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_row($result);
		
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        //echo "Account：<input type=\"text\" name=\"Acc\" value=\"$row[0]\" /> <br>";
        echo "Account：$row[0]<br>";
        echo "Password：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br>";
        echo "ConfirmPWD：<input type=\"password\" name=\"confirm\" value=\"$row[1]\" /> <br>";
        echo "Name：<input type=\"text\" name=\"name\" value=\"$row[2]\" /> <br>";
        echo "Phone：<input type=\"text\" name=\"phone\" value=\"$row[3]\" /> <br>";
        echo "Email：<input type=\"text\" name=\"email\" value=\"$row[4]\" /> <br>";
        echo "Birthday：<input type=\"text\" name=\"birthday\" value=\"$row[5]\" /> <br>";
        echo "Skype：<input type=\"text\" name=\"skype\" value=\"$row[6]\" /> <br>";
        echo "GradYear：<input type=\"text\" name=\"gradyear\" value=\"$row[7]\" /> <br>";

        echo "Sports:<select id=\"sport\" name=\"sport[]\" size=\"3\" multiple=\"multiple\"> ";
		echo "<option>Basketball</option> ";
		echo "<option>Volleyball</option> ";
		echo "<option>Badminton</option> ";
		echo "<option>Tennis</option>";
		echo "<option>Soccer</option> ";
		echo "</select> <br /> ";


		echo "Media:<input type=\"checkbox\" name=\"media_FB\" value=\"FB\" />FB ";
		echo "<input type=\"checkbox\" name=\"media_IG\" value=\"IG\" />IG <br />";


        echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
        
        echo "</form>";


	}
	else{
		echo "NO AUTHORITY";
	}



?>

