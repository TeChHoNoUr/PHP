<?php
//isset function
//name of the button is submit
if(isset($_POST['submit']))
{
	echo "Welcome user:".$_POST['text-name']."<br/>";
} 
if(empty($_POST['text-name'])){
	echo"please filled the data";
}
?>
