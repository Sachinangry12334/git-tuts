<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	if($_REQUEST['type']=='fetch')
	{
		$qy="select * from betadmin";
        $reu=mysqli_query($conn,$qy);
        while($fet=mysqli_fetch_assoc($reu))
        {
        	
        	if(!empty($fet))
            {
            	echo $dat='<tr>
					          <td>'.$fet['clientid'].'</td>
					          <td>'.$fet['value'].'</td>
					          <td>'.$fet['team'].'</td>
					        </tr>';
            }
            else
            {
            	echo "<tr>";
		        echo "<td>";
		        echo "no data found";
		        echo "</td>";
		        echo "</tr>";
            }
        
        }
	}
}
?>