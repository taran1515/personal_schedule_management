<?php
session_start(); 
$link = mysqli_connect('localhost', 'root', ''); 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
$db = mysqli_select_db($link,'psm'); 
if(!$db){ 
die("Unable to select database"); 
} 
$query = "SELECT *
FROM review
ORDER BY label";
$date="2018-11-27";

$result = mysqli_query($link,$query); 

echo "<center><h1>Your Schedule for the day</h1>"; 
echo "<table border='1' cellpadding = '10'> 
<tr><th>Label</th> 
<th>Task</th> 
<th>Start time</th> 
<th>End time</th>
<th>Date<th> 
</tr>"; 

while($row = mysqli_fetch_array($result)) 
 
{ 
echo "<tr><td>" . $row['label'] . "</td> 
<td>" . $row['task']."</td> 
<td>" . $row['start_time'] . "</td>
<td>" . $row['end_time'] . "</td>
<td>".$date."</td>  
</tr>"; 
echo "<br/>"; 
}
echo"
<h1>
<a href='dbms_pr.php'>Click here to add more tasks</a>";
