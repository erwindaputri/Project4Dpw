<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="vegetables">
<!-- description -->
<meta name="description" content="Login Form - Responsive Template">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/bootstrap.min.css">
<!-- Material Design Icons CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/materialdesignicons.css">
<!-- Bootstrap Checkbox CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/awesome-bootstrap-checkbox.css">
<!-- Rippler CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/rippler.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/style.css">
<!-- Responsive  CSS -->
<link rel="stylesheet" href="{{url('public')}}/login/css/responsive.css">
</head>
<body>

<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
			<div class="logo">
				<a href="#">
					<h1>Vegetables</h1>
				</a>
			</div>
            <div class="row">
                <div class="col-md-6 login-form mx-auto">
                    <!-- form card login -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form id="formLogin" method="POST" class="formLogin">
                                <div class="form-group">
                                    <input for="username" class="form-control" id="name" name="name" placeholder="Username" type="text" required="">
									<i class="fa fa-user"></i>
                                </div>
                                <div class="form-group">
                                    <input for="password" type="password" class="form-control" placeholder="Password" id="pwd" required="">
									<i class="fa fa-lock"></i>
                                </div>
								<div class="row mb-3">
									<div class="col-md-12">
										<div class="checkbox checkbox-primary">
											<input id="checkbox1" class="styled" type="checkbox">
											<label for="checkbox1">
												Remember me 
											</label>
										</div>
									</div>
									<div class="col-md-12 text-left">
										<a href="#">forgot password?</a>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-12 text-right"><button type="submit" class="btn btn-success hover-btn btn-wd " id="btnLogin"><span>Login</span></button></div>
								</div>
                            </form>
							<div class="naw-text mb-3">
								<h5>New to Cloud?</h5>
							</div>
							<div class="row mb-3">
								<div class="col-lg-6">
									<a href="#" class="btn btn-primary btn-wd fb btn-block">
										<span><i class="fa fa-facebook"></i> &nbsp;&nbsp;&nbsp;Login Facebook</span>
									</a>
								</div>
								<div class="col-lg-6">
									<a href="#" class="btn btn-info btn-wd gp btn-block">
										<span><i class="fa fa-google-plus"></i> &nbsp;&nbsp;&nbsp;Login Google</span>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="create-box text-block text-center my-0">
										<span class="text-small font-weight-semibold">Not a member ?</span>
										<a href="#" class="text-black text-small">Create new account</a>
									</div>
								</div>
							</div>
                        </div>
                        <!--/card-block-->
						<div class="card-footer">
							<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://vegetables/">vegetables</a></div>
						</div>
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<!-- jquery latest version -->
<script src="{{url('public')}}/login/js/jquery.min.js"></script>
<!-- popper.min.js -->
<script src="{{url('public')}}/login/js/popper.min.js"></script>    
<!-- bootstrap js -->
<script src="{{url('public')}}/login/js/bootstrap.min.js"></script>
<!-- Jquery Rippler js -->
<script src="{{url('public')}}/login/js/jquery.rippler.min.js"></script>	
<!-- script js -->
<script src="{{url('public')}}/login/js/script.js"></script>
</body>
</html>