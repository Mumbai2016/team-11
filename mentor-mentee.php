<!DOCTYPE html>
<head>
<title>
Katalyst
</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="row">
  <?php
  	if(isset($_GET))
	  {
		  $count=$_GET['count'];
	  } 
 
include ("query.php");
$user=new User();
$pair=new Pair();

$result=$pair->getpairswithcount($count);

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
           echo "<form action=Checkforgot.php method='GET' style='z-index:100'>";
          echo "<a href='meetings.php?pid=".$row['P_Id']."'>".$user->getMentee($row['Mentor'])."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$user->getMentee($row['Mentee'])."</a><input type='hidden' name='pid' value='".$row['P_Id']."' ><button type='submit' name='submit'>Send Reminder</button></form>";
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