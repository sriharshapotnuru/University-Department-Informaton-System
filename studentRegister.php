<?php
if (Empty($_POST["name"])) {
echo "Empty Field UserName! ...  <a href=studentRegister.html><b>Try again</a> ";exit;}
elseif (Empty($_POST["psw"])) {
echo "Empty Field PassWord! ...  <a href=studentRegister.html><b>Try again</a> ";exit;}
elseif(is_numeric($_POST["name"])){
echo "<b>Accepts only Letters for UserName!! .... <a href=studentRegister.html><b>Try again</a> ";exit;}
elseif (strlen($_POST["psw"]) < 6) {
echo "<b>Too short for your Password!! .... <a href=studentRegister.html><b>Try again</a><br>";exit;}
elseif (($_POST["psw"]) <> ($_POST["cpsw"])) {
 echo "<b>Password did not match!! .... <a href=studentRegister.html><b>Try again</a>";exit;}

?>


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ase_project";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$psw = $_POST["psw"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_info (name, email, phone, gender, psw)
VALUES ('$name', '$email', '$phone', '$gender', '$psw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<p style="color: red; text-align: center">
      <a href=studentLogin.php><b>continue...</a>  
      </p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 






