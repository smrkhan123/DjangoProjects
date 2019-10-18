<?php
session_start();
if(isset($_SESSION['id'])){
	echo "";
}
else{
	
	header('location:../login.php');
}
?>
<?php include('titlehead.php');?>
<div align="center">
<form action="addstudent.php" method="POST" enctype="multipart/form-data">
	<table style="border:1px solid black;">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Student's Roll Number" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Student's Full Name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter Student's City" required></td>
		</tr>
		<tr>
			<th>Parent's Contact</th>
			<td><input type="tel" name="parentcontact" placeholder="Enter Student's Contact" required></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="text" name="standard" placeholder="Enter Student's Standard" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="img" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>
	</table>
	
</form>
</div>


<?php
if(isset($_POST['submit'])){
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$parentcontact=$_POST['parentcontact'];
	$standard=$_POST['standard'];
	$imgname=$_FILES['img']['name'];
	$tempname=$_FILES['img']['tmp_name'];

	move_uploaded_file($tempname, "../dataimg/$imgname");
	$qry="INSERT INTO student VALUES (id,'$rollno','$name','$city','$parentcontact','$standard','$imgname')";
	$run=mysqli_query($conn,$qry);
	if ($run == True){
		?>
		<script>
		alert('Data Added Successfully');
		</script>
		<?php 
	}

}
?>