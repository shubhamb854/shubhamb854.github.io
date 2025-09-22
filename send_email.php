<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "sbhosale854@gmail.com";  // Replace with your email address
    $subject = "New Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
} else {
    echo "Access denied!";
}
?>
