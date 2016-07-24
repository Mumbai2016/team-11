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
  <link rel="stylesheet" type="text/css" href="studentwithoutmentor.css">
</head>

<body>



<div id="trial">
<ul>
  <li class="activate"><a href="#row1">Assign Mentor</a></li>
  <li><a href="#row1">Dummy1</a></li>
  <li><a href="#row1">Dummy2</a></li>
</ul>
</div>







<div id="row1" class="row">
  <?php
include("query.php");
$connObj=new SqlConn;
$conn = $connObj->sql_connection();
  
$sql="SELECT Mentor from pairs where m_count='0' ";//dummy


	$result = $conn->query($sql);
	$value=6;
	
	if ($value > 0)
	 {
			while($value>0)
			{
			 ?>
			<div id="horiz" class='row'> 
	    
			<div class='panel panel-default'>
			<div class='panel-body'>
			<center>
			
			
			
			<form name="AddNew" method="post" action="#">
			<ul>
			<li>
			<input type="text" value="Mentee Name" disabled>
				
			</li>
			<li>
			<select name="Choose Mentor">
					<option value="DEFAULT">Select Mentor</option>
					<option value="1">Mentor 1</option>
					<option value="2">Mentor 2</option>
					<option value="3">Mentor 3</option>
					<option value="4">Mentor 4</option>
			</select>
			</li>
			<li>
			<input type="Submit" value="Add">
			  </li>
			</ul>
			</form>
			
			</center>
			</div>
			</div>
			<?php
			$value=$value-1;
		
			}
		echo "</div>";
	    $result->close();	
		  
	 }
	else
	{
		echo "NO RESULTS FOUND :("; 
		
	}
$conn->close();
?>
</div>





<div id="end">
<p>
				© Katalyst 2016. All Rights Reserved.<br>
	
			</p>
</div>
</body>


</html>

 
