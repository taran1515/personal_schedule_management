<?php 
session_start();

$submit = isset($_POST['submit']) ? $_POST['submit'] : 'Login';
$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : $user_id;
$password = isset($_POST['password']) ? $_POST['password'] : $password;
if ($_POST['submit'] == 'Login'){
	
	include('dbms_pr.php');
}