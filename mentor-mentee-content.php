<?php
include ('query.php');
$user=new User();
$pair=new Pair();
if(isset($_GET))
{
	$count=$_GET['count']
}
$row=$pair->getpairswith($count)

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
			
	    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC);)
	    {
			
						
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-body'>";
			echo "<p>";
			echo "<center>";
			echo $user->getMentee($row['mentor'])." &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$user->getMentee($row['mentor']);
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