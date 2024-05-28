<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Email address to send the form submission to
    $to = "Joshua.Holtz@outlook.com";

    // Subject of the email
    $subject = "Contact Form Submission";

    // Construct the email body
    $body = "Name: $name\n" .
            "Email: $email\n" .
            "Phone Number: $phone\n" .
            "Message:\n$message";

    // Send the email
    mail($to, $subject, $body);

    // Redirect back to the form page or a thank you page
    header("Location: index.html"); // Adjust the URL as needed
    exit;
}
?>
