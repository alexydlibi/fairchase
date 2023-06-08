<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "alex@fairchase.co.uk";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";

    if (mail($to, $subject, $message, $headers)) {
        $response = array('success' => true, 'message' => 'Email sent successfully.');
    } else {
        $response = array('success' => false, 'message' => 'Failed to send email.');
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
