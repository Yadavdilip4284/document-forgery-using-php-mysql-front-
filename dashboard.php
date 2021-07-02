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

        <meta charset="UTF-8">
        <title>Dashboard - Ageless</title>
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
        <!-- colorbox -->
            <link rel="stylesheet" href="js/lib/colorbox/colorbox.css">
        <!--fullcalendar -->
            <link rel="stylesheet" href="js/lib/fullcalendar/fullcalendar_beoro.css">


        <!-- main stylesheet -->
            <link rel="stylesheet" href="css/beoro.css">
    </head>
    <body class="bg_d">
    <!-- main wrapper (without footer) -->    
        <div class="main-wrapper">
        <!-- top bar -->
            <?php include "header.php"; ?>
        <!-- main content -->
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="w-box w-box-blue">
                            <div class="w-box-header">
                            </div>
                            <div class="w-box-content">
                                <div id="calendar_widget"></div>
                            </div>
                         </div>
                    </div>  
                </div>
            </div>
            <div class="footer_space"></div>
        </div> 

    <!-- footer --> 
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <div>&copy; Designed and Maintained by <a href="#" target="_blank">Dilip Yadav.</a></div>
                    </div>
                    <div class="span7">
                        <ul class="unstyled">
                            <li><a href="#">Copyright</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Terms & Condidtion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
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


    <!-- Dashboard JS -->
        <!-- jQuery UI -->
            <script src="js/lib/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <!-- touch event support for jQuery UI -->
            <script src="js/lib/jquery-ui/jquery.ui.touch-punch.min.js"></script>
        <!-- colorbox -->
            <script src="js/lib/colorbox/jquery.colorbox.min.js"></script>
        <!-- fullcalendar -->
            <script src="js/lib/fullcalendar/fullcalendar.min.js"></script>
        <!-- flot charts -->
            <script src="js/lib/flot-charts/jquery.flot.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.resize.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.pie.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.orderBars.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.tooltip.js"></script>
            <script src="js/lib/flot-charts/jquery.flot.time.js"></script>
        <!-- responsive carousel -->
            <script src="js/lib/carousel/plugin.min.js"></script>
        <!-- responsive image grid -->
            <script src="js/lib/wookmark/jquery.imagesloaded.min.js"></script>
            <script src="js/lib/wookmark/jquery.wookmark.min.js"></script>

            <script src="js/pages/beoro_dashboard.js"></script>

<script>
    if($(window).width() > '1280') {
        $('body').append('<a href="javascript:void" class="fluid_lay" style="position:fixed;top:6px;right:10px;z-index:10000" title="fluid layout"><i class="splashy-arrow_state_grey_left"></i><i class="splashy-arrow_state_grey_right"></i></a>');
        $('.fluid_lay').click(function() {
            var url = window.location.href;    
            if (url.indexOf('?') > -1){
               url += '&fluid=1'
            }else{
               url += '?fluid=1'
            }
            window.location.href = url;
        });
        $(window).on('resize',function() {
            if($(window).width() > '1280') {
                $('.fluid_lay').show();
            } else {
                $('.fluid_lay').hide();
            }
        })
    }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65387713-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>

<!-- Mirrored from beoro-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Sep 2016 11:16:58 GMT -->
</html>