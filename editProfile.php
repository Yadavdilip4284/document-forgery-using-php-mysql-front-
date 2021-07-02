<?php 
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include 'include/dbconn.php';
include("include/session.php");
$club_row=checkUser();
$user_id=$_GET['id'];

//retreive product details
$sqlDetailStudent = "SELECT * FROM  users where id=".$user_id;
$resultDetailStudent = $conn->query($sqlDetailStudent);
$rowDetailStudent = $resultDetailStudent->fetch_assoc();

$id =$rowDetailStudent['id'];
$first_name =$rowDetailStudent['first_name'];
$last_name =$rowDetailStudent['last_name'];
$email =$rowDetailStudent['email'];

?>
<!DOCTYPE HTML>
<html lang="en-US">
    
<head>

        <meta charset="UTF-8">
        <title>Add Products - Ageless Clinic</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/ico" href="favicon.ico">
        
    <!-- common stylesheets-->
        <!-- bootstrap framework css -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
        <!-- iconSweet2 icon pack (16x16) -->
            <link rel="stylesheet" href="img/icsw2_16/icsw2_16.css">
        <!-- splashy icon pack -->
            <link rel="stylesheet" href="img/splashy/splashy.css">
        <!-- flag icons -->
            <link rel="stylesheet" href="img/flags/flags.css">
        <!-- power tooltips -->
            <link rel="stylesheet" href="js/lib/powertip/jquery.powertip.css">
        <!-- google web fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">

	<!-- aditional stylesheets -->
        <!-- jQuery UI theme -->
            <link rel="stylesheet" href="js/lib/jquery-ui/css/Aristo/Aristo.css">
        <!-- 2 col multiselect -->
            <link rel="stylesheet" href="js/lib/multi-select/css/multi-select.css">
        <!-- enchanced select box, tag handler -->
            <link rel="stylesheet" href="js/lib/select2/select2.css">
        <!-- datepicker -->
            <link rel="stylesheet" href="js/lib/bootstrap-datepicker/css/datepicker.css">
        <!-- timepicker -->
            <link rel="stylesheet" href="js/lib/bootstrap-timepicker/css/timepicker.css">
        <!-- colorpicker -->
            <link rel="stylesheet" href="js/lib/bootstrap-colorpicker/css/colorpicker.css">
        <!-- switch buttons -->
            <link rel="stylesheet" href="js/lib/ibutton/css/jquery.ibutton.css">
        <!-- UI Spinners -->
            <link rel="stylesheet" href="js/lib/jqamp-ui-spinner/css/jqamp-ui-spinner.css">
        <!-- multiupload -->
            <link rel="stylesheet" href="js/lib/plupload/js/jquery.plupload.queue/css/plupload-beoro.css">
			
        <!-- main stylesheet -->
            <link rel="stylesheet" href="css/beoro.css">

		<!--ckeditor-->
		<script src="ckeditor/ckeditor.js"></script>
		<script src="ckeditor/set.js"></script>
		
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css"><![endif]-->
        <!--[if IE 9]><link rel="stylesheet" href="css/ie9.css"><![endif]-->
            
        <!--[if lt IE 9]>
            <script src="js/ie/html5shiv.min.js"></script>
            <script src="js/ie/respond.min.js"></script>
            <script src="js/lib/flot-charts/excanvas.min.js"></script>
        <![endif]-->

    </head>
    <body class="bg_d">
    <!-- main wrapper (without footer) -->    
        <div class="main-wrapper">
        <!-- top bar -->
            <?php include "header.php"; ?>

        <!-- breadcrumbs -->
            <div class="container">
				<div class="row-fluid" style="margin-top:25px;margin-bottom:25px;">
					<div class="span12">
						<p class="anlt_content">Edit Profile Details</p>
						
					</div>
				</div>
            </div>
            
        <!-- main content -->
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="w-box">
                            <div class="w-box-header">
                                <h4>Enter Profile Details</h4>
                            </div>
                            <div class="w-box-content">
                                <form method="post" action="editProfilePHP.php" enctype="multipart/form-data">
									<input class="span10" type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="formSep">
											<div class="span6">
												<label class="req">Enter First Name</label>
												<input class="span10" type="text" name="first_name" value="<?php echo $first_name; ?>" required/>
											</div>
											<div class="span6">
												<label class="req">Enter Last Name</label>
												<input class="span10" type="text" name="last_name" value="<?php echo $last_name; ?>" required/>
											</div>
                    </div>
																
									
										<div class="formSep">
											<div class="span6">
												<label class="req">Enter Email</label>
												<input class="span10" type="text" name="email" value="<?php echo $email; ?>" readonly required/>
											</div>
											<div class="span6">
												<label class="req">Enter Password</label>
												<input class="span10" type="password" name="password" value="<?php echo $password; ?>" required/>
											</div>
                    </div>
									
									 <div class="formSep">
                      <button type="submit" class="btn btn-sm btn-success">Update</button>
                  </div>
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
		
			
		</div>
            <div class="footer_space"></div>
        </div> 

    <!-- footer --> 
        <?php include "footer.php" ?>
        
     <!-- Common JS -->
        <!-- jQuery framework -->
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-migrate.js"></script>
        <!-- bootstrap Framework plugins -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- top menu -->
            <script src="js/jquery.fademenu.js"></script>
        <!-- top mobile menu -->
            <script src="js/selectnav.min.js"></script>
        <!-- actual width/height of hidden DOM elements -->
            <script src="js/jquery.actual.min.js"></script>
        <!-- jquery easing animations -->
            <script src="js/jquery.easing.1.3.min.js"></script>
        <!-- power tooltips -->
            <script src="js/lib/powertip/jquery.powertip-1.1.0.min.js"></script>
        <!-- date library -->
            <script src="js/moment.min.js"></script>
        <!-- common functions -->
            <script src="js/beoro_common.js"></script>


    <!-- Forms -->  
        <!-- jQuery UI -->
            <script src="js/lib/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <!-- touch event support for jQuery UI -->
            <script src="js/lib/jquery-ui/jquery.ui.touch-punch.min.js"></script>
        <!-- progressbar animations -->
            <script src="js/form/jquery.progressbar.anim.min.js"></script>
        <!-- 2col multiselect -->
            <script src="js/lib/multi-select/js/jquery.multi-select.min.js"></script>
            <script src="js/lib/multi-select/js/jquery.quicksearch.min.js"></script>
        <!-- combobox -->
            <script src="js/form/fuelux.combobox.min.js"></script>
        <!-- file upload widget -->
            <script src="js/form/bootstrap-fileupload.min.js"></script>
        <!-- masked inputs -->
            <script src="js/lib/jquery-inputmask/jquery.inputmask.min.js"></script>
            <script src="js/lib/jquery-inputmask/jquery.inputmask.extensions.js"></script>
            <script src="js/lib/jquery-inputmask/jquery.inputmask.date.extensions.js"></script>
        <!-- enchanced select box, tag handler -->
            <script src="js/lib/select2/select2.min.js"></script>
        <!-- password strength metter -->
            <script src="js/lib/pwdMeter/jquery.pwdMeter.min.js"></script>
        <!-- datepicker -->
            <script src="js/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <!-- timepicker -->
            <script src="js/lib/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <!-- colorpicker -->
            <script src="js/lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- metadata -->
            <script src="js/lib/ibutton/js/jquery.metadata.min.js"></script>
        <!-- switch buttons -->
            <script src="js/lib/ibutton/js/jquery.ibutton.beoro.js"></script>
        <!-- autosize textarea -->
            <script src="js/form/jquery.autosize.min.js"></script>
        <!-- textarea counter -->
            <script src="js/lib/jquery-textarea-counter/jquery.textareaCounter.plugin.min.js"></script>
        <!-- UI Spinners -->
            <script src="js/lib/jqamp-ui-spinner/globalize/globalize.min.js"></script>
            <script src="js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.fr-FR.js"></script>
            <script src="js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.ja-JP.js"></script>
            <script src="js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.zh-CN.js"></script>
            <script src="js/lib/jqamp-ui-spinner/compiled/jqamp-ui-spinner.min.js"></script>
            <script src="js/lib/jqamp-ui-spinner/compiled/jquery-mousewheel-3.0.6.min.js"></script>
        <!-- plupload and the jQuery queue widget -->
            <script type="text/javascript" src="js/lib/plupload/js/plupload.full.js"></script>
            <script type="text/javascript" src="js/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
        <!-- WYSIWG Editor -->
            <script src="js/lib/ckeditor/ckeditor.js"></script>

            <script src="js/pages/beoro_form_elements.js"></script>
			
<script>
		initSample();
		initSample1();
		initSample2();
		initSample3();
		initSample4();
	</script>
	
<script>	
	$(function(){
			$(".update_form").click(function() {
				var myform = $(this).closest("form");
				event.preventDefault();
				var form = $(this);
				$.ajax({
					url: "updateSizePriceAvailabilityPHP.php",
					type: "post",
					data: myform.serialize(),
					success: function(d) {
						alert(d);
					}
				});
			});
		}) 
</script>
</body>

</html>