<?php
include('AdminPageHeader.php');
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
            <tr>
                    <th>Booking ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Plan</th>
                    <th>Plot Size</th>
                    <th>Query</th>
                </tr>
<?php 
	include('dbconnect.php');
					$res=mysql_query("SELECT * FROM customer_reg inner join customizedplan on customer_reg.cid = customizedplan.cid  where status = 'Booked'");
	  				while($data=mysql_fetch_assoc($res))
					{
						$a = $data['customid'];
						$b = $data['cname'];
						$g = $data['email'];
						$h = $data['phone'];
						$c =$data['plan'];
						$d = $data['plotsize'];
						$e = $data['query'];
						echo "
                <tr>
                    <td>$a</td>
                    <td>$b</td>
					<td>$g</td>
					<td>$h</td>
                    <td><a href='OwnPlan/$c' target='_blank'>Download</a></td>
					
                    
					<td><a href='Admin Allot Staff.php?id=$a'>Allot Architect</a></td>
					
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('CommonPageFooter.php');
?>