<?php
include('StaffPageHeader.php');
?>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4362ca;
  color: white;
}
</style>

<table id="customers">
            
<?php 				
				session_start();
					
					$id = $_SESSION['sid'];
include('dbconnect.php');
	$rs = mysql_query("SELECT count(*) as cnt FROM staff_allot where sid = '$id'");
					$res1 = mysql_fetch_assoc($rs);
					if($res1['cnt']>0)
					{
					$res=mysql_query("SELECT * FROM customizedplan inner join staff_allot on customizedplan.customid = staff_allot.bid inner join customer_reg on customer_reg.cid = customizedplan.cid where status = 'alloted' and sid = '$id' ");
	
					echo "<tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Plan</th>
					<th>Plotsize</th>
					<th>Query</th>
                   					
					
                   
                </tr>";
					
	  				while($data=mysql_fetch_assoc($res))
					{
						$a = $data['customid'];
						$b = $data['cname'];
						$g = $data['email'];
						$h = $data['phone'];
						$d =$data['plan'];
						$h = $data['cid'];
						$f = $data['plotsize'];
						$i = $data['query'];
						
						echo "
                <tr>
                    <td>$a</td>
                    <td>$b</td>
					<td>$g</td>
					<td>$h</td>
					<td><a href='OwnPlan/$d' target='_blank'>Download</a></td>
					
					<td>$f</td>
					<td>$i</td>
					
                    <td><a href='StaffUploadPlan.php?id=$a&cid=$h'>Upload</a></td>
					</td>";
					}
					}
	else
	{
		echo "<h1>No Data</h1>";
	}
						?>
						





            </table>        </center>
<?php
include('CommonPageFooter.php');
?>