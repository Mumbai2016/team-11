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


<div id="trial">
<ul>
  <li><a href="#">Upcoming Meetings</a></li>
  <li><a href="pendingrequests.php">Pending Requests</a></li>
  <li><a href="meetingsnapshots.php">Meeting Snapshots</a></li>
</ul>
</div>







<div class="row">
  <?php
include ('../query.php');

	$meeting=new Meeting();
	if(isset($_GET))
	{
		$result=$meeting->getmeetingdetails($_GET['mid']);
	}

	
	if ($result->num_rows > 0)
	 {
		echo "<div class='row'>"; 	
	    // output data of each row
	    while($row    = mysqli_fetch_array($result, MYSQLI_ASSOC))
	    {
			$s1 = $row['summary'];
			$s2 = $row['follow_up'];
			$s3 = $row['satisfaction'];
			$s4 = $row['completion_of_goals'];
			$s5 = $row['goals'];
						
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<p>";
			$user=new User();

			$pair=new Pair();
			$row1=$pair->getmentormentee($row['P_Id']);
			$mentor=$user->getmentee($row1['Mentor']);
			$mentee=$user->getmentee($row1['Mentee']);
			echo "Mentor: ".$mentor."<br>";  
			echo "Mentee:".$mentee."<br>";	
			
			
			echo "Date:  ".$s1.str_repeat('&nbsp;', 15);  //dummy
			echo "Time:  ".$s2.str_repeat('&nbsp;', 15);  //dummy
			echo "Location:  ".$s3."<br><br>";  //dummy
			echo "FEEDBACK"."<br>";
			echo "<u>Summary</u><br>".$s1."<br>"; //dummy
			echo "Follow Up:".str_repeat('&nbsp;', 5).$s2."<br>";  //dummy
			echo "Satisfaction:".str_repeat('&nbsp;', 5).$s3."<br>";  //dummy
			echo "Completion of Goals:".str_repeat('&nbsp;', 5).$s4."<br>";  //dummy
			echo "Goals:".str_repeat('&nbsp;', 5).$s5;  //dummy
			echo "</p>";
			
			
			echo "</div>";
			echo "</div>";
			
			
			
			
			
			
	    }
		echo "</div>";
		  
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

 
