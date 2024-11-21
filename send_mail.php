<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['cf-name']);
    $email = htmlspecialchars($_POST['cf-email']);
    $message = htmlspecialchars($_POST['cf-message']);

    $to = "rahul.sivakumar997@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me. I will get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
