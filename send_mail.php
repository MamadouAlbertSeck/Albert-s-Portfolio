<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "tonmail@exemple.com";  // Mets ton adresse mail
    $subject = "Nouveau message depuis le portfolio";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès ✅";
    } else {
        echo "Erreur lors de l'envoi ❌";
    }
}
?>
