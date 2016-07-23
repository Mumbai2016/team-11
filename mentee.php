
<!DOCTYPE html>
<head>
<title>
Katalyst
</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" type="text/css" href="mentee.css">
</head>

<body>

<div id="header">
		
		<h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		KATALYST</h1>
		
	</div>

<div id="trial">
<ul>
  <li><a href="#row1">Upcoming Meetings</a></li>
  <li><a href="#row2">Request a Meeting</a></li>
  <li><a href="#row3">Pending Feedbacks</a></li>
  <li><a href="#row4">My Requests</a></li>
</ul>
</div>

<div div="row1">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div div="row2">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div div="row3">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

<div div="row4">
  <?php
  include("query.php");
  $connObj= new SqlConn();
  $conn=$connObj->sql_connection();
  
  //php


$conn->close();
?>
</div>

</body>


</html>

 
