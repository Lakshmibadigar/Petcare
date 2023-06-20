<?php
include('petdetails.html');
	@$username = $_GET['username'];
	@$address = $_GET['address'];
	@$countnum1 = $_GET['countnum1'];
    @$countnum2 = $_GET['countnum2'];
	@$email = $_GET['email'];


	$conn=new mysqli("localhost","root","","petcare");
	$query="INSERT INTO `userdetails`(`username`, `address`,`countnum1`, `countnum2`, `email`) VALUES ('$username','$address','$countnum1','$countnum2','$email')";
	$mysql_result=mysqli_query($conn,$query);
	if($mysql_result)
	{

		echo ' header("Location: petdetails.html")';
	}
	else
	{
		echo 'alert("User details not saved ")';
	}
?>