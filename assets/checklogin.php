<?php

$host="chromahills.info"; // Host name
$username="CH-LOGIN-SYSTEM"; // Mysql username
$password="UvxfNfR3mJz2Ph4P"; // Mysql password
$db_name="CH-LOGIN-SYSTEM"; // Database name
$tbl_name="ChromaLoginSystem"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myemail=$_POST['Email'];
$mypassword=$_POST['Password'];

// To protect MySQL injection (more detail about MySQL injection)
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Email='$myemail' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myemail and $mypassword, table row must be 1 row
if($count==1){

// Register $myemail, $mypassword and redirect to file "login_success.php"
session_register("myemail");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>