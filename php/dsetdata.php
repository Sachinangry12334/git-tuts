<?php
session_start();
include '../db/dbcon.php';
if(!empty($_REQUEST['cname'])  && !empty($_REQUEST['cid']) && !empty($_REQUEST['cpswd']))
{
	$dusr=$_SESSION['dusername']; //dealer id
	$cname=$_REQUEST['cname'];		//client name
	$cpoint=0;
	$cid=$_REQUEST['cid'];	//client id
	$cpswd=md5($_REQUEST['cpswd']);	// client password
	$qry="select * from client where username='$cid'";  // client avilable or not
	$run=mysqli_query($conn,$qry);
	$res=mysqli_num_rows($run);
	if($res>0)
	{
		echo "client allready exist!";
	}
	else if($res==0)
	{
		$qr="insert into client (dealer_id,name,username,password,points) values('$dusr','$cname','$cid','$cpswd','$cpoint')";
		$ru=mysqli_query($conn,$qr); //client created;
		if($ru)
		{
			echo "Congrats! client created succesfully";
		}
		else
		{
			echo "not created client";
		}
	}
	else
	{
		echo "some error occured!";
	}	
	
}
else
{
	echo "please fill all values";
}
?>