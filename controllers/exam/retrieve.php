<?php

	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include_once '../../config/database.php';
	include_once '../../models/Exam.php';

	// protected $user;
	// protected $database;
	// protected $db;

	$database = new Database();
	$db = $database->getConnection();
	$exam = new Exam($db);

	echo json_encode($exam->retrieveAll());
	// echo "HEllo";
   
?>