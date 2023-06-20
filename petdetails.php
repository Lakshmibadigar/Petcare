<?php
include('facility.html');
	@$pname = $_GET['pname'];
    @$pgender = $_GET['pgender'];
	@$pfood = $_GET['pfood'];
	@$habits = $_GET['habits'];
    @$toilet= $_GET['toilet'];
	@$bites= $_GET['bites'];
    @$medical= $_GET['medical'];


	$conn=new mysqli("localhost","root","","petcare");
	$query="INSERT INTO `petdetails`(`pname`, `pgender`,`pfood`,`habits`, `toilet`, `bites`,`medical`) VALUES ('$pname','$pgender','$pfood','$habits','$toilet','$bites','$medical')";
	$mysql_result=mysqli_query($conn,$query);
	if($mysql_result)
	{
		echo "header('Location:url(facility.html)');";
	}
	else
	{
		echo 'alert("Pet details not saved ")';
	}
?>