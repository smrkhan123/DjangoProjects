<?php
session_start();
if(isset($_SESSION['id'])){
	echo "";
}
else{
	header('location:../login.php');
}
?>
<?php include('header.php') ?>
<div class="main1">
	<a href="../logout.php" class="logout">Logout</a>
	<h1>Welcome To The Admin Dashboard</h1>
</div>
<div class="table1">
	<table style="border:1px solid black" width="90%" align="center">
		<tr>
			<td style="border:1px solid black">1. </td><td style="border:1px solid black"><a href="addstudent.php">Insert Student</a></td>
		</tr>
		<tr>
			<td style="border:1px solid black">2. </td><td style="border:1px solid black"><a href="updatestudent.php">Update Student</a></td>
		</tr>
		<tr>
			<td style="border:1px solid black">3. </td><td style="border:1px solid black"><a href="deletestudent.php">Delete Student</a></td>
		</tr>
	</table>
</div>
</body>
</html>