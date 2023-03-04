<?php
// $name = $_POST['name'];
// $job = $_POST['job'];

// echo "This is $name and I am a $job.";

// use Dompdf\FontMetrics;

// $hostname = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testtest";

// $conn = new mysqli($hostname, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Error connecting to $hostname");
// }

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
// $cars = array(
//     array("Volvo", 22, 18),
//     array("BMW", 15, 13),
//     array("Saab", 5, 2),
//     array("Land Rover", 17, 15)
// );

// echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";

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

// $familly = array(
//     array("Bappi", "Nodi", "Mahirul", "Ferdouchi"),
//     array("Shakil", "Tuktuki", "Juli", "Papiya"),
//     array("Angkon", "Adib", "Amjad", "Sheheli", "Nai"),
// );

// for($row = 0; $row < 3; $row++){
//     echo "<p>Row Number: $row</p>";
//     echo "<ul>";

//     for($col = 0; $col < 4; $col++){
//         echo "<li>" . $familly[$row][$col] . "</li>";
//     }

//     echo "</ul>";
// }

// $color = array('white', 'green', 'red');
// foreach ($color as $c)
// {
// echo "$c, ";
// }
// sort($color);
// echo "<ul>";

// Next Line


// foreach ($color as $y)
// {
// echo "<li>$y</li>";
// }
// echo "</ul>";

// $colors = array('white', 'green', 'red');

// echo implode(', ', $colors) . ', ';


// $colors = array('green', 'yellow', 'blue', 'lightgreen');
// foreach($colors as $color){
//     echo "$color , ";
// }

// $names = array('sajidur', 'bappi', 'angkon', 'shakil');

// sort($names); // Sort the array alphabetically

// foreach ($names as $value) {
//     echo "<li>" . $value . "<br></li>";
// }
// $countryName = array(
//     "Italy"             => "Rome",
//     "Luxembourg"        => "Luxembourg"
// );

// asort($countryName);

// foreach($countryName as $countries => $catipal){
//     echo "<li>The capital of ". $countries . " is "  . $catipal."</li>";
// }

// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// $show = reset($color);
// echo $show;


// $name = 1;

// switch ($name) {
//     case 1 : case 2 : 
//         echo "শনিবার";
//         break;

//     case 3:
//         echo "সোমবার";
//         break;

//     case 4:
//         echo "মঙ্গলবার";
//         break;

//     case 5:
//         echo "বুধবার";
//         break;

//     case 6:
//         echo "ব্রিশপতিবার";
//         break;

//     case 7:
//         echo "শুক্রবার";
//         break;
// }

 
// $result = 62;
// $exam = 100;

// $theEnd = "The Status is: " . ($result >= 40 ? "Completed" : " Pending");
// echo $theEnd;

// $value = 1;
// $checked = true;
// $unchecked = false;

// $output = ($value = 0) ? "Checked" : "Unchecked";
// echo $output;

// echo "<hr>";

// $a = 10;
// $b = $a > 15 ? 20 : 5;
// print ("Value of b is " . $b);



// $name = isset($_POST['name']) ? "echo 'The Name is: ' . $name;" : "Nothing found";
// $email = isset($_POST['email']) ? "echo 'The Name is: ' . $email;" : "Nothing found";

// echo $name ;
// echo $email ;

// // Array
// $variable = "Variable";
// echo $variable;

$arrayIndexNum = array(
    "One" => 10,
    "Two" => 100,
    "Three" => 200,
    "Four" => 300,
);

echo $arrayIndexNum['2'];

