<?php
include('CustomerPageHeader.php');
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
                    <th>ID</th>
                    
                    <th>Plan</th>
                    <th>Query</th>
                </tr>
<?php 
	include('dbconnect.php');
	session_start();
	$cid = $_SESSION['cid'];
					$res=mysql_query("SELECT * FROM customer_reg inner join customizedplan on customer_reg.cid = customizedplan.cid inner join staff_custom_plan on customizedplan.customid = staff_custom_plan.customid  where status = 'uploaded' and customer_reg.cid ='$cid' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$a = $data['customid'];
						$c =$data['plan'];
						$e = $data['query'];
						echo "
                <tr>
                    <td>$a</td>
                    <td><a href='OwnPlan/$c' target='_blank'>Download</a></td>
					
                    <td>$e</td>
					
                </tr>";
					}
						?>
						





            </table>        </center>

<?php
include('CommonPageFooter.php');
?>