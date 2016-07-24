<?php
class SqlConn
{
    function sql_connection()
    {
            
        $serverName = "localhost";
        $userName   = "root";
        $password   = "";
        $dbName     = "katalyst11";
        // Create connection
        $conn       = mysqli_connect("localhost", $userName, "", $dbName);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}
class User
{
	private $U_Id;
	private $Name;
	private $Type;
	function getMentee($U_Id)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql="select Name from user where U_Id='$U_Id'";
		$result = mysqli_query($conn, $sql);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['Name'];
	}
	function getemail($U_Id)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql="select email from user where U_Id='$U_Id'";
		$result = mysqli_query($conn, $sql);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['email'];
	}
	function getrequest($U_Id)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql="select R_ID,location,date ,time,comments from requests join user on P_Id=U_Id where P_Id = U_Id";
		$result=mysqli_query($conn, $sql);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row;
	}
	
	function notMentors($Mentee)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql="select U_Id from user where U_Id NOT IN (select Mentee from pairs)";
		$result=mysqli_query($conn, $sql);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['U_Id'];
	}
	
}
class Pair
{
	private $Mentor;
	private $Mentee;
	function getP_Id($Mentor,$Mentee)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="select P_Id from pair where Mentor='$Mentor' and Mentee='$Mentee'";
		$result = mysqli_query($conn, $sql);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['P_Id'];
	}
	function getcount($count)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		if($count<3)
			$sql="select count(*) `count` from pairs where m_count='$count'";
		else
			$sql="select count(*) `count` from pairs where m_count>2";
		$result = mysqli_query($conn, $sql);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['count'];
	}
	function getpairswithcount($count)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		if($count<3)
			$sql="select * from pairs where m_count='$count'";
		else
			$sql="select * from pairs where m_count>2";
		$result = mysqli_query($conn, $sql);
		
		return $result;
	}
	function getmentormentee($pid)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="select * from pairs where P_Id=$pid";
		$result = mysqli_query($conn, $sql1);
		
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row;
	}
	
	
}
class Meeting
{
	private $M_Id;
	private $P_Id;
	private $date;
	private $time;
	private $location;
	private $flag;
	function upcoming($M_Id)
	{
		$sql1="select pairs.Mentee,M.date,M.time,M.location from (select * from pairs where Mentor='$M_Id') as pairs join (select * from meeting where flag=0) as M on pairs.P_Id= M.P_Id";
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$result = mysqli_query($conn, $sql1);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
	}
	function getmeetingswithpair($pid)
	{
		$sql1="select * from meeting where P_Id='$pid' and flag=1";
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$result = mysqli_query($conn, $sql1);
        
        return $result;
	}
	function getmeetingdetails($mid)
	{
		$sql1="select * from meeting m, feedback f where m.M_Id=f.M_Id";
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$result = mysqli_query($conn, $sql1);
        
        return $result;
	}
}
class Request
{
	function createrequest($Mentee,$Mentor,$location,$date,$time,$comments)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql="select P_Id from pairs where Mentor='$Mentor' and Mentee='$Mentee'";
		$result= mysqli_query($conn,$sql);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$sql1="insert into requests (P_Id,location,date,time,comments) values ('".$row['P_Id']."','$location','$date','$time','$comments')";
		$result1= mysqli_query($conn,$sql1);
		return true;
	}
	function fetchpending($M_Id)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="select pairs.Mentee,R.location,R.date,R.time from (select * from pairs where Mentor='$M_Id')as pairs join (select * from request where status=0) as R on R.P_Id=pairs.P_Id";
		$result = mysqli_query($conn, $sql1);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
	}
	function reject($R_ID)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="alter table requests set status=1 where R_ID='$R_ID'";
		$result = mysqli_query($conn, $sql1);
		return true;
	}
	function accept($R_ID)
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="select P_Id,location,date,time from requests where R_ID='$R_ID'";
		$result = mysqli_query($conn, $sql1);
		$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$sql2="insert into meeting (P_Id,date,time,location,flag) values ('".$row['P_Id']."','".$row['date']."','".$row['time']."','".$row['location']."',1)";
		$result1 = mysqli_query($conn, $sql2);
		$sql3="alter table pairs set m_count=m_count+1 where P_Id IN (select P_Id from requests where R_ID='$R_ID')";
		$result2 = mysqli_query($conn, $sql3);
		$sql4="delete from request where R_ID='$R_ID'";
		$result3 = mysqli_query($conn,$sql4);
		return true;
	}
}
class Feedback
{
	function pending_fb()
	{
		$connObj = new SqlConn();
        $conn= $connObj->sql_connection();
		$sql1="select meeting.date from meeting inner join feedback on meeting.M_Id=feedback.M_Id where meeting.flag=1 and meeting.M_Id NOT IN (select M_Id from Feedback)";	
		$result= mysqli_query($conn, $sql1);
		$row   = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['date'];
	}
}
?>