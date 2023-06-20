<?php
include('userdetails.html');
	@$name = $_GET['name'];
	@$phnumber = $_GET['phnumber'];
	@$email = $_GET['email'];
	@$password = $_GET['password'];


	$conn=new mysqli("localhost","root","","petcare");
	$query="INSERT INTO `registration`(`name`, `phnumber`, `email`, `password`) VALUES ('$name','$phnumber','$email','$password')";
	$mysql_result=mysqli_query($conn,$query);
	if($mysql_result)
	{
		echo "header('Location:url(userdetails.html)');";
	}
	else
	{
		echo 'alert(" registration unsuccessful ")';
	}
?>