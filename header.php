<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar">
       <ul>
           <li ><a href="logout.php" >logout</a></li>
       </ul>
    </div>
<div class="container">
   <div class="content">
      <h3>Welcome!</h3>
      <p>This is one stop solution site, which is dedicated to providing information and training for vehicles about licenses
          and their proper operation. Our website is designed to be a one-stop-shop for all of your vehicle-related needs, whether
          you are a new driver looking to obtain your first license or an experienced professional looking for other RTO related work.</p>
     
      <a href="../index.html" class="logout">Visit Site</a>
   </div>
</div>

</body>
</html>