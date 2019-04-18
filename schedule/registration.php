<?php
SESSION_START(); 
$db = mysqli_connect('localhost','root','');

mysqli_select_db($db,'psm');

$user_id = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$q = "SELECT * FROM user WHERE user_id = '$user_id' && password = '$password'";

$result = mysqli_query($db,$q);
$c = mysqli_num_rows($result);

if($c==1)
{
	echo "Username is already registered";
	
}
else
{
	if('$password' != '$password2')
	{
		$sq = "INSERT INTO user VALUES('$f_name','$l_name','$user_id','$email','$password','')";
		mysqli_query($db,$sq);
		
	}
	else
		echo "Retype Password";
}
echo "<a href='login.html'>Click Here to login</a>";