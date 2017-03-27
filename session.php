
<?php
session_start();
include 'db.php';

if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
{
	echo "you are logged in"."<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html><?php
}
else
{
	header('location:index.php');
	//echo "session not found!";
}
?>