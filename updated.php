<?php
require 'connection.php';
 if(isset($_POST['EDIT'])){

 	//echo "Updated";
 	$empid = $_POST['empid'];
 	$name = $_POST['fname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	//print_r($empid);

	//Update query
	$sql = "UPDATE `employee` SET `fname`='$name',`email`='$email',`phone`='$phone'WHERE `id`='$empid'";
	$update_query = mysqli_query($conn,$sql);

	if($update_query)
	{
		
		header("location:view.php");
		echo "Update Successfully";
	}
	else{
		echo "The data has not been updated";
	}
 }

?>