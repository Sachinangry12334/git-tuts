<?php
session_start();
include '../db/dbcon.php';
if(!empty($_REQUEST['cname']) && !empty($_REQUEST['cpoint']) && !empty($_REQUEST['cid']))
{
	$did=$_SESSION['dusername'];
	$qryp="select points from dealer where username='$did'";
	$runp=mysqli_query($conn,$qryp);
	$fetch=mysqli_fetch_assoc($runp);
	$dpoint=$fetch['points']; 						//dealer points


	$cname=$_REQUEST['cname'];
	$cid=$_REQUEST['cid'];
	$qry="select points from client where  dealer_id='$did' and username='$cid' and name='$cname'";
	$run=mysqli_query($conn,$qry);				
	$res=mysqli_fetch_assoc($run);						//check all client of this dealer
	if(empty($res))
	{
		echo "no client found";
	}
	else if(!empty($res))								//if found any client
	{
		if(is_numeric($_REQUEST['cpoint']))		//check point is numeric
		{
			$cpoint=(int)$res['points'];			//client point
			$epoint=$_REQUEST['cpoint'];			//point to added
			$npoint=$dpoint-$epoint;				//check result dealer have enough point or not
			if($npoint>1)
			{
				//if points enough
				$pointlast=$cpoint+$epoint;
				$qry="update client set points='$pointlast' where name='$cname' and username='$cid' and dealer_id='$did'";
				$run=mysqli_query($conn,$qry);
				if($run)
				{
					$td=date('d-m-yy');
					$qr="insert into tdealer (dealerid,clientid,tpoint,tdate) values('$did','$cid','$epoint','$td')";
	                $ru=mysqli_query($conn,$qr);
	                if($ru)
	                {
	                	$qry="update dealer set points='$npoint' where username='$did'";
						$run=mysqli_query($conn,$qry);
						if($run)
						{
							echo "Congrats!succesfull send!";
						}
	                	else
	                	{
	                		echo "error in update";
	                	}
	                }
					else
					{
						echo "error occured";
					}
				}
				else
				{
					echo "Dealer not found";
				}	
			}
			else
			{
				echo "you have not enough points!";
			}
		}
		else
		{
			echo "enter valid points";
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