<?php
echo "This message is sent from php file"

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['$message'];

if (!empty($email) && !empty($message)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $receiver = "$email"
    $subject = "From: $name <$email>";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards,\n$name";
    $sender = "From: abishekjaiswal01@gmail.com";

    if (mail($receiver $subject $body $sender)) {
      echo "MESSAGE SENT SUCCESSFULY";
    } else {
      echo "MESSAGE NOT SENT SUCCESSFULY"
    }
  } else {
    echo "Fill all fields"
  }
} else {
  echo "Enter valid email";
}

?>