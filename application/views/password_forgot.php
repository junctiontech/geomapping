<!--Password forget starts-->
<body class="login fade-in" data-page="password">
    <!-- BEGIN PASSWORD BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?=base_url();?>assets/img/account/login-questionmark-icon.png" alt="Questionmark icon" />
                    </div>
                    <div class="login-logo">
                        <a href="javascript:;">
                            <img class="img-responsive" src="<?=base_url();?>assets/img/account/login-logo.png" alt="Company Logo" />
                        </a>
                    </div>
                    <hr />
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form action="javascript:;" method="get">
                            <p>Enter your email address below and we'll send a special reset password link to your inbox.</p>
                            <input type="email" placeholder="Email" class="input-field" required/>
                            <button type="submit" class="btn btn-login btn-reset">Reset password</button>
                        </form>
                        <div class="login-links">
                            <a href="<?=base_url();?>home">Already have an account?  <strong>Sign In</strong></a>
                            <br>
                            <!-- <a href="<?=base_url();?>home/signup"> Don't have an account? <strong>Sign Up</strong></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PASSWORD BOX 