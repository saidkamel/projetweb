<?php
/* watch the video for detailed instructions */
$to = "52847468@sms.clicksend.com";
$from = "marktnfrmspc@gmail.com";
$message = "5ra\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>
