<?php
include 'connection.php';

	//Query for delete
	$sql = "DELETE FROM `employee`WHERE `id`='" . $_GET["id"] . "'";
	$query = mysqli_query($conn,$sql);
	if($sql)
	{
		header("location:view.php");
	}
	else{
		echo'The data has not been deleted';
	}


?>