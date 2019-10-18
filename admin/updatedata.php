<?php
include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$parentcontact=$_POST['parentcontact'];
	$id=$_POST['sid'];
	$standard=$_POST['standard'];
	$imgname=$_FILES['img']['name'];
	$tempname=$_FILES['img']['tmp_name'];

	move_uploaded_file($tempname, "../dataimg/$imgname");
	$qry="UPDATE student SET rollno='$rollno',name='$name',city='$city',parentcontact='$parentcontact',standard='$standard',image='$imgname' WHERE id='$id'";
	$run=mysqli_query($conn,$qry);
	if ($run == True){
		?>
		<script>
		alert('Data Updated Successfully');
		window.open('updatestudent.php?sid=<?php echo $id; ?>','_self');
		</script>
		<?php 

	}

?>