<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE EMPLOYEE Details</title>
</head>

<!--CSS TAG-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--js tag-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
	$sql = "SELECT * FROM `employee` WHERE id ={$_REQUEST['id']}";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result))
	{
	?>
<body><br>
	
<div class="col-md-8 container">
	<h1 class="alert alert-info text-warning">UPDATE EMPLOYEE Details</h1><br>
	<form action="updated.php" method="POST">
		<input type="hidden" name="empid" value="<?php echo $row['id'];?>">

		 Name: <input class="form-control" type="text" name="fname" value="<?php echo $row['fname'];?>" required><br>
		Email:<input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>"required><br>
		
		Contact:<input type="number" name="phone"
		class="form-control"value="<?php echo $row['phone'];?>"required><br>
	<?php
	}
	?>
		<button name="EDIT" class="btn btn-primary">Update Record</button>
		
	</form>
</div>
</body>
</html>