<?php
	session_start();
	$_SESSION['Acc']="11";
	$_SESSION['Pwd']="11";
?>

<hmtl> 
<head> 
<title>註冊頁面</title> 

<script language="javascript"><!-- 
	function check() { 
	
	if ((document.f1.elements[0].value == "") || (document.f1.elements[1].value == "") || (document.f1.elements[2].value == "")|| (document.f1.elements[3].value == "")|| (document.f1.elements[4].value == "")|| (document.f1.elements[5].value == "")|| (document.f1.elements[6].value == "")|| (document.f1.elements[7].value == "")|| (document.f1.elements[8].value == "")|| (document.f1.elements[9].value == "")  || (document.f1.elements[10].checked == false && document.f1.elements[11].checked == false )   ){ 
	alert("Missing Value"); 
	return false; 
	} 
	return true; 
	} 
// --></script> 


<script language="javascript">
function pwdCheck(){

	if(document.f1.elements[1].value != document.f1.elements[2].value){
		document.getElementById('p1').style.display='';
		document.getElementById('p2').style.display='none';
	}
	else if(document.f1.elements[1].value == document.f1.elements[2].value){
		document.getElementById('p2').style.display='';
		document.getElementById('p1').style.display='none';
	}
	if(document.f1.elements[2].value == ""){
		document.getElementById('p2').style.display='none';
		document.getElementById('p1').style.display='none';
	}
}
</script>

</head> 
<body>  

	<form name="f1" method="post" action="RegisterFinish.php" onsubmit="return check();"> 
		Account: <input type="text" name="account" /><br />

		Password: <input type="password" name="pwd"><br />
		ConfirmPWD: <input type="password" name="confirm" onblur="pwdCheck()">
		<img src="2.jpg" width="20" <div id="p1" style = "display:none"> </div>  
		<img src="3.jpg" width="20" <div id="p2" style = "display:none"> </div> 
		<br />
		


		Name: <input type="text" name="name" /><br /> 
		Phone: <input type="text" name="phone" /><br /> 
		Email: <input type="text" name="email" /> <br /> 
		Birthday: <input type="text" name="birthday" />example : 19950101<br /> 
		Skype: <input type="text" name="skype" /><br /> 
		Gradyear: <input type="text" name="gradyear" /><br /> 
		Sports:
			<select id="sport" name="sport[]" size="3" multiple="multiple"> 
			<option>Basketball</option> 
			<option>Volleyball</option> 
			<option>Badminton</option> 
			<option>Tennis</option>
			<option>Soccer</option> 
			</select> <br /> 
		Media: 
			<input type="checkbox" name="media_FB" value="FB" />FB 
			<input type="checkbox" name="media_IG" value="IG" />IG <br />

		<input type="submit" /> <input type="reset" />
		<input type ="button" onclick="location.href='test.php'" value="BackToLogin"></input>
	</form>



</body> 
</html>