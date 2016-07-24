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







<div class="row">

<table>
<tr>
<th> Date </th>
<th> Time </th>
<th> Location </th>
<th> Decision </th>
</tr>
  <?php
  include ('../query.php');
 

  if(isset($_SESSION))
  {
	  $mid=$_SESION['eid'];
  }
   $req=new Request();
   $result=$req->fetchpending($mid);

	if ($result->num_rows > 0)
	 {
		echo "<div class='row'>"; 
	    // output data of each row
	    while($row    = mysqli_fetch_array($result, MYSQLI_ASSOC))
	    {
			
			$s = $row['Mentor'];
						
			
		
			
			echo "<tr><td>".$row['date']."</td><td>".$row['time']."</td><td>".$row['location']."</td><td > <input type='submit'  value='Accept' /> / <input type='submit' class='styled-button-10' value='Reject' /> </th></tr>";
			
			
			
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



</table>



</div>





<div id="end">
<p>
				© Katalyst 2016. All Rights Reserved.<br>
	
			</p>
</div>
</body>


</html>

 
