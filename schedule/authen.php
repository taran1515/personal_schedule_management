<?php 


$submit = isset($_POST['submit']) ? $_POST['submit'] : 'Login';
$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : $user_id;
$password = isset($_POST['password']) ? $_POST['password'] : $password;
if ($_POST['submit'] == 'Login'){

$link=mysqli_connect('localhost','root','');  
if(!$link)
	die('Connection to host is failed,perhaps the service is down!');
$db=mysqli_select_db($link,'airline');
if(!$db)
	die("Failerd to select the database");

}
else 
	echo "Nahi";

$user_id=$_POST['user_id'];
$password=$_POST['password'];

$query= ("SELECT *  FROM user WHERE user_id ='$user_id' and password='$password'");

$results = mysqli_query($db,$query or die(mysqli_error($link)));
  	if (mysqli_num_rows($results) == 1)
	{
		
		header('location: dbms_pr.php');
		
	}
	else {
  		array_push($errors, "Wrong username/password combination");
  	}