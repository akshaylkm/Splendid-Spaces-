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
                    <th>Feedback ID</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Feedback</th>
                    <th>Posted Date</th>
                   
                </tr>
<?php 
					include('dbconnect.php');
					$res=mysql_query("SELECT * FROM customer_reg inner join feedback on customer_reg.cid = feedback.cid");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['fid'];
						$feed=$data['feedback'];
						$date=$data['fdate'];
						$cust=$data['cname'];
						$mobile = $data['phone'];
						echo "
                <tr>
                    <td>$id</td>
                    <td>$cust</td>
                    <td>$mobile</td>
                    <td>$feed</td> 
                    <td>$date</td>
                </tr>";
					}
						?>
						





            </table>
        </center>
<?php
include('CommonPageFooter.php');
?>