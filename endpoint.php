<?php
if (isset($_GET['slack_name']) && isset($_GET['track'])) {
    // Retrieve the values in the GET request
    $slackName = $_GET['slack_name'];
    $track = $_GET['track'];
	// Assign status code
	$statusCode = 200;
	
	$currentDayOfWeek = gmdate('l');
	$utcTime = gmdate("Y-m-d\TH:i:s\Z");
	$githubFileUrl = 'https://github.com/Ezrael101/Backend-track/blob/main/endpoint.php';
	$githubRepoUrl 'https://github.com/Ezrael101/Backend-track';

	$response = array(
    'slack_name' => $slackName,
    'current_day' => $currentDayOfWeek,
    'utc_time' => $utcTime,
	'track' => $track,
    'github_file_url' => $githubFileUrl,
    'github_repo_url' => $githubRepoUrl,
    'status_code' => $statusCode
);
    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    // error message
    $errorResponse = array('error' => 'Slack name and track are required.');
    header('Content-Type: application/json');
    echo json_encode($errorResponse);
}
?>
