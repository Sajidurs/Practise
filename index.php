<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- icofont -->
  <link rel="stylesheet" href="css/icofont.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/responsive-testimonials.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
$err = "";
if(isset($_POST['name']) && isset($_POST['email'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  if(empty($name) && empty($email)){
    $err = "This form is required";
  }else{
    echo "Thanks " . $name . " Your email address is " . $email;
  }
}


?>

<div class="section_wrapper">
  <form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Name Please"><?php echo $err;?> <br/>
    <input type="email" name="email" placeholder="Email Please"><?php echo $err;?><br/>
    <input type="submit" name="submit">
  </form>
</div>



<script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/jquery-3.6.1.min.js"></script>
  <!-- boostrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/countMe.min.js"></script>
  <script src="js/responsive-testimonials.js"></script>
  <script src="js/main.js"></script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>