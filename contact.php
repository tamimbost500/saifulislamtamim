<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userEmail'];
    $message = $_POST['userMessage'];

    // Compose email message
    $to = "sitamim550@gmail.com";
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $email_body);

    // Redirect back to the form with a success message
    header("Location: your_form_page.html?status=success");
    exit;
}
?>
