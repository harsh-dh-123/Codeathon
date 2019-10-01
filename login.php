<!DOCTYPE HTML>
<html>  
<head>
	<script type="text/javascript">
var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
//var RE_PASSWORD = /^[A-Za-z\d]{6,8}$/;
var RE_CONTACT = /^[0-9]{10}$/;
function validate()
{
 var email = form.email.value;
 //var password = form.pass.value;
 var contact = form.mob.value;
 if (!RE_EMAIL.test(email)) { alert( "You must enter a valid email address."); }
// if (!RE_PASSWORD.test(password)) { alert( "You must enter a valid password."); }
 if (!RE_CONTACT.test(contact)) { alert( "You must enter a valid contact."); }
 }
</script>
</head>
<body>
<form>
<input type = text name ="input1">	
</form>
<form action="disp.php" method="get" name="form" onsubmit="return validate()">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
Address: <input type="text" name="address"><br>
E-mail: <input type="text" name="email"><br>
Mobile: <input type="text" name="mob"><br>
Blood Group: <input type="text" name="BG"><br>
Sex: <input type="text" name="sex"><br>
<input type="submit" value="submit">
</form>
</body>
</html>
