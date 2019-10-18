<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body>
<h3 align="right" style="margin-right: 20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome To Student Managment System</h1>

<form method="post" action="showstudent.php">
<table style="border:1px solid black" width="30%" align="center">
	<tr>
		<td colspan="2" style="border:1px solid black;text-align: center;">Student Information</td>
	</tr>
	<tr>
		<td style="border:1px solid black">Choose Standard</td>
		<td style="border:1px solid black">
			<select name="std">
				<option value='1'>1st</option>
				<option value='2'>2nd</option>
				<option value='3'>3rd</option>
				<option value='4'>4th</option>
				<option value='5'>5th</option>
				<option value='6'>6th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td style="border:1px solid black">Enter Roll No</td>
		<td style="border:1px solid black">
			<input type="text" name="roll" required>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="border:1px solid black" align="center"><input type="submit" name="submit" value="Show Info"></td>
	</tr>
</table>
</form>
</body>
</html>
