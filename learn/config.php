<?php
session_start();
$SITE_TITLE="Book Exchange";

$DB_SERVER="localhost";
$DB_NAME="testing";
$DB_USER="root";
$DB_PASSWORD="";

function sanitizeInput($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);

	return $data;

}