<?php 
	require_once(dirname(__FILE__).'/core/class.datamanager.php');
	require_once(dirname(__FILE__).'/core/class.validation.php');
	require_once(dirname(__FILE__).'/core/class.session.php');	

?>
<?php require_once(dirname(__FILE__).'/header.php');?>
<?php require_once(dirname(__FILE__).'/sidebar.php');?>	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?=$_PageTitle[basename($_SERVER['PHP_SELF'],'.php')];?>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
		<?php  if(isset($_GET['edit'])){
					$id = $_GET['edit'];
					$key = datamanager::get_single_row('admin', array('id' => $id ));
			?>
			<!--start edit form-->
			<div class="form-actions fluid">
							<div class="row">
							<div class="col-md-offset-3 col-md-9">
														<button name="update" type="submit" class="btn blue">Update</button>														
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>

			<!--end edit form-->

			<?php }else{?>
			<!--start add form-->
			<div class="portlet box yellow">
									<div class="portlet-title" style="background-color: #8C0073;">
										<div class="caption">
											<i class="fa fa-gift"></i><b>Apply for Leave</b>
										</div>										
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" method="POST" name="add_staff" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<!--<button type="submit" class="btn green">Submit</button>-->
														<!--<button type="button" class="btn default">Cancel</button>-->
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Employee Id <span class="required">*</span>  </label>
													<div class="col-md-4">
														<input type="text" name="empl_id" class="form-control" placeholder="Enter Employee Id" required="required">														
													</div>
												</div>
											</div>											
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Name <span class="required">*</span></label>
													<div class="col-md-4">
														<input type="text" name="name" class="form-control" placeholder="Enter Name" required="required">														
													</div>
												</div>
											</div>
                                            <div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Department<span class="required">*</span></label>
													<div class="col-md-4">
														<select id="department" name="department" class="form-control" placeholder="Enter Your Department" required="required">
                			<option value="Enter Your Department"></option>
					<option value="CE" <?php if($finance_type=='CE'){echo 'selected="selected"';}?> >Civil Engineering</option>
					<option value="CSE" <?php if($finance_type=='CSE'){echo 'selected="selected"';}?> >Computer Science and Engineering</option>
					<option value="ECE" <?php if($finance_type=='ECE'){echo 'selected="selected"';}?> >Electronices and Communication Engineering</option>
					<option value="FET" <?php if($finance_type=='CSE'){echo 'selected="selected"';}?> >Food Engineering Technology</option>
					<option value="IE" <?php if($finance_type=='CE'){echo 'selected="selected"';}?> >Instrumentation Engineering</option>
					<option value="IT" <?php if($finance_type=='IT'){echo 'selected="selected"';}?> >Information Technology</option>
					<option value="MCD" <?php if($finance_type=='MCD'){echo 'selected="selected"';}?> >Multimedia Communication Design</option>
					<option value="EE" <?php if($finance_type=='EE'){echo 'selected="selected"';}?> >Electrical Engineering</option>
					<option value="ME" <?php if($finance_type=='ME'){echo 'selected="selected"';}?> >Mechanical Engineering</option>
					<option value="MATH" <?php if($finance_type=='MATH'){echo 'selected="selected"';}?> >Mathematics</option>
					<option value="CHE" <?php if($finance_type=='CHE'){echo 'selected="selected"';}?> >Chemistry</option>
					<option value="PHY" <?php if($finance_type=='PHY'){echo 'selected="selected"';}?> >Physics</option>
					<option value="HU" <?php if($finance_type=='HU'){echo 'selected="selected"';}?> >Humanities and Social Science</option>																										</select>														
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Apply Date<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="date"  name="apply_date" class="form-control" placeholder="Enter Holidays" required="required">														
													</div>
												</div>
											</div>
											<div class="form-body">
										<div class="form-group">
											<label class="col-md-3 control-label">Leave Type<span class="required">*</span></label>
											<div class="col-md-4">
											<select id="leave_type" name="leave_type" class="form-control" placeholder="Enter Your Leave" required="required">
						<option value="Enter Your Leave"></option>
						<option value="CL" <?php if($finance_type=='CL'){echo 'selected="selected"';}?> >Casual Leave</option>
						<option value="EL" <?php if($finance_type=='EL'){echo 'selected="selected"';}?> >Earned Leave</option>
					<option value="HPL" <?php if($finance_type=='HPL'){echo 'selected="selected"';}?> >Half Pay Leave</option>
						<option value="SL" <?php if($finance_type=='SL'){echo 'selected="selected"';}?> >Sick Leave</option>
											</select>														
											</div>
										</div>
									</div>
                                            <div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Leave Start<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="date" name="start_date" class="form-control" placeholder="Enter Date" required="required">														
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Leave End<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="date"  name="end_date" class="form-control" placeholder="Enter Date" required="required">														
													</div>
												</div>
											</div>
                                            <div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">No of Days<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="text"  name="no_of_days" class="form-control" placeholder="Enter Days" required="required">														
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Holidays<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="text"  name="holidays" class="form-control" placeholder="Enter Holidays" required="required">														
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Totel Leave<span class="required">*</span></label>
													<div class="col-md-4">
														<input type="text" readonly="readonly" name="totel_leave" class="form-control" placeholder="Enter Days" required="">														
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Reason<span class="required">*</span></label>
													<div class="col-md-4">
														<textarea name="reason" class="form-control" rows="6"></textarea>														
													</div>
												</div>
											</div>
								
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green"	onclick="this.value='Submitting ..';this.disabled='disabled'; this.form.submit();">Submit</button>
														<!--<button type="button" class="btn default">Cancel</button>-->
														<a href="users.php" class="btn default">Cancel</a>
													</div>
												</div>
											</div>
										</form>
										<?php
										if($_POST)
	{
	
	if(isset($_POST['empl_id']) && isset($_POST['name']) && isset($_POST['department']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['no_of_days']) && isset($_POST['holidays']) && isset($_POST['totel_leave']) && isset($_POST['leave_type']) && isset($_POST['apply_date']) && isset($_POST['reason']))
	{ 
	$empl_id=$_POST['empl_id'];
	$name=$_POST['name'];
	$department=$_POST['department'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$no_of_days=$_POST['no_of_days'];
	$holidays=$_POST['holidays'];
	$totel_leave=$_POST['totel_leave'];
	$leave_type=$_POST['leave_type'];
	$apply_date=$_POST['apply_date'];
	$reason=$_POST['reason'];
	$totel_leave = ($no_of_days - $holidays);
	   echo ($totel_leave);
	
	
	/*
	echo $dealer_name;
	echo '<br/>';
	echo $client_name;
	echo '<br/>';
	echo $vehicle_type;
	echo '<br/>';
	echo $brand;
	echo '<br/>';
	echo $model;
	echo '<br/>';
	echo $price;
	echo '<br/>';
	echo $date;
	*/
	define("DB_CONN","mysql:dbname=leave");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","");
	$dbhi=new PDO(DB_CONN, DB_USERNAME, DB_PASSWORD);
	
$mysql_insert_dealer = $dbhi->prepare("INSERT INTO `leave`.`client` 
(`empl_id`, `name`, `department`,`start_date`,`end_date`,`no_of_days`,`holidays`, `totel_leave`, `leave_type`, `apply_date`, `reason`) 
VALUES 
('$empl_id', '$name', '$department', '$start_date','$end_date','$no_of_days', '$holidays', '$totel_leave', '$leave_type', '$apply_date', '$reason')");
$mysql_insert_dealer->execute();

	/* $mysql_insert_dealer = $dbhi->prepare("INSERT INTO dealer_payment 
	(id, dealer_name, client_name, vehicle type, brand, model, price, purchase_date)
	VALUES (?, ?, ?, ?, ?, ?, ?,?)");
							
							$mysql_insert_dealer->execute(array(NULL,$dealer_name,$client_name,$vehicle_type,$brand,$model,$price,$date)); */
							//$mysql_query1->execute(array(dealer_name,client_name,vehicle_type,brand,model,price,date));
							header("location:leave_record.php");

							
	} //isset
	} // if post
	?>
										<!-- END FORM-->
									</div>
								</div>
						<!--ends add form-->		

							<?php }?>

										
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
<?php require_once(dirname(__FILE__).'/quick_sidebar.php');?>	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		<?php echo date('Y')." &copy; ".SITE." | Developed by ".DEVELOPED;?> 
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/form-validation.js"></script>
<script src="process/search_ajax.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>

