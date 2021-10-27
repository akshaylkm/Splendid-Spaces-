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
                    
                   
                </tr>
<?php 
	include('dbconnect.php');
					$res=mysql_query("SELECT * FROM ready_cust_order inner join customer_reg on ready_cust_order.cid = customer_reg.cid inner join readymadeplan on readymadeplan.rid = ready_cust_order.planid where status = 'Booked'");
	  				while($data=mysql_fetch_assoc($res))
					{
						$a = $data['roid'];
						$b = $data['cname'];
						$g = $data['email'];
						$h = $data['phone'];
						$c =$data['plan'];
						
						
						echo "
                <tr>
                    <td>$a</td>
                    <td>$b</td>
					<td>$g</td>
					<td>$h</td>
                    <td><img src='Readymade/$c' alt='' style='display: block; max-width: 50%; max-height:50%;'></td>
					
					
                    
					<td><a href='AdminAcceptReadymadeBooking.php?id=$a'>Delivered</a></td>
					
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('CommonPageFooter.php');
?>