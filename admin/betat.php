<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	// if restart match

	if($_REQUEST['type']=='restart')
	{
		$qry="truncate betadmin";
		$res=mysqli_query($conn,$qry);
		if($res)
	    {
	    	$picname='back.png';
	    	$qrys="update patti set patti='$picname'";
            $ress=mysqli_query($conn,$qrys);
            if($ress)
            {
            	echo "RESTART MATCH succesfully";
            }
             
	    }
	    
	}
}
?>