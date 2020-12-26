<?php
include '../db/dbcon.php';
$qry="select timer from time";
$res=mysqli_query($conn,$qry);
$fet=mysqli_fetch_assoc($res);
if($res)
{
	echo $fet['timer'];
}
?>