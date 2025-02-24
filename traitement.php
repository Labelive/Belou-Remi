<?php

$to = 'remi.bl031@gmail.com';
$subject = 'Utilisation de mail() avec PHP';    
$message = 'Bonjour, comment ca va ?';

$headers ="Content-Type: text/plain; charset=\"utf-8\"\n";
$headers .="From: \"Remi\"<remi.bl031@gmail.com>\n";

if(mail($to, $subject, $message, $headers))
    echo 'Message envoyé';
else
    echo 'Erreur lors de l\'envoi';
; 