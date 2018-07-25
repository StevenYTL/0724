<?php session_start(); ?>
<?php

error_reporting(0);
$_SESSION['name'] = $_POST["name"];
$_SESSION['pwd'] = $_POST["pw"];

$_SESSION['name_d'] = $_POST["name_d"];
$_SESSION['phone_d'] = $_POST["phone_d"];
$_SESSION['email_d'] = $_POST["email_d"];
$_SESSION['birthday_d'] = $_POST["birthday_d"];
$_SESSION['skype_d'] = $_POST["skype_d"];
$_SESSION['gradyear_d'] = $_POST["gradyear_d"];
$_SESSION['sport_d'] = $_POST["sport_d"];
$_SESSION['media_d'] = $_POST["media_d"];

echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
echo "<input type=\"submit\" name=\"delete\" value=\"確定刪除嗎?\" />";

echo "</form>";
?>