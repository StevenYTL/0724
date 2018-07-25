<?php
	session_start();
	$_SESSION['Acc'] = $_POST["account"];
	$_SESSION['pw'] = $_POST["pw"];

	$aaa = $_SESSION['Acc'];
	$bbb = $_SESSION['pw'];
 	
	$link = @mysqli_connect('localhost','root','','test') or die("no connection");
	mysqli_set_charset($link,'utf8');

	
	$seldb = mysqli_select_db($link,"test") or die("not found DB");
	$sql = "SELECT * FROM register WHERE Account = '$aaa' AND Password = '$bbb'";

	$result = mysqli_query($link, $sql);

	$row_result = mysqli_fetch_assoc($result);

	if(isset($_SESSION['Acc']) && isset($_SESSION['pw'])){
		
		$admin1 = $row_result["Account"];
		$admin2 = $row_result ["Password"];

		if( $_SESSION['Acc'] == $admin1 && $_SESSION['pw'] == $admin2 ){
			echo "welcome!"."<br>";

			echo "Your Account : ".$row_result["Account"]."<br>";
			echo "Your Password : ".$row_result["Password"]."<br>";
			echo "Your Name : ".$row_result["Name"]."<br>";
			echo "Your Phone : ".$row_result["Phone"]."<br>";
			echo "Your email : ".$row_result["Email"]."<br>";
			echo "Your Birthday : ".$row_result["Birthday"]."<br>";
			echo "Your Skype : ".$row_result["Skype"]."<br>";
			echo "Your GradYear : ".$row_result["GradYear"]."<br>";
			echo "Your fav Sports : ".$row_result["Sports"]."<br>";
			echo "Your Media : ";
			if($row_result["Media_FB"] == 1) {echo "FB ";}
			if($row_result["Media_IG"] == 1) {echo "IG";}
			echo "<br><br>";
        	echo "<input type=\"button\" name=\"logout\" value=\"登出\" onclick=\"location.href='test.php'\"/><br>";
        	echo "<input type=\"button\" name=\"add\" value=\"新增\" onclick=\"location.href='register.php'\"/>";
        	echo "<input type=\"button\" name=\"modify\" value=\"修改\" onclick=\"location.href='update.php'\"/>";
        	echo "<input type=\"button\" name=\"delete\" value=\"刪除\" onclick=\"location.href='delete.php'\"/>";

		}
		else{
			echo "Wrong Password OR Haven't Register.";
		}
	}


?>