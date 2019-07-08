<?php
include("connection.php");
?>
<form method="post" enctype="multipart/form-data">
Enter Name:<input type="text" name="detail" ><br /><br />
Select Image:<input type="file" name="image" ><br /><br />
<input type="submit" name="ok" value="Click" >
</form>

<?php
if(isset($_POST['ok']))
{
	$detail=$_POST['detail'];
	
	$image=$_FILES['image'];
	$name=$image['name'];
	$tmppath=$image['tmp_name'];
	
	$sql="insert into resume values(null,'$detail','$name')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	  echo "<script>alert('File Uplode')</script>";
		move_uploaded_file($tmppath,'files/'.$name);
	}
	
}
?>