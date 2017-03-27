<?php
session_start();
include 'db.php';
if(isset($_POST['log']))
{
	$username=$_POST['user'];
	$password=$_POST['pass'];
	//echo $username;                              //// just echo the browser
	$query="select id from login where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	$query_num=mysqli_num_rows($result);
		if($query_num>0)                          //0 kuduthal annakil 
		{  

			$_SESSION['user_id']=$username; 
			$_SESSION['pass_id']=$password;            
			header('location:session.php');
                }
         else{
	          echo "invalid user and password ";
                    }
                   
}
?>
<form action="" method="post">
	USER NAME:<input type="text" name="user" id=""><br><br>
	PASSOWRD:<input type="password" name="pass" id=""><br>
	<input type="submit" name="log" value="login" >
</form>
<form action="insert.php" method="post">
	FIRST NAME:<input type="text" name="first"><br><br>
	LAST NAME:<input type="text" name="last"><br><br>
	ADDRESS:<textarea name="add"></textarea><br><br>
	AGE:<input type="text" name="age"><br><br>
	EMAIL:<input type="text" name="mail"><br><br>
	USER NAME:<input type="text" name="username"><br><br>
	PASSWORD:<input type="text" name="password"><br><br>
	<input type="submit" name="reg" value="register" >

</form>
