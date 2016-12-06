<?php
require_once '../../../exemples/php/google-api-php-client-2.1.0/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
	$client->setAccessToken($_SESSION['access_token']);
	$drive_service = new Google_Service_Drive($client);
	$files_list = $drive_service->files->listFiles(array())->getFiles();
	foreach ($files_list as $file) {
		print_r($file);
		echo $file->getVersion();
		return;
	}
	//echo json_encode($files_list);
} else {
	$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/THYP_16-17/samszo/googleAuth/callback.php';
	header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}