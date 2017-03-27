<?php
session_start();
$_SESSION['user_id']="";
$_SESSION['pass_id']="";
session_destroy();
header("Location:index.php");
?> 




///session insert query eganeyum chayiaya



$query_num=mysqli_num_rows($result);
		if($query_num==0)
		{  
			echo "invalid user and password";
		}
		else if($query_num==1)
		{
           //echo "login success";                   // ithin pakram evide session kodukuka 
		$user_id=mysqli_fetch_assoc($result)['id'];   // evide ithine echo chayiyam apo browseril id display chayiyum

			$_SESSION['user_id']=$user_id;              //on brket userid nmk ishtam ullath koduka
			header('location:session.php');