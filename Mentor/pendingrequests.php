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

<div id="trial">
<ul>
  <li><a href="mentor.php">Upcoming Meetings</a></li>
  <li><a href="pendingrequests.php">Pending Requests</a></li>
  <li><a href="meetingsnapshots.php">Meeting Snapshots</a></li>
</ul>
</div>







<div class="row">
  <?php include 'panel.php' ?>
</div>





<div id="end">
<p>
				© Katalyst 2016. All Rights Reserved.<br>
	
			</p>
</div>
</body>


</html>

 
