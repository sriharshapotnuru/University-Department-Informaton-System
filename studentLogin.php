
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";
$errors = array(); 
$numRow = 0;
$_SESSION['name'] = '';

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['login_student'])) {
		$uname = mysqli_real_escape_string($conn, $_POST['name']);
		$psw = mysqli_real_escape_string($conn, $_POST['psw']);
		if (empty($uname)) {
			array_push($errors, "Username is required");
		}
		if (empty($psw)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM student_info WHERE name='$uname' AND psw='$psw'";
			$results = mysqli_query($conn, $query);
			$numRow = mysqli_num_rows($results);
			if ($numRow == 0) {
				array_push($errors, "Wrong username/password combination");
			}else {
				$_SESSION['name'] = $uname;
				echo "Welcome " . $_SESSION["name"] . ".<br>";
				$_SESSION['success'] = "You are now logged in";
				echo $_SESSION['success'];
				echo '<p style="color: red; text-align: center"><a href=student_page.html><b>continue...</a>  </p>';
		}
	}
}
?>