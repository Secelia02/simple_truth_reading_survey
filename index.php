<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    \n$message = $_POST["message"];
    
    $to = "secelia@yahoo.com";
    $subject = "New form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
