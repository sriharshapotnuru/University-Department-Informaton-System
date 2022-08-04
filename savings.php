<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$savings = 0;

$sql = "SELECT sum(funds) - sum(exp) as savings FROM accounts";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	
	$savings = $row['savings'];

	echo "Savings:-".$savings;
} 
else {
    echo "Error: " . $tfunds . $texp . "<br>" . $conn->error;
}
?>