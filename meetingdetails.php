<html>

<body>
<h3> Meeting Details </h3>

<?PHP

$user_name = "root";
$password = "";
$database = "katalyst11";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL = "SELECT * FROM user";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['U_Id'] ;
print $db_field['name'] ;
print $db_field['type'] ;
print $db_field['email'] ;

}

$SQL = "SELECT * FROM feedback";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['M_Id'] ;
print $db_field['summary'] ;
print $db_field['follow_up'] ;
print $db_field['satisfaction'] ;
print $db_field['completion_of_goals'] ;
print $db_field['goals'] . "<BR>";
}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}

?>




</body>

</html>
