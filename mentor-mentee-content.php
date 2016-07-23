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
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<center>";
			echo "<h2>Mentor &nbsp; &nbsp; Mentee</h2>";
			echo "</center>";
			echo "</div>";
			echo "</div>";
			
	    while($row = $result->fetch_array())
	    {
			$s = $row['Mentor'];
						
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<p>";
			echo "<center>";
			echo "Mentor &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mentee";
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
$conn->close();
?>