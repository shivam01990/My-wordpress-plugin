
<?php 
error_reporting(0);
include('Common_Admin.php');
?>
<?php 
$apikey = get_option('idealfeeds_apikey', $apikey);

$access=trim($_POST['access']);


if($access=="Y"){	
	$apikey=trim($_POST['idealfeeds_apikey']);	
	update_option('idealfeeds_apikey', $apikey);	
}
?>
<div class="container row">
	<div class="page-header">
		<h1> Settings</h1>
	</div>
	<?php if ($access=="Y") echo '<div class="alert alert-success"><a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a> <strong>Saved Successfully!</strong></div>'; ?>

	<form class="form-horizontal col-sm-6" name="" method="post" action="">
		<input type="hidden" name="access" value="Y">		
		<div class="form-group">
			<label for="idealfeeds_apikey" class="col-sm-2 control-label">API Key:</label>
			<div class="col-sm-10">
				<input type="text" name="idealfeeds_apikey"  class="form-control" value="<?php echo $apikey?>" size="50">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="update" value="Save"  class="btn btn-primary" >
			</div>
		</div>
	</form>
</div>

<?php //if($apikey=='') echo "disabled='disabled'";?>