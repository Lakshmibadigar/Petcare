<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
body{
    background-image: url(allpets.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
p{
    margin-left: 1400px;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <h1> sceduled date and service</h1>
    <p> <a href="login.html">  LOGOUT</a></p>
<table>
<tr>
<th>Owner name</th>
<th>Pet name</th>
<th>schedule</th>
<th>service</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "petcare");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, pname, datetime,facility FROM services";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"]. "</td><td>" . $row["pname"] . "</td><td>" . $row["datetime"]. "</td>
<td>". $row["facility"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>