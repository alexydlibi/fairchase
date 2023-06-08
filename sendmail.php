<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "alex@fairchase.co.uk";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }
}
?>
