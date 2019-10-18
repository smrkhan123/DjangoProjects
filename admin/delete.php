<?php 
$id=$_REQUEST['sid'];
include('../dbcon.php');
$sql="DELETE FROM student WHERE id='$id'";
$run=mysqli_query($conn,$sql);
if ($run == True) {
	?>
	<script>
		window.alert('Data Deleted Successfully');
		window.open('deletestudent.php','_self');
	</script>
	<?php
}

?>