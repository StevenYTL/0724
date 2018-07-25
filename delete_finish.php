<?php session_start(); ?>
<?php
error_reporting(0);
$id = $_SESSION['Acc'];


$d_Name = $_POST["name_d"];
$d_Phone = $_POST["phone_d"];
$d_Email = $_POST["email_d"];
$d_Birthday = $_POST["birthday_d"];
$d_Skype = $_POST["skype_d"];
$d_Gradyear = $_POST["gradyear_d"];
$d_Sport = $_POST["sport_d"];
$d_Media = $_POST["media_d"];


$link = @mysqli_connect('localhost','root','','test');

if(!$link) die("connect wrong");
mysqli_set_charset($link,'utf8');



$tag = 0;


	if($d_Name == ' '){
		$tag = 1;
		$sql = "update register set Name='$d_Name' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Phone == ' '){
		$tag = 1;
		$sql = "update register set Phone='$d_Phone' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Email == ' '){
		$tag = 1;
		$sql = "update register set Email='$d_Email' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Birthday == ' '){
		$tag = 1;
		$sql = "update register set Birthday='$d_Birthday' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Skype == ' '){
		$tag = 1;
		$sql = "update register set Skype='$d_Skype' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Gradyear == ' '){
		$tag = 1;
		$sql = "update register set GradYear='$d_Gradyear' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Sport == ' '){
		$tag = 1;
		$sql = "update register set Sports='$d_Sport' where Account='$id'";
		mysqli_query($link,$sql);
	}
	if($d_Media == ' '){
		$tag = 1;
		$sql = "update register set Media_FB='$d_Media', Media_IF='$d_Media' where Account='$id'";
		mysqli_query($link,$sql);
	}


if($tag == 1){
	echo "success<br>";
	echo "<input type=\"button\" name=\"return\" value=\"返回\" onclick=\"location.href='test.php'\"/>";
}
else{
	echo "you did not delete anything.";
	echo "<input type=\"button\" name=\"return\" value=\"返回\" onclick=\"location.href='delete.php'\"/>";
}

?>