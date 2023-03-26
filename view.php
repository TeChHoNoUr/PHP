<?php
require'connection.php';
?>
<title>ADMIN|DASHBOARD</title>
<!--CSS TAG-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--js tag-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="container container-fluid"><br>
	<h1 class="alert alert-info text-dark">Employee details</h1><br>
	<table class="table table-stripped table-hover">
		<thead>
			<th>EMP_SLNO.</th>
			<th>Emp_NAME</th>
			<th>Emp_Email</th>
			<th>EMP_Password</th>
			<th>EMP_Contact</th>
			<th>Action</th>
		</thead>
	<tbody>
<?php
$emp_count=1;
if(isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$password= sha1($_POST['password']);
	$phone = $_POST['phone'];
	//Insert query
	$query = "INSERT INTO employee(fname,email,password,phone)VALUES ('$name','$email','$password','$phone')";
	$sql = mysqli_query($conn,$query);
	if($sql)
	{
		echo"Employee added";
		
	}

	else{
		echo"Employee is not registered";
	}
}
//Data view query in the table
$sql = "SELECT * FROM `employee`";
$view = mysqli_query($conn,$sql);
if(mysqli_num_rows($view)>0){
	while($row = mysqli_fetch_assoc($view))
	{	
		$view_name = $row['fname'];
		$view_email = $row['email'];
		$view_pass = $row['password'];
		$view_phone = $row['phone'];
	
?>
<tr>
	<td><?php echo $emp_count++;?></td>
	<td><?php echo $view_name;?></td>
	<td><?php echo $view_email;?></td>
	<td><?php echo $view_pass;?></td>
	<td><?php echo $view_phone;?></td>
	<td><?php echo"<a href='updatefrm.php?id=".$row['id']."' class='btn btn-warning'>EDIT"?></td>
		<td><?php echo"<a href='deleteprocess.php?id=".$row['id']."' class='btn btn-danger'>DELETE"?></td>
</tr>

<?php
	}
}
else{
	?>
	<tr>
	<td><?php echo "Employee is not registered";?></td>
	</tr>
	<?php
}
?>
</tbody>
</table>

</div>
