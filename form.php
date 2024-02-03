<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  // Compose email message
  $to = "swartslawrenzo11@gmail.com";
  $subject = "New Order";
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address";

  // Send email
  mail($to, $subject, $message);

  // Send a response back to the client
  echo "success";
}

?>