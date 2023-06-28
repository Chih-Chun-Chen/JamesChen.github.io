<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Perform any processing you need with the form data
    // For example, you can save it to a database or send an email

    // Redirect the user to a thank you page or perform any other actions
    header("Location: thank_you.php");
    exit();
}
?>
