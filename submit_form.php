<?php
$to = "tbwa86@gmail.com, thorbjoern@fenris.dk";
$subject = "Form Submission";
$message = "Navn: ".$_POST["navn"]."\nEmail: ".$_POST["email"]."\nTelefon: ".$_POST["telefon"]."\nEmne: ".$_POST["emne"]."\nBesked: ".$_POST["besked"];
$headers = "Fra: thorbjoern@fenris.dk" . "\r\n" .
    "Svar til: thorbjoern@fenris.dk" . "\r\n" .
    "Content-Type: text/html; charset=UTF-8\r\n" .
    "X-Mailer: PHP/" . phpversion();
mail($to, $subject, $message, $headers);
?>
