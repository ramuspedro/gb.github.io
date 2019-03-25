<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
// it is need to be possible send information from my angularjs code
header('Access-Control-Allow-Origin: *');
// this is need to send json for angularjs
header('Content-Type: *');
// echo json_encode($request->{'delegated'}[0]->{'fullName'});

/*
	Information that goes to amit's email
*/
$subjectRegistration = "brochure download";

$toRegistration = "amit@greenbooks.co.in";

$headersRegistration = "From: ".$request->{'email'}." \r\n";
$headersRegistration .= "Reply-To: ".$request->{'email'}." \r\n";
//$headersRegistration .= "CC: ss@greenbooks.co.in\r\n";
$headersRegistration .= "MIME-Version: 1.0\r\n";
$headersRegistration .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messageRegistration = '<!DOCTYPE html>';
$messageRegistration .= '<html><body>';
$messageRegistration .= '<h3>Name: '.$request->{'name'}.'</h3>';
$messageRegistration .= '<p>';
$messageRegistration .= 'Phone Number: '.$request->{'phone'}.'<br>';
$messageRegistration .= 'Email: '.$request->{'email'}.'<br>';
$messageRegistration .= 'Company: '.$request->{'company'}.'<br>';
$messageRegistration .= 'City: '.$request->{'city'}.'<br>';
$messageRegistration .= '</body></html>';

// Sending the email
mail($toRegistration,$subjectRegistration,$messageRegistration,$headersRegistration);
echo "OK";
?>