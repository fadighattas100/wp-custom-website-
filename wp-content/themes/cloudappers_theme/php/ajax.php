<?php
/**
 * Created by PhpStorm.
 * User: Fadi
 * Date: 4/5/2016
 * Time: 1:36 AM
 */

function ajaxApplyForJob()
{
	$response['error'] = 0;

	if(!validHttpAction($_POST, ['full_name', 'email', 'phone', 'location', 'years_of_experience', 'expected_salary']) && !validHttpAction($_FILES, ['cv_file']))
	{
		$response['error'] = 1;
		$response['message'] = 'Something went wrong please try again later.';
		sendResponse($response);
	}

	$uploaded = upload_file($_FILES, $_POST['full_name']);

	if(empty($uploaded[0]['attach_id'])) {
		$response['error'] = 1;
		$response['message'] = 'Something went wrong please try again later.';
		sendResponse($response);
	}

	$isAdded = add_pod((new CVModel())->pod_name, [
		'post_title' => trim($_POST['full_name']),
		'cv_email' => trim($_POST['email']),
		'cv_phone' => trim($_POST['phone']),
		'cv_location' => trim($_POST['location']),
		'cv_years_of_experience' => trim($_POST['years_of_experience']),
		'cv_expected_salary' => trim($_POST['expected_salary']),
		'cv_info_one' => trim($_POST['cv_info_one']),
		'cv_file' => trim($uploaded[0]['attach_id']),
	]);

	if(!$isAdded) {
		$response['error'] = 1;
		$response['message'] = 'Something went wrong please try again later.';
		sendResponse($response);
	}

	$response['message'] = 'Thank you for applying.';
	sendResponse($response);
}

add_action("wp_ajax_ajaxApplyForJob", "ajaxApplyForJob");
add_action("wp_ajax_nopriv_ajaxApplyForJob", "ajaxApplyForJob");

function sendResponse($response)
{
	header('Content-Type: application/json');
	echo json_encode($response);
	wp_die();
}