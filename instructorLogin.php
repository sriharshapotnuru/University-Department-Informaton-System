<?php
session_start();
include("config.php"); 
$table = "instructor_login";	

// connect to the mysql server 
$link = mysql_connect($server, $db_user, $db_pass) 
or die ("Could not connect to mysql because ".mysql_error()); 

// select the database 
mysql_select_db($database) 
or die ("Could not select database because ".mysql_error()); 

$match = "select id from $table where username = '".$_POST['username']."' and password = '".$_POST['password']."';"; 

$qry = mysql_query($match) 
or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 
$_SESSION['instructor'] = $_POST['username'];
if ($num_rows <= 0) { 

		
echo  '<span style="color:#000000;text-align:center;"><b>Sorry, there is no username with the specified password.<br></span>'; 
echo "<a href=instructorLogin.html><b>Try again</a>"; 
exit; 
} else { 


echo '<span style="color:#000000;text-align:center;"><b>You are now logged in!<br></span>';
echo '<p style="color: red; text-align: center">
      <a href=instructorPage.html><b>continue...</a>  
      </p>';

}
?>