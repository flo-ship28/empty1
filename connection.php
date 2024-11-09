<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database_name="flower shop";
   
   $conn= mysqli_connect($servername,$username,$password,$database_name);
   if(!$conn)
   {
	   die("Connection Failed:".mysqli_connect_error());
   }
   
   if(isset($_POST['save']))
   {
	   $name=$_POST['name'];
	   $email=$_POST['email'];
	   $phone=$_POST['phone'];
	   $message=$_POST['message'];
	   
	$sql_query="INSERT INTO flower orders(name,email,phone,message)VALUES('$name','$email','$phone','$message')";

	if(mysqli_query($conn,$sql_query))
	{
		echo"Successfull";
	}
	else
	{
		echo"Error";
	}
	mysqli_close($conn);
   }
   ?>
   
   