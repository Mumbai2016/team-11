<?php
	
	session_start();
	
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		
		//header ("Location: login.php");
	}
	
?>
<!DOCTYPE html>
<head>
<title>
Katalyst
</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="mentor.css">
</head>

<body>

<div id="header">
		<img src="food_icon.jpg" alt="Error">
		<h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		KATALYST</h1>
		<ul id="enter">
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>


<html>

<body>
<h3> Meeting Details </h3>

<?PHP

$user_name = "root";
$password = "";
$database = "katalyst11";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {



$SQL = "SELECT * FROM feedback";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['M_Id'] ;
print $db_field['summary'] ;
print $db_field['follow_up'] ;
print $db_field['satisfaction'] ;
print $db_field['completion_of_goals'] ;
print $db_field['goals'] . "<BR>";
}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}

?>



<div id="footer">
<p>
				© Katalyst 2016. All Rights Reserved.<br>
	
			</p>
</div>
</body>


</html>

 
