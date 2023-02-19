<?php
// $name = $_POST['name'];
// $job = $_POST['job'];

// echo "This is $name and I am a $job.";

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "testtest";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error connecting to $hostname");
} else {
    echo "Connection successful";
}

$sql = "SELECT * FROM test";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    echo $data['name'];
}
