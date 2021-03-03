
<html>
<style>
	table,form,input,textarea,label,td,tr
	{
		text-align:center;
		
		margin:5px;


	}

</style>
<body>
<form method="post" action="<?php echo base_url()?>main/regist">
	<table>
<tr><td>Name:</td><td><input name="fname" type="text" ></td></tr>
<tr><td>Address:</td><td><textarea rows="5" columns="40" name="address"></textarea></td></tr>
<tr><td>Gender:</td><td><input type="radio" value="male" name="gender" id="male"></td>
<label  for="male"><td>male</td></label>
<td><input type="radio" value="female" name="gender" id="female"></td>
<label  for="female"><td>female</td></tr></label>
<tr><td>Age:</td><td><input type="text" name="age"></td></tr>

<tr><td>Email-id</td><td><input type="email" name="emailid"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" value="register"></td></tr>
</table>

</form>
</html>
</body>