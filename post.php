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
// $arrayName = array(
//     "location"  => "Meherpur Bangladesh",
//     "name"      => "Sajidur Rahman",
//     "number"    => "02544757",
//     "email"     => "hire@sajidur.pro"
// );
// echo "<pre>"; 
// print_r(array_change_key_case($arrayName,CASE_UPPER));
// echo "<pre>"; 


// $arrayName = array(
//         "location"  => "Meherpur Bangladesh",
//         "name"      => "Sajidur Rahman",
//         "number"    => "02544757",
//         "email"     => "hire@sajidur.pro"
//     );
//     print_r($arrayName);

//     $a=array("red","green");
//     print_r(array_pad($a,5,"blue"));
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";

// $amarcondition = array(
//     array("Bappi", "Single", "Age: 27"),
//     array("Angkon", "Raka Kaki", "Age: 23"),
//     array("Rockey", "Mst. Rockeyna Khatun", "Age: 25"),
// );

// // Creating a loop through the arrays
// for( $row = 0; $row < 3; $row++){
//     echo "<p><br>Row Number: $row</br></p>";
//     echo "<ul>";

//     // Creating another loop for the inner data
//     for ($col = 0; $col < 3; $col++){
//         echo "<li>". $amarcondition[$row][$col]."</li>";
//     }
//     echo "</ul>";
// }

$familly = array(
    array("Bappi", "Nodi", "Mahirul", "Ferdouchi"),
    array("Shakil", "Tuktuki", "Juli", "Papiya"),
    array("Angkon", "Adib", "Amjad", "Sheheli"),
);

for($row = 0; $row < 3; $row++){

}



























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
