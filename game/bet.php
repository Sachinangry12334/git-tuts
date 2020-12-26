<?php
session_start();
include '../db/dbcon.php';
// for team A
if($_REQUEST['team']=='A')
{
	$id=$_SESSION['cusername'];
	$qry="select * from client where username='$id'";
	$run=mysqli_query($conn,$qry);
	$res=mysqli_fetch_assoc($run);
	if($run)
	{
		$points=$res['points'];
		$value=(int)$_REQUEST['value'];
		if($points>=$value)
		{
			$fmoney=$points-$value;
			$qry="update client set points='$fmoney' where username='$id'";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				$status='loose';
				$team=$_REQUEST['team'];
				$qry="insert into bet (clientid,value,team,status) values('$id','$value','$team','$status')";
				$run=mysqli_query($conn,$qry);
				if($run)
				{
					$qrya="insert into betadmin (clientid,value,team) values('$id','$value','$team')";
					$runa=mysqli_query($conn,$qrya);
					if($runa)
					{
						echo "set your bet succesfully";
					}
					else
					{
						echo 'not set!';
					}
				}
				else
				{
					echo "bet not set! Try again!";
				}
			}
			else
			{
				echo "not deducted money!";
			}
		}
		else
		{
			echo "you have not efficient money!";
		}
	}
	else
	{
		echo "some error ! bet again plz!";
	}
}

// for team B
if($_REQUEST['team']=='B')
{
	$id=$_SESSION['cusername'];
	$qry="select * from client where username='$id'";
	$run=mysqli_query($conn,$qry);
	$res=mysqli_fetch_assoc($run);
	if($run)
	{
		$points=$res['points'];
		$value=(int)$_REQUEST['value'];
		if($points>=$value)
		{
			$fmoney=$points-$value;
			$qry="update client set points='$fmoney' where username='$id'";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				$status='loose';
				$team=$_REQUEST['team'];
				$qry="insert into bet (clientid,value,team,status) values('$id','$value','$team','$status')";
				$run=mysqli_query($conn,$qry);
				if($run)
				{
					$qrya="insert into betadmin (clientid,value,team) values('$id','$value','$team')";
					$runa=mysqli_query($conn,$qrya);
					if($runa)
					{
						echo "set your bet succesfully";
					}
					else
					{
						echo 'not set!';
					}
				}
				else
				{
					echo "bet not set! Try again!";
				}
			}
			else
			{
				echo "not deducted money!";
			}
		}
		else
		{
			echo "you have not efficient money!";
		}
	}
	else
	{
		echo "some error ! bet again plz!";
	}
}

// for pair team A
if($_REQUEST['team']=='AP')
{
	$id=$_SESSION['cusername'];
	$qry="select * from client where username='$id'";
	$run=mysqli_query($conn,$qry);
	$res=mysqli_fetch_assoc($run);
	if($run)
	{
		$points=$res['points'];
		$value=(int)$_REQUEST['value'];
		if($points>=$value)
		{
			$fmoney=$points-$value;
			$qry="update client set points='$fmoney' where username='$id'";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				$status='loose';
				$team=$_REQUEST['team'];
				$qry="insert into bet (clientid,value,team,status) values('$id','$value','$team','$status')";
				$run=mysqli_query($conn,$qry);
				if($run)
				{
					$qrya="insert into betadmin (clientid,value,team) values('$id','$value','$team')";
					$runa=mysqli_query($conn,$qrya);
					if($runa)
					{
						echo "set your bet succesfully";
					}
					else
					{
						echo 'not set!';
					}
				}
				else
				{
					echo "bet not set! Try again!";
				}
			}
			else
			{
				echo "not deducted money!";
			}
		}
		else
		{
			echo "you have not efficient money!";
		}
	}
	else
	{
		echo "some error ! bet again plz!";
	}
}

// for pair team B
if($_REQUEST['team']=='BP')
{
	$id=$_SESSION['cusername'];
	$qry="select * from client where username='$id'";
	$run=mysqli_query($conn,$qry);
	$res=mysqli_fetch_assoc($run);
	if($run)
	{
		$points=$res['points'];
		$value=(int)$_REQUEST['value'];
		if($points>=$value)
		{
			$fmoney=$points-$value;
			$qry="update client set points='$fmoney' where username='$id'";
			$run=mysqli_query($conn,$qry);
			if($run)
			{
				$status='loose';
				$team=$_REQUEST['team'];
				$qry="insert into bet (clientid,value,team,status) values('$id','$value','$team','$status')";
				$run=mysqli_query($conn,$qry);
				if($run)
				{
					$qrya="insert into betadmin (clientid,value,team) values('$id','$value','$team')";
					$runa=mysqli_query($conn,$qrya);
					if($runa)
					{
						echo "set your bet succesfully";
					}
					else
					{
						echo 'not set!';
					}
				}
				else
				{
					echo "bet not set! Try again!";
				}
			}
			else
			{
				echo "not deducted money!";
			}
		}
		else
		{
			echo "you have not efficient money!";
		}
	}
	else
	{
		echo "some error ! bet again plz!";
	}
}
?>