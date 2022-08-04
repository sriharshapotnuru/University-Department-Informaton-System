<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['register_Course'])) {
		$sub1 = mysqli_real_escape_string($conn, $_POST['subject1']);
		$sub2 = mysqli_real_escape_string($conn, $_POST['subject2']);
		$sub3 = mysqli_real_escape_string($conn, $_POST['subject3']);
		$sub4 = mysqli_real_escape_string($conn, $_POST['subject4']);
		$sub5 = mysqli_real_escape_string($conn, $_POST['subject5']);
		$x = $_SESSION['name'];
		$sql1 = " SELECT roll_num from student_info where name='$x' ";

		$result1 = mysqli_query($conn, $sql1);
		if ($result1->num_rows > 0) {
		$row = $result1->fetch_assoc();
		$roll_num = $row['roll_num'];
		//echo $roll_num;
		$sql3 = "SELECT * FROM registered_course where roll_num = $roll_num";
		$result2 = mysqli_query($conn, $sql3);
		if($result2->num_rows > 0)
		{ 
			echo "You Have Already Registered";
			echo '<p style="color: red; text-align: center"><a href=student_page.html><b>Go Back...</a>  </p>';
		}
		else{
			$sql2 = "INSERT INTO  registered_course(roll_num, Subject1, Subject2, Subject3, Subject4, Subject5) VALUES ($roll_num,'$sub1', '$sub2', '$sub3', '$sub4', '$sub5')" ;
			//$result2 = mysqli_query($conn, $sql2);
			if ($conn->query($sql2) === TRUE) {
    			echo "New record created successfully";
    			echo '<p style="color: red; text-align: center"><a href=student_page.html><b>Go Back...</a>  </p>';
			} 
			else{
				echo "Error: " . $sql2 . "<br>" . $conn->error;
			}
		}
	}

	else{
			echo "Error:-". $result1 . "<br>" . $conn->error;
		}
}
?>