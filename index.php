




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>


<?php
$akij = 10;

$darbi = "Valo Poristhiti";

if($akij >=2){
    echo "Oke Cegirate Din";
} else{
    echo $darbi;

}

$createVariable = true;
$deleteVariable = false;
$amountVariable = 10;


if($createVariable == false){
    echo "Programming is Working";
    $newVariable = 200;
} else{
    echo $newVariable + $amountVariable;
}




?>

</body>
</html>