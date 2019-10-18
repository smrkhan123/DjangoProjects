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
include('titlehead.php');?>
<table align="center" width="80%" border="1" style="margin-top: 10px;">
<form action="updatestudent.php" method="POST">
	<tr>
		<th>Enter Standard: </th>
		<td><input type="number" name="standard" placeholder="Standard"></td>
		<th>Enter Student's Name: </th>
		<td><input type="text" name="name" placeholder="Students Name"></td>
		<td><input type="submit" name="submit" value="search"></td>
	</tr>
</form>
</table>


<table width="80%" align="center" style="margin-top: 10px;">
	<tr style="background-color: brown;color: white;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll No</th>
		<th>Edit</th>
	</tr>
<?php
if(isset($_POST['submit'])){
	include('../dbcon.php');
	$standard=$_POST['standard'];
	$name=$_POST['name'];
	$qry="SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";
	$run=mysqli_query($conn,$qry);
	if(mysqli_num_rows($run)<1){
		echo "<tr><td colspan='5'>No Record Found</td></tr>";
	}
	else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count=$count+1;
			?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['image']; ?>" style="width: 100px;"></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rollno']; ?></td>
				<td><a href="editstudent.php?sid=<?php echo $data['id'] ?>">Edit</a></td>
			</tr>
			<?php
		}
	}
}
 
?>
</table>