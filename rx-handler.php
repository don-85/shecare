<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $time = htmlspecialchars($_POST["time"]);

    $to = "donamon161@gmail.com"; // Replace with your clinic email
    $subject = "Prescription Review Request";
    $body = "Name: $name\nPhone: $phone\nMessage: $message\nPreferred Contact: $contact\nBest Time: $time";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
