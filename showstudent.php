<?php
if(isset($_POST['submit'])){
	$standard=$_POST['std'];
	$rollno=$_POST['roll'];
	include('dbcon.php');
	$sql="SELECT * FROM student WHERE rollno='$rollno' AND standard='$standard'";
	$run=mysqli_query($conn,$sql);
	if (mysqli_num_rows($run)>0){
		$data=mysqli_fetch_assoc($run);
		?>
		<div>
		<table border="1" style="margin: 0 auto; width: 50%;height: 50%">
			<tr>
				<th colspan="3"><h1>Student Details</h1></th>
			</tr>
			<tr>
				<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="width:250px; height:200px;"></td>
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td><?php echo $data['standard']; ?></td>
			</tr>
			<tr>
				<th>Parent's Contact</th>
				<td><?php echo $data['parentcontact']; ?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city']; ?></td>
			</tr>
		</table>
		</div>

		<?php
	}
	else{
		echo "No Records Are Found";
	}
}

?>