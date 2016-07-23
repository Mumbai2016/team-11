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
  <li><a href="upcomingmeetings.php">Upcoming Meetings</a></li>
  <li><a href="pendingrequests.php">Pending Requests</a></li>
  <li><a href="meetingsnapshots.php">Meeting Snapshots</a></li>
</ul>
</div>







<div class="row">
  <?php
  	if(isset($_GET))
	  {
		  $count=$_GET['count'];
	  } 
 
include ('query.php');
$user=new User();
$pair=new Pair();

$result=$pair->getpairswith($count);

	if ($result->num_rows > 0)
	 {
		echo "<div class='row'>"; 
	    // output data of each row
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<center>";
			echo "<h2>Mentor &nbsp; &nbsp; Mentee</h2>";
			echo "</center>";
			echo "</div>";
			echo "</div>";
			
	    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	    {
			
						
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<p>";
			echo "<center>";
			echo "<a href='meetings.php?pid=".$row['P_Id']."'>".$user->getMentee($row['Mentor'])."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$user->getMentee($row['Mentee']."</a>");
			echo "</center>";
			echo "</p>";
			echo "</div>";
			echo "</div>";

	    }
		echo "</div>";
	    $result->close();	
		  
	 }
	else
	{
		echo "NO RESULTS FOUND :("; 
		echo "CHECK SOMETHING ELSE.. !";
	}

?>
</div>





<div id="end">
<p>
				© Katalyst 2016. All Rights Reserved.<br>
	
			</p>
</div>
</body>


</html>

 
