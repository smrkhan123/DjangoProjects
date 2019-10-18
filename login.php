<?php
session_start();
if(isset($_SESSION['id'])){
	
	header('location:admin/admindash.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<h1 align="center">Admin Login</h1>

<form method="post" action="login.php">
<table style="border:1px solid black" width="30%" align="center">
	<tr>
		<td colspan="2" style="border:1px solid black;text-align: center;">Login Here</td>
	</tr>
	<tr>
		<td style="border:1px solid black">Username: </td>
		<td style="border:1px solid black">
			<input type="text" name="uname" required>
		</td>
	</tr>
	<tr>
		<td style="border:1px solid black">Password: </td>
		<td style="border:1px solid black">
			<input type="password" name="pass" required>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="border:1px solid black" align="center"><input type="submit" name="submit" value="Login"></td>
	</tr>
</table>
</form>
</body>

</html>

<?php
	if(isset($_POST['submit'])){
		$username=$_POST['uname'];
		$pass=$_POST['pass'];
		include('dbcon.php');
		$qry="SELECT * FROM admin WHERE username='$username' AND password='$pass'";
		$run=mysqli_query($conn,$qry);
		$row=mysqli_num_rows($run);
		if ($row<1){
			?>
			<script>
				alert('Username Or Password did not matche!');
				window.open('login.php','_self');
			</script>
			<?php
			
		}
		else{
			
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			session_start();
			$_SESSION['id']=$id;
			header('location:admin/admindash.php');
		}
	}
?>