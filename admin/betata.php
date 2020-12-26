<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	// if team a won
	if($_REQUEST['type']=='teama')
	{
		$team='teama';
		$qrya="update status set team='$team'";
		$resa=mysqli_query($conn,$qrya);
		if($resa)
	    {
	    	$team='A';
	    	$te='AP';
	    	$checkqry="select * from betadmin where team='$team' or team='$te'";
	    	$runquery=mysqli_query($conn,$checkqry);
	    	while($dfetch=mysqli_fetch_assoc($runquery))
	    	{
	    		$cid=$dfetch['clientid'];
	    		$value=$dfetch['value']*1.98;
	    		$st='won';
	    		// fetch client points to update
	    		$cquery="select points from client where username='$cid'";
	    		$crun=mysqli_query($conn,$cquery);
	    		$cfetch=mysqli_fetch_assoc($crun);
	    		$cpoints=$cfetch['points'];
	    		$tpoints=$value+$cpoints;
	    		// qry for update clients points
	    		$cuqry="update client set points='$tpoints' where username='$cid'";
	    		$curun=mysqli_query($conn,$cuqry);
	    		if($curun)
	    		{
	    			// update status won team
	    			$qy="update bet set status='$st',wonpts='$value' where clientid='$cid'";
	    			$ru=mysqli_query($conn,$qy);
	    			// update status loss team
	    			$s='loose';
	    			$val=0;
	    			$t='B';
	    			$tk='BP';
	    			$qyl="update bet set status='$s',wonpts='$val' where team='$t' or team='$tk'";
	    			$rul=mysqli_query($conn,$qyl);
	    		}

	    	}
	      echo "Won TEAM A";
	    }
	}
}
?>