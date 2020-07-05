<!DOCTYPE html>
<html>
<head>
	<title>WanderTribe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/error404.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/error404.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/error404.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div style="background-image: linear-gradient(to right, purple, #1A1780);">
		<div class="row header">
			<div class="col-xs-2 col-sm-2 col-md-4 logo">
				<img src="new_img/logo/logo1.png" alt="">
			</div>
			<div class="col-xs-7 col-sm-6 col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4 certify">
				<div class="row">
					<div class="col-xs-6 business" id = "buis_reg_btn">
						<a href="#myModalSignup" data-toggle="modal">
							<img src="new_img/business-reg.png" alt="">
						</a>
					</div>

					<div class="col-xs-6 login_button" style="padding-left: 0;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#myModalLogin">
							Login or Create Account
						</button>
					</div>  
				</div>
				<div class="inner-nav desktop-nav">
					<ul class="clearlist">
						<li>
							<div class="login-status top-login" id="acc_status"></div>
						</li>
					</ul>
				</div>  
			</div>

			<div class="modal M-log-in" id="myModalLogin">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body M-16 row">
							<div class="col-xs-6">
								<div class="leaf1">
									<img src="new_img/login/leaf1.png">
								</div>
								<div class="leaf-banda">
									<div class="leaf2">
										<img src="new_img/login/leaf2.png">
									</div>
									<div class="banda">
										<img src="new_img/login/banda.png">
									</div>
								</div>
								<div class="wander-text">
									<h3>WanderTribe</h3>
									<p>
										One Stop Destination for All Your Authentic Offbeat Travel & Experience.
									</p>
								</div>
							</div>
							<div class="col-xs-6">
								<div style="margin-left: 5%; margin-right: 10%;">
									<div class="login-with">
										<h2>Log in with</h2>
										<a href="https://api.wandertribe.in/socialMediaRedirect/google"><img src="new_img/login/google.png"></a>
										<p>OR</p>
										<a href="https://api.wandertribe.in/socialMediaRedirect/facebook"><img src="new_img/login/fb.png"></a>
										
									</div>
									<div>
										<form id="login_owner">
											<div class="form-group">
												<label >Registered Email/Mobile no.</label>
												<input type="text" name="mobile" class="form-control"
												placeholder="Enter Email/Mobile no.">
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="password" class="form-control"
												placeholder="Enter Password">
											</div>
											<input type="hidden" value="web" id="user_type_customer" name="device"/>
											<button type="submit">LOGIN</button>
										</form>
										<div style="margin-top: 10%;">
											<center><a href="#myModalReset" class="forgot" data-toggle="modal"
												data-dismiss="modal">Forgot Password?</a></center>
											</div>

											<p>New to WanderTribe? <a href="#myModalSignup" data-toggle="modal"
												data-dismiss="modal">
											Create account now.</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal Model-signUp" id="myModalSignup">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body scroll">
								<div class="container" style="width: 100%; padding: 0;">
									<div class="row" id="signupBody" style="margin: 0;">
										<div class="col-xs-6 fixed">
											<div class="leaf1">
												<img src="new_img/signup/leaf1.png">
											</div>
											<div class="leaf-banda ">
												<div class="leaf2">
													<img src="new_img/signup/leaf2.png">
												</div>
												<div class="banda">
													<img src="new_img/signup/banda.png">
												</div>
											</div>
											<div class="wander-text">
												<h3>WanderTribe</h3>
												<p>
													Aggregator for Alternate Travel Experience.
												</p>
											</div>

											<div class="leaf3">
												<img src="new_img/signup/leaf3.png">
											</div>
										</div>
										<div class="col-xs-6" id="signupInfo">
											<div>
												<div id="circleInfo1"></div>
												<hr id="lineInfo2">
												<div id="circleInfo3"></div>
												<hr id="lineInfo2">
												<div id="circleInfo3"></div>
												<hr id="lineInfo2">
												<div id="circleInfo3"></div>
											</div>

											<div style="margin-left: 10px;">
												
												<div class="signup-with">
													<h2>Signup with</h2>
													<a href="https://api.wandertribe.in/socialMediaRedirect/google"><img src="new_img/login/google.png"></a>
													<p>OR</p>
													<a href="https://api.wandertribe.in/socialMediaRedirect/facebook"><img src="new_img/login/fb.png"></a>
												</div>
												<div>
													<form method="post"
													action="https://api.wandertribe.in/api/check_mob_email"
													enctype="multipart/form-data" id="signupformid">
													<div class="form-group">
														<label for="name">Full Name</label>
														<input type="text" name="name" class="form-control"
														placeholder="Enter full name" id="reg_name" required>
													</div>
													<input type="checkbox" id="check-business" name="buisness_checkbox">
													<label class="control-label">BUSINESS NAME 
														<span>(only for business user)</span>
													</label>
													<div class="form-group">
														<input type="text" name="company" class="form-control"
														placeholder="Enter your company name" id = "reg_company_name" required>
													</div>
													<div class="form-group">
														<label for="mob">Enter Mobile no.</label>
														<input type="text" name="mobile" class="form-control"
														placeholder="Enter your mobile no." id = "reg_mobile" required>
														<span id="wrong_number" class="text-danger">please enter a valid number</span>
													</div>
													<div class="form-group">
														<label for="email">Email ID (optional)</label>
														<input type="email" name="email" class="form-control"
														placeholder="Enter your email-id" id = "reg_email" required>
														<span id="invalid_email" class="text-danger">Invalid email</span>
													</div>
													<input type="hidden" value="web" id="reg_device" name="device"/>
													<div class="form-group">
														<input type="submit" class="btn form-control reg_btn" id="signupButton" value="SIGNUP" 
														style="background-image: linear-gradient(to right, #ffdf31, #ff9900);">
													</div>

												</form>
												<div class="links">
													<p>Already have an account? <a href="#myModalLogin"
														data-toggle="modal" data-dismiss="modal">
													Log in.</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row" id="signupOTPBody">
									<div class="col-xs-6 fixed">
										<div class="leaf1">
											<img src="new_img/signup/leaf1.png">
										</div>
										<div class="leaf-que">
											<div class="leaf2">
												<img src="new_img/signup/leaf2.png">
											</div>
											<div class="que">
												<img src="new_img/signup/phone.png">
											</div>
										</div>
										<div class="leaf3">
											<img src="new_img/signup/leaf3.png">
										</div>
									</div>
									<div class="col-xs-6">
										<div id="signupOTPInfo">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo1"></div>
											<hr id="lineInfo2">
											<div id="circleInfo3"></div>
											<hr id="lineInfo2">
											<div id="circleInfo3"></div>
										</div>
										<div>
											<div class="reset-text">
												<h3>Verify Mobile Number</h3>
												<p>
													We will send an OTP to your registered mobile number or email.
												</p>
											</div>
											<div>
												<form id = "sendOtp">
													<div class="form-group">
														<label for="email-mob">Enter Registered Mobile no.</label>
														<input type="text" name="mobile" class="form-control"
														placeholder="Enter Email/Mobile no." id = "verify_number" readonly>
													</div>
													<button id="signupOTPButton" type="submit">GET OTP</button>
												</form>
												<div class="links">
													<p>Already have an account? <a href="#myModalLogin"
														data-toggle="modal" data-dismiss="modal">
													Log in.</a></p>
												</div>

											</div>
										</div>
									</div>
								</div>

								<div class="row" id="signupEnterOTPBody" >
									<div class="col-xs-6 fixed">
										<div class="leaf1">
											<img src="new_img/signup/leaf1.png">
										</div>
										<div class="leaf-que">
											<div class="leaf2">
												<img src="new_img/signup/leaf2.png">
											</div>
											<div class="que">
												<img src="new_img/signup/phone.png">
											</div>
										</div>
										<div class="leaf3">
											<img src="new_img/signup/leaf3.png">
										</div>
									</div>
									<div class="col-xs-6">
										<div id="signupEnterOTPInfo">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo1"></div>
											<hr id="lineInfo2">
											<div id="circleInfo3"></div>
										</div>
										<div style="margin-left: 10px;">
											<div class="reset-text">
												<h3>OTP verification</h3>
												<p>
													We have sent an OTP to your registered mobile number or email,
													please check.
												</p>
											</div>
											<div>
												<form id="verify_otp_form">
													<div class="form-group">
														<label for="otp">Enter OTP</label>
														<input type="text" name="otp" class="form-control" id="otp"
														placeholder="Enter OTP">
													</div>
													<button type="submit">Verify and Proceed</button>
												</form>
												<div class="links">
													<p>Already have an account? <a href="#myModalLogin"
														data-toggle="modal" data-dismiss="modal">
													Log in.</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row" id="signupSetPwdBody" >
									<div class="col-xs-6 fixed">
										<div class="leaf1">
											<img src="new_img/signup/leaf1.png">
										</div>
										<div class="leaf-que">
											<div class="leaf2">
												<img src="new_img/signup/leaf2.png">
											</div>
											<div class="que">
												<img src="new_img/signup/setPwd.png">
											</div>
										</div>
										<div class="leaf3">
											<img src="new_img/signup/leaf3.png">
										</div>
									</div>
									<div class="col-xs-6">
										<div id="signupSetPwdInfo">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo2"></div>
											<hr id="lineInfo1">
											<div id="circleInfo1"></div>
										</div>

										<div style="margin-left: 10px;">
											<div class="reset-text">
												<h3>Set Your Password</h3>
												<p>
												</p>
											</div>
											<div>
												<form id="registration_form">
													<div class="form-group">
														<label for="pwd">Enter new Password</label>
														<input type="password" name="password" class="form-control" id="password"
														placeholder="Enter new Password">
													</div>
													<div class="form-group">
														<label for="ConfirmPwd">Confirm Password</label>
														<input type="password" name="ConfirmPwd" class="form-control"
														placeholder="Re-enter new Password">
														<span id="match_pwd" class="text-danger">Password and confirm password does not match</span>
													</div>

													<button type="submit" id="signupSetPwdButton" >
														Submit
													</button>
												</form>
												<div class="links">
													<p>Already have an account? <a href="#myModalLogin"
														data-toggle="modal" data-dismiss="modal">
													Log in.</a></p>
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

	<img src="new_img/error404.png">

	<h2>LOOKS LIKE YOU GOT LOST IN WILDERNESS</h2>

	<button>RETURN TO CIVILIZATION</button>

</body>
</html>