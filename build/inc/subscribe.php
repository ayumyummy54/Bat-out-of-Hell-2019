<?php

$errors = array();

if ($_POST['email'] == '') {
    $errors['email'] = 'Email is required.';
}

	// Put your MailChimp API and List ID hehe
	$api_key = '466424e97607efc1315981b0acce3b17-us1';
	$list_id = 'eba3f50307';

// Let's start by including the MailChimp API wrapper
include('MailChimp.php');
// Then call/use the class
use \DrewM\MailChimp\MailChimp;
$MailChimp = new MailChimp($api_key);

// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
// For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
$result = $MailChimp->post("lists/$list_id/members", [
	'email_address' => $_POST["email"],
	'status' => 'subscribed'
]);


if (count($errors) > 0) {

	$result = array('result' => 'failure', 'errors' => $errors);

} else {
	if ($MailChimp->success()) {
		// Success message
		$result = array(
			'result' => 'success', 
			'message' => 'Thank you for signing up'
		);

	} else {
		// Display error
		if ($result['status'] == 400) {
			if ($result['title'] == "Invalid Resource" && $result['detail'] == "Blank email address") {
				$errors['email'] = $icon . 'Email is a required.';
			} elseif ($result['title'] == "Invalid Resource") {
				$errors['email'] = $icon . 'Please provide a valid email address.';
			} elseif ($result['title'] == "Member Exists") {
				$errors['email'] = $icon . 'Email address already exists.';
			}
		} elseif ($result['status'] == 500) {

		} else {
			$errors['general'] = 'Please try again.';
		}

		if (count($errors) > 0) {
			$result = array('result' => 'failure', 'errors' => $errors);
		}

	}
}



?>