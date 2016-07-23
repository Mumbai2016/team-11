<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katalyst11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	
}
$sql="SELECT Mentor from pairs where m_count='0' ";//dummy


	$result = $conn->query($sql);
	
	if ($result->num_rows > 0)
	 {
		echo "<div class='row'>"; 
	    // output data of each row
	    while($row = $result->fetch_array())
	    {
			$s = $row['Mentor'];
						
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<p>";
			echo strtoupper($row['m_count']);   //dummy for Mentor Name
			echo "</p>";
			
			echo "Date:  ".$s.str_repeat('&nbsp;', 15);  //dummy
			echo "Time:  ".$s.str_repeat('&nbsp;', 15);  //dummy
			echo "Location:  ".$s."<br>";  //dummy			
			echo '<div class="btn-group" role="group" aria-label="...">';
			echo '<button type="button" class="btn btn-default">Accept</button>';
			echo '<button type="button" class="btn btn-default">Reject</button>';
			echo '</div>';
					
			echo "</div>";
			echo "</div>";
			
			/*echo '<div class="btn-group" role="group" aria-label="...">';
			echo '<button type="button" class="btn btn-default">Left</button>';
			echo '<button type="button" class="btn btn-default">Middle</button>';
			*/
			
			
			
			
	    }
		echo "</div>";
	    $result->close();	
		  
	 }
	else
	{
		echo "NO RESULTS FOUND :("; 
		echo "CHECK SOMETHING ELSE.. !";
	}
$conn->close();
?>