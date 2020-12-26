<?php
session_start();
include '../db/dbcon.php';
if(!empty($_REQUEST['dname']) && !empty($_REQUEST['dpoint']) && !empty($_REQUEST['did']) && !empty($_REQUEST['dpswd']))
{
	if(is_numeric($_REQUEST['dpoint']))
	{
		$adusr=$_SESSION['adusername'];
		$did=$_REQUEST['did'];
		$qry="select * from dealer where username='$did'"; //check dealer exist or not
		$run=mysqli_query($conn,$qry);
		$res=mysqli_num_rows($run);
		if($res==0)
		{								                         //if  not
			$dname=$_REQUEST['dname'];
			$dpoint=(int)$_REQUEST['dpoint'];
			$dpswd=md5($_REQUEST['dpswd']);
			$qry="insert into dealer (admin_id,name,username,password,points) values('$adusr','$dname','$did','$dpswd','$dpoint')";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				echo "Congrats! dealer created succesfully";
			}
		}
		else if($res>0)
		{												//if exist then
			echo "dealer allready exist!";
		}
		else
		{
			echo "some error to find admin";
		}	
	}
	else
	{
		echo "enter valid points";
	}
}
else
{
	echo "please fill all values";
}
?>