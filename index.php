<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="#">
<select name="year" id="year">

    <?php
    $year = 2000;
     while($year <= 2050){ ?>
        <option value="<?php echo $year;?>"><?php echo $year;?></option>
    <?php 
    $year++;
    }
    ?>
</select>
</form>

</body>
</html>