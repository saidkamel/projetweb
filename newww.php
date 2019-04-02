<?php
/* watch the video for detailed instructions */
$to = "92425910@sms.clicksend.com";
$from = "zied.lazrak@esprit.tn";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>