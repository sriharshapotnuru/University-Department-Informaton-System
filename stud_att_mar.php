    <!DOCTYPE html>
    <html>
    <head>
    <title>Attendence And Marks</title>
    <style>
    table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Subject</th>
    <th>Attendence</th>
    <th>Marks</th>
    </tr>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ase_project";
    $uname = $_SESSION['name'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT roll_num FROM student_info WHERE name='$uname'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $roll_num = $row1['roll_num'];
    $sql = "SELECT * FROM stud_mar_att WHERE roll_num='$roll_num'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["subject"]. "</td><td>" . $row["attend"] . "</td><td>"
    . $row["marks"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>