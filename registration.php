<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
// it is need to be possible send information from my angularjs code
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Request-Headers: Accept, X-Requested-With');
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, token");
// this is need to send json for angularjs
header('Content-Type: *');
// echo json_encode($request->{'delegated'}[0]->{'fullName'});

/*
	Information that goes to amit's email
*/
$subjectRegistration = "Registration for ROI workshop";

$toRegistration = "pedro@greenbooks.co.in";

$headersRegistration = "From: ".$request->{'registrant'}->{'email'}." \r\n";
$headersRegistration .= "Reply-To: ".$request->{'registrant'}->{'email'}." \r\n";
//$headersRegistration .= "CC: ss@greenbooks.co.in\r\n";
$headersRegistration .= "MIME-Version: 1.0\r\n";
$headersRegistration .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messageRegistration = '<!DOCTYPE html>';
$messageRegistration .= '<html><body>';
$messageRegistration .= '<h3>Registrant Name: '.$request->{'registrant'}->{'fullName'}.'</h3>';
$messageRegistration .= '<p>';
$messageRegistration .= 'Registrant Designation: '.$request->{'registrant'}->{'designation'}.'<br>';
$messageRegistration .= 'Registrant Phone Number: '.$request->{'registrant'}->{'phone'}.'<br>';
$messageRegistration .= 'Registrant Email: '.$request->{'registrant'}->{'email'}.'<br>';
$messageRegistration .= 'Organization Name: '.$request->{'registrant'}->{'companyName'}.'<br>';
$messageRegistration .= 'Organization City: '.$request->{'registrant'}->{'city'}.'<br>';
$messageRegistration .= 'Location: '.$request->{'registrant'}->{'location'}.'<br>';
$messageRegistration .= '</p>';
$messageRegistration .= '<h4>Number of Delegates: '.(string)count($request->{'delegated'}).'</h4>';
foreach ($request->{'delegated'} as $delegated) {
	$messageRegistration .= '<h3>Delegated Name: '.$delegated->{'fullName'}.'</h3>';
	$messageRegistration .= '<p>';
	$messageRegistration .= 'Delegated Designation: '.$delegated->{'designation'}.'<br>';
	$messageRegistration .= 'Delegated Phone Number: '.$delegated->{'phone'}.'<br>';
	$messageRegistration .= 'Delegated Email: '.$delegated->{'email'}.'<br>';
	$messageRegistration .= 'Delegated City: '.$delegated->{'city'}.'<br>';
	$messageRegistration .= 'Program Location: '.$delegated->{'location'}.'<br>';
	$messageRegistration .= '</p>';
}
$messageRegistration .= '</body></html>';

// Sending the email
mail($toRegistration,$subjectRegistration,$messageRegistration,$headersRegistration);

/*
	Information that goes to registrant's email
*/
$subjectPersonal = "Thank you for registering in our ROI workshop";

$toPersonal = $request->{'registrant'}->{'email'};

$headersPersonal = "From: pedro@greenbooks.co.in \r\n";
$headersPersonal .= "Reply-To: pedro@greenbooks.co.in \r\n";
//$headersRegistration .= "CC: ss@greenbooks.co.in\r\n";
$headersPersonal .= "MIME-Version: 1.0\r\n";
$headersPersonal .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messagePersonal = '<!DOCTYPE html>';
$messagePersonal .= '<html><body>';
$messagePersonal .= '<p>Hi,</p>';
$messagePersonal .= '<p>Thank you for registering for the ROI workshop.</p>';
$messagePersonal .= '<p>We have temporarily blocked your seat. One of our consultants will reach out to you within 24 hours to help you with the invoice and payment information.</p>';
$messagePersonal .= '<p><strong>NOTE:</strong> The final confirmation of seat will only happen upon the full payment of the registration fee before the workshop. </p>';
$messagePersonal .= 'Regards,<br>';
$messagePersonal .= 'Greenbooks Learning Solutions';
$messagePersonal .= '</body></html>';

mail($toPersonal,$subjectPersonal,$messagePersonal,$headersPersonal);

echo "OK";
?>