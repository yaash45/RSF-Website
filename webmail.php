<?php

  if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'Form submission:'.$_POST['subject'];
    $msg = "Name: " .$name. "\n\nWrote: " $_POST['message'];
    $headers = "From: " .$email;

    $to = 'rsfragrancesooty@gmail.com';

    if ( mail($to, $subject, $msg, $headers)){

      echo " Send successfully, Thank you!";

    }

    else {

      echo "<h1>Something went wrong please try again later or use the contacts given beside.</h1>"

    }

  }
 ?>
