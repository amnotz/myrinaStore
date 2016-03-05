<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title></title>
<!-- **************************************bootstrap************************************** -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/jquery-1.12.0.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">

body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: center;
}

strong { font-weight: 500; }

a, a:hover, a:focus {
	color: #de995e;
	text-decoration: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

h1, h2 {
	margin-top: 10px;
	font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
	font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}

img { max-width: 100%; }

::-moz-selection { background: #de995e; color: #fff; text-shadow: none; }
::selection { background: #de995e; color: #fff; text-shadow: none; }


.btn-link-1 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 16px 20px 0 20px;
	background: #de995e;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-1:hover, .btn-link-1:focus, .btn-link-1:active { outline: 0; opacity: 0.6; color: #fff; }

.btn-link-1.btn-link-1-facebook { background: #4862a3; }
.btn-link-1.btn-link-1-twitter { background: #55acee; }
.btn-link-1.btn-link-1-google-plus { background: #dd4b39; }

.btn-link-1 i {
	padding-right: 5px;
	vertical-align: middle;
	font-size: 20px;
	line-height: 20px;
}

.btn-link-2 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 15px 20px 0 20px;
	background: rgba(0, 0, 0, 0.3);
	border: 1px solid #fff;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-2:hover, .btn-link-2:focus, 
.btn-link-2:active, .btn-link-2:active:focus { outline: 0; opacity: 0.6; background: rgba(0, 0, 0, 0.3); color: #fff; }


/***** Top content *****/

.inner-bg {
    padding: 100px 0 170px 0;
}

.top-content .text {
	color: #fff;
}

.top-content .text h1 { color: #fff; }

.top-content .description {
	margin: 20px 0 10px 0;
}

.top-content .description p { opacity: 0.8; }

.top-content .description a {
	color: #fff;
}
.top-content .description a:hover, 
.top-content .description a:focus { border-bottom: 1px dotted #fff; }

.form-box {
	margin-top: 35px;
}

.form-top {
	overflow: hidden;
	padding: 0 25px 15px 25px;
	background: #fff;
	-moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; border-radius: 4px 4px 0 0;
	text-align: left;
}

.form-top-left {
	float: left;
	width: 75%;
	padding-top: 25px;
}

.form-top-left h3 { margin-top: 0; }

.form-top-right {
	float: left;
	width: 25%;
	padding-top: 5px;
	font-size: 66px;
	color: #ddd;
	line-height: 100px;
	text-align: right;
}

.form-bottom {
	padding: 25px 25px 30px 25px;
	background: #eee;
	-moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
	text-align: left;
}

.form-bottom form textarea {
	height: 100px;
}

.form-bottom form button.btn {
	width: 100%;
}

.form-bottom form .input-error {
	border-color: #de995e;
}
	</style>
</head>
<body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Myrina Store</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="glyphicon glyphicon-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                              <?php echo validation_errors(); ?>

                              <?php echo form_open('verifylogin'); ?>
			                    
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
			                        <button id="submit" type="submit" class="btn btn-warning">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>        
    </body>
    <script src="<?php echo base_url();?>assets/js/pageScript/login.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.0.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</html>