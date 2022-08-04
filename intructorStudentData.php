<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";
$conn = new mysqli($servername, $username, $password, $dbname);
$data = json_decode(file_get_contents('php://input'), true);
foreach($data as $arr) { //foreach element in $arr
    // $uses = $item['var1']; //etc
    $roll =  $arr['roll'];
    $course = $arr['subject'];
    $marks = $arr['data']['marks'];
    $attend = $arr['data']['attend'];
    echo "roll :".$roll." marks : ".$marks." attend :". $attend;
    echo $course;
}
        $sql = "INSERT INTO stud_mar_att VALUES ('$roll','$course','$marks','$attend')";
        if ($conn->query($sql) === TRUE) {
    	   $_SESSION['recordStatus'] =  "New record created successfully";
    	   echo '<p style="color: red; text-align: center"><a href=student_page.html><b>Go Back...</a>  </p>';
	} 
	    else{
            $_SESSION['recordStatus'] = "Record Not Inserted";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
 ?>
</body>
</html>