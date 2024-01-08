<?php

error_reporting(0);
session_start();
$host="localhost";

$user="root";

$password="";

$db="school";


$data=mysqli_connect($host,$user,$password,$db,4306);


if($data === false)
{
	die("connection error");
}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['username'];

		$pass = $_POST['password'];

		$sql = "select * from user where username= '".$name."'  And password = '".$pass."'     ";
		$result = mysqli_query($data ,$sql);

		$row=mysqli_fetch_array($result);

		if($row['usertype'] =="student")
		{
			
			$_SESSION['username'] = $name;
			$_SESSION['usertype'] = "student";
			header("Location:student.php");

		}elseif($row['usertype'] == "admin"){
			$_SESSION['username'] = $name;
			$_SESSION['usertype'] = "admin";
			header("Location:admin.php");

		}else{
			
			$message="username or password is incorrect";
			$_SESSION['loginMessage'] = $message;
			header("Location:login.php");
		}



	}


?>