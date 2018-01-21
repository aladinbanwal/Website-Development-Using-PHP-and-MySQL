<?php
include("config.php");

if(isset($_POST['login']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];
  
    $check_user="select * from userdetails WHERE (phone='$user_name' OR email='$user_name') AND password='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
    	$_SESSION['username']=$user_name;
    	if ($_SESSION['username'])
    	{

	       	$sql = "SELECT * FROM userdetails WHERE (phone = '" . $_SESSION['username'] . "' OR email = '" . $_SESSION['username'] . "')";
			$result = mysqli_query($dbcon,$sql);
			$row = mysqli_fetch_array($result);
			
	    	if($row['type']  == "Student"){ //check usertype
	    	
	    		session_start();
	    		$_SESSION['username']=$user_name;
	    		header("Location:student/home.php"); //if normal user redirect to app.php
	    	
	    	}elseif($row['type'] == "Tutor"){
	    		
	    		session_start();
	    		$_SESSION['username']=$user_name;
	    		header("Location:tutor/home.php"); //if admin user redirect to admin.php
	    		
	    	}elseif($row['type'] == "Institute"){
	    		
	    		session_start();
	    		$_SESSION['username']=$user_name;
	    		header("Location:institute/home.php"); //if admin user redirect to admin.php
	    		
	    	}
    	}
    }
    else
	{  
      	echo "<script>alert('Email or password is incorrect!')</script>";
      	echo "<script>window.open('index.php','_self')</script>";
	}
}
?>