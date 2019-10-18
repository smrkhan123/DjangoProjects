<?php
session_start();
if(isset($_SESSION['id'])){
	echo "";
}
else{
	
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');

$id=$_GET['sid'];
include ('../dbcon.php');
$sql="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($conn,$sql);
$run=mysqli_fetch_assoc($data);

?>

<div align="center">
<form action="updatedata.php" method="POST" enctype="multipart/form-data">
	<table style="border:1px solid black;">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" value="<?php echo $run['rollno']; ?>" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" value="<?php echo $run['name']; ?>" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value="<?php echo $run['city']; ?>" required></td>
		</tr>
		<tr>
			<th>Parent's Contact</th>
			<td><input type="tel" name="parentcontact" value="<?php echo $run['parentcontact']; ?>" required></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="text" name="standard" value="<?php echo $run['standard']; ?>" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="img" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="hidden" name="sid" value="<?php echo $run['id'] ?>"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>
	</table>
	
</form>
</div>