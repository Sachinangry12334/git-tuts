<?php
session_start();
include '../db/dbcon.php';
if(!empty($_REQUEST['dname']) && !empty($_REQUEST['dpoints']) && !empty($_REQUEST['did']))
{
	if(is_numeric($_REQUEST['dpoints']))
	{
		$dname=$_REQUEST['dname'];
		$dpoint=(int)$_REQUEST['dpoints'];
		$did=$_REQUEST['did'];
		$qry="select points from dealer where name='$dname' and username='$did'";
		$run=mysqli_query($conn,$qry);
		$res=mysqli_fetch_array($run);
		if(!empty($res))
		{
			$datapoint=(int)$res['points'];
			$newpoints=$dpoint+$datapoint;
			$qry="update dealer set points='$newpoints' where name='$dname' and username='$did'";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				$adid=$_SESSION['adusername'];
				$td=date('d-m-yy');
				$qr="insert into tadmin (adminid,dealerid,tpoint,tdate) values('$adid','$did','$dpoint','$td')";
                $ru=mysqli_query($conn,$qr);
                if($ru)
                {
                	echo "Congrats!succesfull";
                }
				else
				{
					echo "some error occured";
				}
			}

		}
		else
		{
			echo "Dealer not found";
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