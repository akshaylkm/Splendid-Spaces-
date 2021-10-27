<?php
include('StaffPageHeader.php');
?>
 <div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">File</label>
                <input type="file" class="form-control" name="file" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Query</label>
                <input type="text" class="form-control" placeholder="your name" name="na" id="recipient-name"
                    required="">
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
			$sid = $_SESSION['sid'];
			$q = $_REQUEST['na'];
			$id = $_GET['id'];
			$cid = $_GET['cid'];
			$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];




if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"))

if(move_uploaded_file ($file_path,'OwnPlan/'.$file_name))
			$qry = "insert into staff_custom_plan (customid,plan,query,sid,cid) values('$id','$file_name','$q','$sid','$cid')";
			echo $qry;
			mysql_query($qry);
			$qry1 = "update customizedplan set status='uploaded' where customid = '$id'";
			mysql_query($qry1);
			
		}
	?>
<?php
include('CommonPageFooter.php');
?>