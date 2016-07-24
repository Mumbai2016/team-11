
<!DOCTYPE html>
<head>
<title>
Katalyst
</title>
<style>
a.hover{
	color:green;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" type="text/css" href="mentee.css">
</head>

<body>

<div id="header">
		
		<h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		KATALYST</h1>
		
	</div>

<div id="trial">
<ul>
  <li><a href="#row1">Upcoming Meetings</a></li>
  <li><a href="#row2">Request a Meeting</a></li>
  <li><a href="#row3">Pending Feedbacks</a></li>
  <li><a href="#row4">My Requests</a></li>
  <li>x<a href="https://ie.talkgadget.google.com/hangouts/_/7wrirnw2ozhjfag2gswfp6rvdae?authuser=0&hl=en-GB">Hangout</a></li>
</ul>
</div>

<div div="row1">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div id="row2" class="row">
			<img src="give.jpg" alt="Error"><br><br>
			<form  method="post" onsubmit="return loginvalidation();" action="connectivity.php" name="login">
				<input type="text" name="username" placeholder="Username"><br><br>
				<input type="password" name="password" placeholder="Password"><br><br>
				<input type="submit" name="submit" value="Login"><br><br>
				<p>Not a member and want to join?</p>
				<a href="signUp.php">
					<input id="button" value="Sign Up!" >
				</a>
			</form>
</div>


  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div div="row3">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div div="row4">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

</body>


</html>

 <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
