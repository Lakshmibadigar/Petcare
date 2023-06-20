<?php
include('schedule.php');
@$username = $_GET['username'];
@$pname = $_GET['pname'];
@$datetime = $_GET['datetime'];
@$facility = $_GET['facility'];

	$conn=new mysqli("localhost","root","","petcare");
	$query="INSERT INTO `services`(`username`,`datetime`, `pname`, `facility`) VALUES ('$username','$datetime','$pname','$facility')";
	$mysql_result=mysqli_query($conn,$query);
	if($mysql_result)
	{
        echo '<script>
			header("Location: schedule.php");

        </script>';
	}
	else
	{
		echo 'alert(" registration unsuccessful ")';
	}
?>