<?php session_start(); ?>
<?php
error_reporting(0);
$db_Account = $_POST["account"];
$db_Password = $_POST["pwd"];
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


$sql = "SELECT * FROM register where Account = '$db_Account'";
$result_r = mysqli_query($link,$sql);
$row_r = @mysqli_fetch_array($result_r);
if ( $row_r["Account"] == $db_Account)
{
	echo '帳號重複';
	//echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';	
}
	 

else if($db_Account!=null && $db_Password!=null && $db_ConfrimPWD!=null && $db_Name!=null && $db_Phone!=null && $db_Email!=null && $db_Birthday!=null && $db_Skype!=null && $db_Gradyear!=null && $db_Sport!=null && ($db_Media_FB!=null || $db_Media_IG!=null )){
	
	if($db_ConfrimPWD == $db_Password){
		$sql = "INSERT INTO register(Account, Password, Name, Phone, Email, Birthday, Skype, GradYear,Sports,Media_FB,Media_IG) VALUES ('$db_Account', '$db_Password', '$db_Name', '$db_Phone', '$db_Email', '$db_Birthday', '$db_Skype', '$db_Gradyear','$db_Sport[0]','$db_Media_FB_tag','$db_Media_IG_tag')";

		$result = mysqli_query($link,$sql) or die(mysql_error());

		mysqli_close($link);
		header( "location:Register.php");
	}
	else{
		echo "Your password confirmed wrong.";
	}
}
else{
	echo "Missing Value!!!!!.";
}


?>