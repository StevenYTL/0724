<?<?php  ?>session_start();	?>

<hmtl> 
<head> 
<title>登入頁面</title> 
Log In ..  <br /> 

<script language="javascript"><!-- 
	function check() { 
	if ((document.f1.elements[0].value == "") || (document.f1.elements[1].value == "")){ 
	alert("請輸入帳號密碼"); 
	return false; 
	} 
	return true; 
	} 
// --></script> 


</head> 
<body> 

	<form name="f1" method="post" action="Confirm.php" onsubmit="return check();"> 
		Account: <input type="text" name="account" /><br /> 
		Password: <input type="password" name="pw"><br />  
		<input type="submit" value="Login" /> <input type="reset"/> 
		<input type="button" value="Register" onclick="location.href='Register.php'">
	</form>
	
</body> 
</html>