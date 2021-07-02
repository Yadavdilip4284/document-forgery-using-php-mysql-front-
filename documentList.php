<?php 
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include 'include/dbconn.php';
include("include/session.php");
$club_row=checkUser();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Document List</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/ico" href="favicon.ico">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="img/icsw2_16/icsw2_16.css">
        <link rel="stylesheet" href="img/splashy/splashy.css">
        <link rel="stylesheet" href="img/flags/flags.css">
        <link rel="stylesheet" href="js/lib/powertip/jquery.powertip.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
        <link rel="stylesheet" href="js/lib/colorbox/colorbox.css">
        <link rel="stylesheet" href="js/lib/fullcalendar/fullcalendar_beoro.css">
        <link rel="stylesheet" href="css/beoro.css">

    </head>
    <body class="bg_d"> 
        <div class="main-wrapper">
            <?php include "header.php"; ?>
            <div class="container">
                <div class="row-fluid" style="margin-top:25px;margin-bottom:25px;>
                    <div class="span12">
                        <div class="w-box">
                            <div class="w-box-header">
                                <span>Document List</span>
                            </div>
                            <div class="w-box-content">
                                <table class="table table-striped" id="smpl_tbl">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Student Name</th>
                                            <th>SSC</th>
                                            <th>HSC</th>
											<th>Diploma</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										$sqlDocument = "SELECT * FROM  documents";
										$resultDocument = $conn->query($sqlDocument);
										if ($resultDocument->num_rows > 0) 
										{
											$i=1;	
											while($rowDocument = $resultDocument->fetch_assoc()) 
											{    
                                                $id = $rowDocument['id'];
                                                $user_id = $rowDocument['user_id'];
                                                $ssc = $rowDocument["ssc"];
                                                $hsc = $rowDocument["hsc"];
                                                $diploma = $rowDocument["diploma"];
                                                $sqlUser = "SELECT first_name FROM  users WHERE user_type = 'student' AND id=$user_id;";
                                                $resultUser = $conn->query($sqlUser);
                                                $rowUser = $resultUser->fetch_assoc();
                                                $name = $rowUser['first_name'];
												echo '<tr>
													   <td>'.$i.'</td>
                                                       <td>'.ucfirst($name).'</td>
													   <td><a href="http://localhost/dilipdf/store/documents/'.$ssc.'" target="_blank" ><img style="width: 200px;height: 200px;" src="http://localhost/dilipdf/store/documents/'.$ssc.'" alt="SSC"></a></td>
                                                       <td><a href="http://localhost/dilipdf/store/documents/'.$hsc.'" target="_blank" ><img style="width: 200px;height: 200px;" src="http://localhost/dilipdf/store/documents/'.$hsc.'" alt="HSC"></a></td>
                                                       <td><a href="http://localhost/dilipdf/store/documents/'.$diploma.'" target="_blank" ><img style="width: 200px;height: 200px;" src="http://localhost/dilipdf/store/documents/'.$diploma.'" alt="DIPLOMA"></a></td>
                                                       <td><a style="color:red;" href="deleteDocument.php?id='.$id.'" >Delete</a></td>' ;
												echo '</tr>';
												$i++;
												
											}
										}else{
                                            echo '<tr>
                                                   <td style="text-align: center;color: red;" colspan="5">Record Not Found.</td>';
                                            echo '</tr>';
                                        }
									?>			
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
                </div>
                
                
            </div>
            <div class="footer_space"></div>
        </div> 

    <!-- footer --> 
        <?php include "footer.php" ?>
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-migrate.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="js/jquery.fademenu.js"></script>
            <script src="js/selectnav.min.js"></script>
            <script src="js/jquery.actual.min.js"></script>
            <script src="js/jquery.easing.1.3.min.js"></script>
            <script src="js/lib/powertip/jquery.powertip-1.1.0.min.js"></script>
            <script src="js/moment.min.js"></script>
            <script src="js/beoro_common.js"></script>
            <script src="js/lib/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
            <script src="js/lib/jquery-ui/jquery.ui.touch-punch.min.js"></script>
            <script src="js/lib/colorbox/jquery.colorbox.min.js"></script>
            <script src="js/lib/fullcalendar/fullcalendar.min.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.resize.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.pie.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.orderBars.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.tooltip.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.time.js"></script>
            <script src="js/lib/carousel/plugin.min.js"></script>
            <script src="js/lib/wookmark/jquery.imagesloaded.min.js"></script>
            <script src="js/lib/wookmark/jquery.wookmark.min.js"></script>
            <script src="js/pages/beoro_dashboard.js"></script>
    </body>
</html>