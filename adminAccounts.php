<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";

$funds = $_POST["funds"];
$exp = $_POST["exp"];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($funds == 0 OR $exp == 0)
{
	echo "Enter some amount or expenditure";
}
else
{
	$sql = "INSERT INTO accounts (funds, exp)
	VALUES ('$funds', '$exp')";

	if ($conn->query($sql) === TRUE) {
		echo '<span style="color:#000000;text-align:center;"><b>Amounts & Expenditures Are Uploaded Successfully<br></span>';
		echo '<p style="color: red; text-align: center">
      	<b><a href=adminAccounts.html>Go Back</a>
     	 </p>';
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?> 


</body>
</html>