<?php
include('CustomerPageHeader.php');
?>
<div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Plot Size</label>
                <input type="text" class="form-control" placeholder="Enter the plot size" name="plot" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-email" class="col-form-label">Attach your Plan</label>
                <input type="file" class="form-control" name="file" id="recipient-email"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Query</label>
                <input type="text" class="form-control" placeholder="Enter your Query" name="query" id="recipient-name"
                    required="">
            </div>
            
            
            
            
            <div class="right-w3l">
                <input type="submit" name="submit" class="form-control bg-theme" value="Add Now">
            </div>
            <br/>
            <br/>
            <div class="input-group-append">
                                    <a href="CustomerViewCustomPlan.php" class="btn bg-theme">View Your Custom Plan</a>
                                </div>
        </form>
    </div>
    <?php
session_start();
	include('dbconnect.php');
					  if(isset($_REQUEST['submit']))
					  {
						  	$cname=$_REQUEST['plot'];
					  		$query=$_REQUEST['query'];
						  	
					  		$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$a = $_SESSION["cid"];
echo $file_type;

if($file_name!="")

if(move_uploaded_file ($file_path,'OwnPlan/'.$file_name))
					  		
					  					  $qry="insert into customizedplan values('','$cname','$file_name','$query','$a','Booked')";
						  echo $qry;
					 		mysql_query($qry);
					 		
							echo "<script>alert('Plan added successfully')</script>";
					 
					  }
					  
					  ?>	


<?php
include('CommonPageFooter.php');
?>