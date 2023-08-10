<?php
	$connect=mysqli_connect("localhost","root","","signup") or die("Connection Failed");
	if(!empty($_POST['save']))
	{
		$email=$_POST['email'];
		$Password=$_POST['password'];
		$query="select * from user_signup where mail='$email' and password='$Password'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result); 
		// $username=explode('@',$email)
		if($email=='naturals@gmail.com' && $Password=='naturals')
		{
			header("Location: admindash.php");
		}
		if($email=='greentrends@gmail.com' && $Password=='greentrends')
		{
			header("Location: admindash.php");
		}
		if($email=='naturals@gmail.com' && $Password=='naturals')
		{
			header("Location: admindash.php");
		}
		if($email=='Tony&guy@gmail.com' && $Password=='Tony&guy')
		{
			header("Location: admindash.php");
		}
		else if($count>0)
		{
			header("Location: userdash.php");
		}
		else
		{
			echo "Login Not Successful";
			
		}
	}
?>