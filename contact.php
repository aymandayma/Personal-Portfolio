<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "aymandayma@email.com";

    $subject = "Portfolio Contact Message";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    mail($to, $subject, $body);

    echo "Message Sent Successfully!";
}

?>