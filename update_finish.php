<?php 	session_start(); ?>
<?php
error_reporting(0);
$id = $_SESSION['Acc'];


$db_Password = $_POST["pw"];
$db_ConfrimPWD = $_POST["confirm"];
$db_Name = $_POST["name"];
$db_Phone = $_POST["phone"];
$db_Email = $_POST["email"];
$db_Birthday = $_POST["birthday"];
$db_Skype = $_POST["skype"];
$db_Gradyear = $_POST["gradyear"];

$db_Sport = $_POST["sport"];

$db_Media_FB = $_POST["media_FB"];
$db_Media_IG = $_POST["media_IG"];


$db_Media_IG_tag ;
$db_Media_FB_tag ;


$link = @mysqli_connect('localhost','root','','test');

if(!$link) die("connect wrong");
mysqli_set_charset($link,'utf8');



if($db_Media_FB) {	$db_Media_FB_tag = true;	}
if($db_Media_IG) {	$db_Media_IG_tag = true;	}	

if($db_Password!=null && $db_ConfrimPWD!=null && $db_Name!=null && $db_Phone!=null && $db_Email!=null && $db_Birthday!=null && $db_Skype!=null && $db_Gradyear!=null && $db_Sport!=null && ($db_Media_FB!=null || $db_Media_IG!=null )){
	
	if($db_ConfrimPWD == $db_Password){
		
		$sql = "update register set Password='$db_Password', Name='$db_Name', Phone='$db_Phone', Email='$db_Email', Birthday='$db_Birthday', Skype='$db_Skype', GradYear='$db_Gradyear', Sports='$db_Sport[0]', Media_FB='$db_Media_FB_tag', Media_IG='$db_Media_IG_tag' where Account='$id'";

		if(mysqli_query($link,$sql))
		{
			echo "success<br>";
			echo "<input type=\"button\" name=\"return\" value=\"返回\" onclick=\"location.href='test.php'\"/>";
			
		}
		else{
			echo "fail";
		}

		//$result = mysqli_query($link,$sql) or die(mysql_error());
		//echo "----------------------";
		//mysqli_close($link);
		//header( "location:Register.php");
	}
	else{
		echo "Your password confirmed wrong.";
	}
}
else{
	echo "Missing Value.";
}


/*
$sql = "INSERT INTO register(Account, Password, Name, Phone, Email, Birthday, Skype, GradYear,Sports,Media_FB,Media_IG) VALUES ('$db_Account', '$db_Password', '$db_Name', '$db_Phone', '$db_Email', '$db_Birthday', '$db_Skype', '$db_Gradyear','$db_Sport[0]','$db_Media_FB_tag','$db_Media_IG_tag')";

$result = mysqli_query($link,$sql) or die(mysql_error());

mysqli_close($link);
header( "location:Register.php");

*/
?>