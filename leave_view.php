<?php require_once(dirname(__FILE__).'/core/class.datamanager.php');?>
<?php require_once(dirname(__FILE__).'/core/class.db.php');?>
<?php require_once(dirname(__FILE__).'/header.php');?>
<?php require_once(dirname(__FILE__).'/sidebar.php');?>	
<?php require_once(dirname(__FILE__).'/penalty.php');?>	
<?php if(isset($_GET['id'])){
							$id = $_GET['id'];
							$data = datamanager::get_single_row('client', array('id' => $id) );
							if(empty($data['thumb_image'])){
									        if(strtolower($data['gender'])== 'male'){
									          $image =  "assets/male.png";
									        }else{
									          $image =  "assets/female.png";
									        }
							     }else{
							      $image =  $data['thumb_image'];
							     }   
    						 }?>

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<div class="col-md-3">
				<img src="profile_pic/logo_application.jpeg">
			</div>
			<div class="col-md-6">
					<h3 class="page-title">CENTRAL INSTITUTE OF TECHNOLOGY
					</h3>
					<h5 style="font-size: 15px;">(A Centrally Founded Institute Under Ministry of HRD, Govt. of India)</center></h5>
					<br/>
					<h2><center><u>Leave Management System</u></h2>
			</div>
			<div class="col-md-3">
					<h3><?php
										// Prints the day
										echo date("l") . "<br>";

										// Prints the day, date, month, year, time, AM or PM
										echo date(" jS \of F Y ") . "<br>";
										?>
									</h3>
			</div>
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								Leave Request </a>
							</li>														
						</ul>
						<div class="tab-content">						
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<!--<ul class="list-unstyled profile-nav">
											<li>
												<img src="<?=$image;?>" class="img-dataponsive" alt="" width="200" />
												<a href="#" class="profile-edit">
												edit </a>
											</li>											
										</ul>-->
									</div>
									<div class="col-md-9">
										<div class="row">										
											<div class="col-md-12 profile-info">
											
											<div class="form-body">												
												<h3 class="form-section">Account Information</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Name:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['name'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-4">Department</label>
															<div class="col-md-8">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['department'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Employee Id:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['empl_id'];?>
																</p>
															</div>
														</div>
													</div>
												</div>
												<h3 class="form-section">Leave Details</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Apply Date:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['apply_date'];?>
																</p>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Leave Type:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['leave_type'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Leave From:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																	<?=$data['start_date'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Leave To</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['end_date'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">No of Days:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																	<?=$data['no_of_days'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>												
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Holidays:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																	 <?=$data['holidays'];?>
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Totel Leave:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																	 <?=$data['totel_leave'];?>
																</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Status:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																	 <?=$data['status'];?>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
											<!--end col-md-8-->											
											
										</div>
										<!--end row-->

									</div>
								</div>
                                <div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								Message </a>
							</li>														
						</ul>
						<div class="tab-content">						
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-9">
										<div class="row">										
											<div class="col-md-12 profile-info">
											
											<div class="form-body">												
												<h3 class="form-section">Reason For Leave</h3>
												<div class="row">
													<div class="col-md-10">
														<div class="form-group">
															<label class="control-label col-md-3">Reason:</label>
															<div class="col-md-9">
																<p class="form-control-static" style="font-size: 15px;">
																<?=$data['reason'];?>
																</p>
															</div>
														</div>
													</div>												
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
		<div align="right">
            <button type="print" class="btn btn-lg blue hidden-print margin-bottom-5" name="print_button" onclick="javascript:window.print();">
						Print <i class="fa fa-print"></i>
						</button>
			</div>
									</div>
                                </div>
                            </div>
                        </div>

							</div>
							<!--tab_1_2-->
													
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
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
<script src="assets/global/plugins/datapond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/pages/css/profile-old.css" rel="stylesheet" type="text/css"/>
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
<script type="text/javascript" src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
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