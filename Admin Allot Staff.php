<?php
include('AdminPageHeader.php');
?>
 <div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3">
            
            <div class="form-group">
            	<?php
				include('dbconnect.php');
            									$sql=mysql_query("select * from `staff_reg`");
		    									echo "<select id='sel' name='sel' class='form-control'  '>";
		    									echo "<option>.....Select Staff......</option>";
		    									if(mysql_num_rows($sql))
												{		
													while($rs=mysql_fetch_array($sql))
													{
														echo'<option value="'.$rs['sid'].'">'.$rs['sname'].'</option>';
													}
												}
											echo "</select>";?>
            </div>
             
            <div class="right-w3l">
                <input type="submit" name="submit" class="form-control bg-theme" value="Allot Now">
            </div>
        </form>
    </div>
	<?php
		include('dbconnect.php');
		session_start();
		if(isset($_REQUEST['submit']))
		{
			$id = $_GET['id'];
			$a = $_REQUEST['sel'];
			
			$qry = "insert into staff_allot (bid,sid) values('$id','$a')";
			mysql_query($qry);
			$qry1 = "update customizedplan set status='alloted' where customid = '$id'";
			mysql_query($qry1);
			
			header("Location:AdminViewCustomPlan.php");
		}
	?>
<?php
include('CommonPageFooter.php');
?>