<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Prepare the message
    $message = "Name: $name\nEmail: $email\nFeedback: $feedback\n--------------------\n";

    // Save to a text file
    file_put_contents("messages.txt", $message, FILE_APPEND);

    // Success message
    echo "<h2>Thank you for your feedback, $name!</h2>";
} else {
    echo "<h2>Please submit the form first.</h2>";
}
?>