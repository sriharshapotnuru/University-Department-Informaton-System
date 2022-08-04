<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";
$_SESSION['recordStatus'] = "";
$conn = new mysqli($servername, $username, $password, $dbname);

$instname = $_SESSION['instructor'];
$sql1 = "SELECT sub1,sub2 FROM instructor_login WHERE username = '$instname'";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
$sub1 = $row['sub1'];
$sub2 = $row['sub2'];
$sql2 = "SELECT courseName FROM courses WHERE courseId = '$sub1'";
$result2 = mysqli_query($conn, $sql2);
$row1 = $result2->fetch_assoc();
$subname1 = $row1['courseName'];
$sql3 = "SELECT courseName FROM courses WHERE courseId = '$sub2'";
$result3 = mysqli_query($conn, $sql3);
$row2 = $result3->fetch_assoc();
$subname2 = $row2['courseName'];
$sql4 = "SELECT subNumber FROM courses WHERE courseName = '$subname1'";
$result4 = mysqli_query($conn, $sql4);
$row3 = $result4->fetch_assoc();
$x = $row3['subNumber'];
echo "<!DOCTYPE html>
<html>
<head>
<script src='js/myscript.js'></script>
</head>
<body>
";

if($x == 1){

	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject1 = '$subname1'";
	$_SESSION['course'] = '$subname1';
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname1;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname1</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	}


	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject1 = '$subname2'";
	$_SESSION['course'] = '$subname2';
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname2;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname2</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	}

}

if($x == 2){
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject2 = '$subname1'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname1;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname1</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject2 = '$subname2'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname2;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname2</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
}

if($x == 3){
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject3 = '$subname1'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname1;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname1</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject3 = '$subname2'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname2;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname2</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
}

if($x == 4){
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject4 = '$subname1'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname1;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname1</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject4 = '$subname2'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname2;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname2</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
}

if($x == 5){
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject5 = '$subname1'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname1;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname1</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	$sql5 = "SELECT roll_num FROM registered_course WHERE Subject1 = '$subname2'";
	$result5 = mysqli_query($conn, $sql5);
	echo "Student Who Registered For:-".$subname2;
	echo "<table name='M&A' border='1'>";
	echo "<tr><th>Roll Number</th><th>Subject</th><th>Attendence</th><th>Marks</th><tr>";
	while($row4 = mysqli_fetch_assoc($result5)){
		echo "<tr> <td>{$row4['roll_num']}</td> <td>$subname2</td> <td><input type='number' name='attendence' size='15'/></td> <td><input type='number' name='marks' size='15'/></td> <tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "<button onclick='getTableData()'>Submit</button>";
	echo $_SESSION['recordStatus'];
}

echo "</body>
</html>";
?>

