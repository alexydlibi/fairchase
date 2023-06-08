<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $to = "alex@fairchase.co.uk";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";

    mail($to, $subject, $message, $headers);
    echo "Email sent successfully.";
}
?>
