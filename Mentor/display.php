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
			echo "Mentee Name"."<br>";  //dummy for Mentor Name
			
			
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