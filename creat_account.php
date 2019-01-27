<?php
	require_once(dirname(__FILE__).'/core/class.datamanager.php');
	require_once(dirname(__FILE__).'/core/class.session.php');
	require_once(dirname(__FILE__).'/penalty.php');
	$error="";
	
	if(isset($_POST['submit'])) {
		
	$email = $username = $_POST['username'];
	$password = $_POST['password'];	
	
	 $success=datamanager::check_login($username,$password);
	
	
	if($success) {
	/*$session= new session();
	$sid=$session->generate_sid( $chars = 100, $alpha = TRUE, $numeric = TRUE, $symbols = TRUE, $timestamp = TRUE );
	$email = datamanager::get_single('email',array('username' =>$username ),'admin');	
	$session->set( 'email', $email );
	$session->set( 'sid', $sid );	*/
	
	echo "log";
	header("Location: new_client.php");
	//die();	
	}else {
	$error="Invalid Login ID";		
		}
	}
	
?>	
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Leave management System | Login Form </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/pages/css/login3.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login" background="profile_pic/black-felt.png">
<!-- BEGIN LOGO -->
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
	
    		<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form action="" method="POST" name="add_staff" class="form-horizontal">
		<h3 class="form-title"><font size="4.5">NEW ACCOUNT REGISTRATION</font></h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
		</div>	
				<div class="form-group">
                    <div class="input-icon">
                        <input type="text" name="empl_id" class="form-control" placeholder="Enter Empl Id">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                    </div>
                </div>
                <div class="form-group">
                	<div class="input-icon">
                		<select id="department" name="department" class="form-control" placeholder="Enter Your Department" required="">
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
						<option value="HU" <?php if($finance_type=='HU'){echo 'selected="selected"';}?> >Humanities and Social Science</option>																										
				</select>
                </div>
                </div>    
                <div class="form-group">
                    <div class="input-icon">
                        <input type="text"  name="username" class="form-control" placeholder="Enter User Name" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <input type="text"  name="email" class="form-control" placeholder="Enter Email Id" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <input type="password"  name="password" class="form-control" placeholder="Enter Password" required="">
                    </div>
                </div>
                <div class="form-group">
                	<div class="input-icon">
                		<select id="role" name="role" class="form-control" placeholder="Enter Your Role" required="">
                			<option value="Enter Your Role"></option>
						<option value="faculty" <?php if($finance_type=='faculty'){echo 'selected="selected"';}?> >I AM Faculty</option>
						<option value="hod" <?php if($finance_type=='hod'){echo 'selected="selected"';}?> >I AM HOD</option>																										
				</select>
                </div>
                </div>
                <div class="form-group">
                     <label>
                         <input type="checkbox"/> I agree to the <a href="#">
                          Terms of Service </a>
                          and <a href="#">
                          Privacy Policy </a>
                      </label>
                      
				</div>
                
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn green"	onclick="this.value='Submitting ..';this.disabled='disabled'; this.form.submit();">Submit</button>
						<!--<button type="button" class="btn default">Cancel</button>-->
						<a href="index.php" class="btn default">Back</a>
					</div>
				</div>
       
		
	</form>
    <?php
										if($_POST)
	{

	if(isset($_POST['empl_id']) && isset($_POST['name']) && isset($_POST['department'])  && isset($_POST['username'])  && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['role']))
	{
	$empl_id=$_POST['empl_id'];
	$name=$_POST['name'];
	$department=$_POST['department'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	define("DB_CONN","mysql:dbname=leave");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","");
	$dbhi=new PDO(DB_CONN, DB_USERNAME, DB_PASSWORD);

	$token_id=md5(time());
	
$mysql_insert_dealer = $dbhi->prepare("INSERT INTO `leave`.`admin`
(`empl_id`,`name`, `department`, `username`, `email`,`password`,`role`)
VALUES
('$empl_id','$name', '$department', '$username', '$email','$password','$role')");
$mysql_insert_dealer->execute();

							header("location:index.php");

	} //isset
	} // if post
	?>
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
 
});
</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>