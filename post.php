<?php
// $name = $_POST['name'];
// $job = $_POST['job'];

// echo "This is $name and I am a $job.";

use Dompdf\FontMetrics;

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "testtest";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error connecting to $hostname");
}

// PHP Floating point Number
// $x = PHP_FLOAT_MAX;

// var_dump(is_finite($x));

// PHP Array - Indexed array
// $arrayName = array ("Red", "Green", "Blue", "Alpha");
// echo ($arrayName['2']);

// Associative Array
$arrayName = array(
    "location"  => "Meherpur Bangladesh",
    "name"      => "Sajidur Rahman",
    "number"    => "02544757",
    "email"     => "hire@sajidur.pro"
);
echo "<pre>"; 
print_r(array_change_key_case($arrayName,CASE_UPPER));
echo "<pre>"; 
































// PHP OOP to show data from the database
// $sql = "SELECT * FROM test";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     $data = $result->fetch_assoc();

//     echo $data['name'];
// }
// 
// PHP Procedure method to show data from the server
// $sql = "SELECT * FROM test";
// $result = mysqli_query($conn, $sql);

//     if(mysqli_num_rows($result) > 0){
//         $data = mysqli_fetch_array($result);
//         echo $data['name'];
//         echo $data['id'];
//     }

