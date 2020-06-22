<?php

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $visitor_email = $_POST['email'];
  $city = $_POST['city'];
  $zip_code = $_POST['zip_code']
  $message = $_POST['message'];
  $to = "wowkotulak@gmail.com";
  
  mail($to, $name, $surname, $city, $zip_code, $message);

  header("Location:index.php?page=contact");

 ?>
