
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "scalableservicesassignment.cz1kzfagdqhy.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "123Amazon";
$dbname = "Course";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM CourseVideo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["Title"]. " " . $row["Description"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>