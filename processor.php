<?php
//$to = "amit@greenbooks.co.in";
header('Access-Control-Allow-Origin: *');
$to = "amit@greenbooks.co.in";
$subject = "Request a call";

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "CC: ss@greenbooks.co.in\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<h1>Hello, </h1>';
$message .= '</body></html>';

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone numer:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
$message .= "<tr><td><strong>Company:</strong> </td><td>" . $_POST['company'] . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . $_POST['message'] . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to,$subject,$message,$headers);

$toRequest = strip_tags($_POST['email']);

$subjectRequest = "Greenbooks appreciates your contact";

$headersRequest = "From: amit@greenbooks.co.in\r\n";
$headersRequest .= "Reply-To: amit@greenbooks.co.in\r\n";
$headersRequest .= "MIME-Version: 1.0\r\n";
$headersRequest .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messageRequest = '<html><body>';
$messageRequest .= '<p>Hi,</p>';
$messageRequest .= '<p>Thank you for contacting us. We will get in touch with you within 24 hours.</p>';
$messagePersonal .= 'Regards,<br>';
$messagePersonal .= 'Greenbooks Learning Solutions';
$messageRequest .= "</body></html>";
mail($toRequest,$subjectRequest,$messageRequest,$headersRequest);
?>