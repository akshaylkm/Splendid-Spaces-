<?php
include('AdminPageHeader.php');
?>
<form method="post">
<div class="form-group">
            	<?php
				include('dbconnect.php');
            									$sql=mysql_query("select * from `services`");
		    									echo "<select id='sel' name='sel' class='form-control'  '>";
		    									echo "<option>.....Select Service......</option>";
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
                <input type="submit" name="submit" class="form-control bg-theme" value="Register">
            </div>
</form>
<?php
	include('dbconnect.php');
					  if(isset($_REQUEST['submit']))
					  {
						  $cname=$_REQUEST['sel'];
						  if($cname == 1)
						  {
							  header('Location:AdminAddReadymadePlan.php');
						  }
						  else if($cname == 2 )
						  {
							  header('Location:AdminAddfrontelevation.php');
						  }
					  }
?>
<?php
include('CommonPageFooter.php');
?>