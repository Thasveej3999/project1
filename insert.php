<?php
include "db.php";
if(isset($_POST['reg']))
{
	$firstname=$_POST['first'];
	$lastname=$_POST['last'];
	$address=$_POST['add'];
	$age=$_POST['age'];
	$email=$_POST['mail'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="insert into register (firstname,lastname,address,age,email,username,password) values('$firstname','$lastname','$address','$age','$email','$username','$password')";
	
	mysqli_query($con,$query);
}