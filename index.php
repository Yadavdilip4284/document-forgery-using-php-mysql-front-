<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="icon" type="image/ico" href="favicon.ico">
    <title>Student Registration</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet'>
    <!-- jQuery framework -->
        <script src="js/jquery.min.js"></script>
    <!-- validation -->
        <script src="js/lib/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
        (function(a){a.fn.vAlign=function(){return this.each(function(){var b=a(this).height(),c=a(this).outerHeight(),b=(b+(c-b))/2;a(this).css("margin-top","-"+b+"px");a(this).css("top","50%");a(this).css("position","absolute")})}})(jQuery);(function(a){a.fn.hAlign=function(){return this.each(function(){var b=a(this).width(),c=a(this).outerWidth(),b=(b+(c-b))/2;a(this).css("margin-left","-"+b+"px");a(this).css("left","50%");a(this).css("position","absolute")})}})(jQuery);
        $(document).ready(function() {
            if($('#login-wrapper').length) {
                $("#login-wrapper").vAlign().hAlign()
            };
            if($('#login-validate').length) {
                $('#login-validate').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    rules: {
                        first_name: { required: true },
                        last_name: { required: true }
                        email: { required: true },
                        password: { required: true }
                    }

                })
            }
            // if($('#forgot-validate').length) {
            //     $('#forgot-validate').validate({
            //         onkeyup: false,
            //         errorClass: 'error',
            //         rules: {
            //             forgot_email: { required: true, email: true }
            //         }
            //     })
            // }
            $('#pass_login').click(function() {
                $('.panel:visible').slideUp('200',function() {
                    $('.panel').not($(this)).slideDown('200');
                });
                $(this).children('span').toggle();
            });
        });
    </script>
</head>
<body>
    <div id="login-wrapper" class="clearfix">
	<div class="container">
        <div class="main-col">
            <img src="img/logo/kclogo.png" alt="" class="logo_img" />
            <div class="panel"> 
                <p class="heading_main">Student Registration</p>
                <form id="login-validate" action="registerPHP.php" method="post">
                		<label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required />
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required/>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required/>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"  required/>
                    
                    <div class="submit_sect">
                        <button type="submit" class="btn btn-beoro-3">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>