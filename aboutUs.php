<!DOCTYPE html>
<html lang="en">
<head>
	<title>WanderTribe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/aboutUs.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/aboutUs600up.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/aboutUs600down.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
        $(document).ready(function () {
            $("#check-business").prop("checked",false);
            $("#wrong_number").hide();
            $("#invalid_email").hide();
            $("#match_pwd").hide();
            $('#signupBody').show();
            $('#signupOTPBody').hide();
            $('#signupEnterOTPBody').hide();
            $('#signupSetPwdBody').hide();

            $('#myModalSignup').removeClass('show').addClass('fade');

            $("#match_pwd").hide();
            $("input[name='ConfirmPwd']").keyup(function(){
               if ($(this).val() != $("#password").val()){
                   $("#match_pwd").show();
                   $("#signupSetPwdButton").attr('disabled','disabled');;
               }
               else{
                  $("#match_pwd").hide();
                  $("#signupSetPwdButton").removeAttr('disabled');;
              }
          });
            var auth_key = localStorage.getItem("auth_key");

            var dash = (localStorage.getItem("user_type") == 'VENDOR' || localStorage.getItem("user_type") == 'ADMIN') ? "dashboard" : "user";

            $(".login-status").each(function () {

             if (auth_key != undefined) {
               $('.header button').hide();
               $('#buis_reg_btn').hide();
               this.innerHTML = '<div class="dropdown"> ' +
	                    // '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
                      '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
	                     // '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</button>'+
                         '<div class="dropdown-menu">'+
                         '<a class ="dropdown-item" href="/' + dash + '" class="top-wallet" >Dashboard</a>'+
                         '<a href="#" class="top-wallet" onclick="logout()">Logout</a>'+
                         '</div> </div> ';
	                    // '<div class="dropdown-content" id="myDropdown">' +
	                    // '<a href="/' + dash + '" class="top-wallet" >Dashboard</a> ' +
	                    // ' <a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
	                    // '</div>  </div>';
                     $(".top-login").off('click');
                 } else {
                  $('.header button').show();
              }
          });

            $("#login_owner").submit(function (e) {

                e.preventDefault();

                $.ajax({

                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/login',

                    data: $("#login_owner").serialize(),
                    dataType: 'json',

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            //document.querySelector('#myModalLogin').style.width=0;

                            localStorage.setItem("auth_key", data.result.auth_key);
                            localStorage.setItem("user_type", data.result.user_type);
                            localStorage.setItem("user_name", data.result.name);
                            localStorage.setItem("mobile", data.result.mobile);
                            localStorage.setItem("user_gst_no", data.result.gst_no);
                            localStorage.setItem("user_email", data.result.email);
                            if (data.result.user_type == 'VENDOR' || data.result.user_type == 'ADMIN') {
                                top.location.href = 'dashboard/index.php';
                            } else{
                            	
                                location.reload();
                                
                            }
                            console.log(data);
                        }
                        else if (xhr.status == 208) {
                            localStorage.setItem("auth_key", data.auth_key);
                            var auth_key = localStorage.getItem("auth_key");
                            var device = 'web';
                            if (confirm("User already logged in from another browser.Do you want to logout the existing id?")) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'https://api.wandertribe.in/api/logout',
                                    headers: {
                                        auth_key: auth_key,
                                    },
                                    data: {
                                        device: device,
                                    },
                                    beforeSend: function() {
                                        $('.loader-outer').show();
                                    },

                                    success: function (data, textStatus, xhr) {
                                        $('.loader-outer').hide();
                                        if (xhr.status == 200) {
                                            // 
                                            location.reload();
                                            alert("user successfully logged out");
                                        }
                                    },
                                    error: function (data) {
                                        console.log('An error occurred.');
                                    }
                                })
                            }
                            if (xhr.status != 200 && xhr.status != 208) {
                                alert('invalid login details');
                            }
                        }
                        else {
                        	alert("Wrong credentials are entered...")
                        }
                    },
                    error: function (data) {
                        console.log('An error occurred.');
                    }
                });
            });

            var signup_form = $('#signupformid');

            signup_form.submit(function (e) {
                e.preventDefault();
                if($("#check-business").prop("checked") == true){
                    localStorage.setItem("user_type", "VENDOR");
                    localStorage.setItem("company_name",document.getElementById('reg_company_name').value);
                }
                else{
                    localStorage.setItem("user_type", "CUSTOMER");
                }
                localStorage.setItem("mobile",document.getElementById('reg_mobile').value);
                localStorage.setItem("user_email",document.getElementById('reg_email').value );
                localStorage.setItem("user_name",document.getElementById('reg_name').value );
                $.ajax({
                  type: signup_form.attr('method'),
                  url: signup_form.attr('action'),
                  data: signup_form.serialize(),
                  dataType: 'json',
                  beforeSend: function () {
                      $('.loader-outer').show();
                  },
                  success: function (data, textStatus, xhr) {
                      $('.loader-outer').hide();
                      if (xhr.status == 200) {
                        window.stop();
                        $("#signupBody").hide();
                        $("#signupOTPBody").show();
                        $('#verify_number').val(localStorage.getItem('mobile'));
                    } else if (xhr.status == 201) {
                      alert('Mobile number already found');
		                    // $('#email_error_message').html('Email Already exists !').css('color', 'red')
		                } else if (xhr.status == 202) {
                          alert('Email already found');
		                    // $('#email_error_message').html('Email Already exists !').css('color', 'red')
		                }
		            },

		            error: function (data) {
                      console.log('An error occurred.');
                      console.log(data);
                  }
              });
            });

            $("#sendOtp").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/sendOtp',
                    data: {
                        'mobile': localStorage.getItem('mobile'),
                        'type': 'otp',
                        'title': sessionStorage.getItem('mobile_verification_type')
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('.loader-outer').show();
                    },
                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            window.stop();
                            $('#signupBody').hide();
                            $("#signupOTPBody").hide();
                            $("#signupEnterOTPBody").show();
                        } else if (xhr.status == 201) {
                            alert('No user found with this mobile number');
                        }

                    },
                    error: function (data) {
                        $('.loader-outer').hide();
                        alert('An error occurred.');
                        console.log(data);
                    }
                });
            });

            $("#verify_otp_form").submit(function (e) {
                e.preventDefault();
                var verification_type = sessionStorage.getItem('mobile_verification_type');
                $.ajax({
                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/verifyOtp',
                    data: {
                        'mobile': localStorage.getItem('mobile'),
                        'otp': document.getElementById('otp').value,
                        'title': "verification_type",
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('.loader-outer').show();
                    },
                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        console.log(data);
                        if (xhr.status == 200) {
                            window.stop();
                            $("#signupEnterOTPBody").hide();
                            $("#signupSetPwdBody").show();
                        }
                        else if (xhr.status == 202){
                            alert('Please entry the correct OTP !');
                            $('#signupBody').hide();
                            $("#signupOTPBody").hide();
                            $("#signupEnterOTPBody").show();
                        }
                    },
                    error: function (data) {
                        $('.loader-outer').hide();
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });

            });

            $("#registration_form").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/register',
                    data: {
                        'name': localStorage.getItem('user_name'),
                        'mobile': localStorage.getItem('mobile'),
                        'email':localStorage.getItem('user_email'),
                        'password':document.getElementById('password').value,
                        'device':'web',
                        'company_name':localStorage.getItem('company_name'),
                        'user_type':localStorage.getItem("user_type")
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('.loader-outer').show();
                    },
                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            $("#logsignpop").hide();
                            localStorage.setItem("auth_key", data.result.auth_key);
                            localStorage.setItem("user_type", data.result.user_type);
                            localStorage.setItem("mobile", data.result.mobile);
                            localStorage.setItem("user_email", data.result.email);
                            localStorage.setItem("user_name", data.result.name);
                            if (data.result.user_type === 'VENDOR') {
                                top.location.href = 'dashboard/index.php';
                            } else {
                                top.location.href = 'index.php';
                            }
                        } else if (xhr.status == 201) {
                            alert('User Already Registered');
                            // $('#email_error_message').html('Email Already exists !').css('color', 'red')
                        } else if (xhr.status == 202) {
                            alert('User Already Registered');
                            // $('#email_error_message').html('Email Already exists !').css('color', 'red')
                        }
                    },

                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
            });
            $("#reg_mobile").blur(function () {
                var Number = document.getElementById('reg_mobile').value;
                var IndNum = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;

                if(IndNum.test(Number)){
                    $("#wrong_number").hide();
                    $("#signupButton").removeAttr('disabled');
                }
                else{
                    $("#wrong_number").show();
                    $("#signupButton").attr('disabled','disabled');
                    // $('#errMessage').text('please enter valid mobile number');
                    // document.getElementById('profile_telephoneNumber').focus();
                }
            });
            $("#reg_email").blur(function () {
                var email = document.getElementById('reg_email').value;
                var email_reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                if(email_reg.test(email)){
                    $("#invalid_email").hide();
                    $("#signupButton").removeAttr('disabled');
                }
                else{
                    $("#invalid_email").show();
                    $("#signupButton").attr('disabled','disabled');
                    // $('#errMessage').text('please enter valid mobile number');
                    // document.getElementById('profile_telephoneNumber').focus();
                }
            });

            if($("#check-business").prop("checked") != true) {
             $("#reg_company_name").attr('disabled','disabled');
         }
         var checkbox = document.querySelector("input[name=buisness_checkbox]");

         checkbox.addEventListener( 'change', function() {
            if(this.checked) {
                $("#reg_company_name").removeAttr('disabled');
            } else {
                $("#reg_company_name").attr('disabled','disabled');
            }
        });

         var buisness_modal = document.querySelector("#buis_reg_btn");

         buisness_modal.addEventListener('onclick',function () {
            $("#check-business").attr('checked',true);
            $("#reg_company_name").removeAttr('disabled');
        })
     });

$(function () {
    var dateFormat = "mm/dd/yy",
    from = $("#from_date")
    .datepicker({
        minDate: 0,
        numberOfMonths: 1,
        showAnim: "blind"
    })
    .on("change", function () {
        to.datepicker("option", "minDate", getDate(this));
    }),
    to = $("#to_date").datepicker({
        numberOfMonths: 1,
        showAnim: "blind"
    })
    .on("change", function () {
                        // from.datepicker("option", "maxDate", getDate(this));
                    });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }
});

</script>
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

	<div id="aboutUs">
		<h1>ABOUT US</h1>
		<p>An online platform allowing users to experience properties and life in offbeat locations across India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and other Travel related Suppliers to transform their business and opening new revenue streams for them.</p>

		<div class="aboutMobile">
			<img src="new_img/icons/blackPhone.png">
			<h2>+91 7610054225</h2>
		</div>
		<div class="aboutMail">
			<img src="new_img/icons/blackEmail.png">
			<h4>info.unfoldingskies.com</h4>
		</div>
		<div class="aboutLocation">
			<img src="new_img/icons/blackLocation.png">
			<h3>99,National Park,Lajpat Nagar,New Delhi-110024</h3>
		</div>
	</div>


	<div class="container contact-us">
		<div class="message">
			<h3>World is moving very fast.
				<span>Send us your email, we will make sure you never miss a thing.</span>
			</h3>
		</div>

		<div class="row">
			<div class="col-xs-1">
				<img src="new_img/icons/email.png" alt="">
			</div>
			<div class="col-xs-11">
				<form>
					<div class="row">
						<div class="col-sm-5 col-md-7 form-group" style="margin: 0;">
							<input type="text" placeholder="enter your email address"></input>
						</div>
						<div class="col-sm-7 col-md-5 form-group">
							<button class="btn btn-danger" type="reset">
								DELETE
							</button>
							<button class="btn btn-default" type="submit">SEND</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="social">
			<h3>Follow us on</h3>
			<center>
				<ul class="list-inline">
					<li><a href="https://www.facebook.com/wandertribe.in"><img src="new_img/icons/facebook.png" alt="" style="width: 15px; height: 30px;"></a></li>
					<li><a href="https://www.instagram.com/wandertribe.in/"><img src="new_img/icons/instagram.png" alt="" style="width: 27px; height: 25px;"></a></li>
					<li><a href="#"><img src="new_img/icons/youtube.png" alt="" style="width: 30px; height: 20px;"></a></li>
				</ul>
				<p>#wandertribe</p>
			</center>

		</div>
	</div>
</div>

<footer class="footer">
	<div class="row">
		<div class="col-xs-4 footer1">
			<div class="row">
				<div class="col-sm-3 col-md-2" style="padding-right: 0;">
					<img src="new_img/logo/logo3.png" alt="">
				</div>
				<div class="col-sm-9 col-md-10" style="height: 37.3px; padding-left: 0;">
					<a href="#">
						<h3>WanderTribe</h3>
					</a>
				</div>
			</div>
			<div>
				<p>An online platform allowing users to experience properties and life in offbeat locations across
					India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and
					other Travel related Suppliers to transform their business and opening new revenue streams for
				them.</p>
			</div>

			<div class="row copyright">
				<div class="col-sm-2">
					<img src="new_img/icons/copyright.png">
				</div>
				<div class="col-sm-10">
					<div class="row">
						<h6>Copyright.2019 Unfolding Skies Private Limited.</h6>
						<h6>All Rights Reserved</h6>
					</div>
				</div>
			</div>
		</div>
	<div class="col-xs-3 footer2">
		<a href="terms.php?terms=terms">
			<h3>TERMS & CONDITIONS</h3>
		</a>
		<a href="terms.php?terms=guest">
			<h4>GUEST POLICIES</h4>
		</a>
		<a href="terms.php?terms=privacy">
			<h4>PRIVACY POLICIES</h4>
		</a>
		<a href="terms.php?terms=cancellation">
			<h4>CANCELLATION POLICIES</h4>
		</a>
	</div>

	<div class="col-xs-3 footer3">
		<a href="#">
			<h3>TAGS</h3>
		</a>
		<a href="whyUs.php">
			<h4>WHY US</h4>
		</a>
		<a href="#">
			<h4>ABOUT US</h4>
		</a>
		<a href="pageContact.php">
			<h4>CONTACT US</h4>
		</a>
		<a href="goGreen.php">
			<h4>GO GREEN</h4>
		</a>
		<a href="destinationManagement.php">
			<h4>DESTINATION MANAGEMENT</h4>
		</a>
	</div>

	<div class="col-xs-2 footer4">
		<a href="#">
			<h3>LOGINS</h3>
		</a>
		<a href="#">
			<h4>BUSINESS LOGIN</h4>
		</a>
		<a href="#">
			<h4>LIST YOUR PROPERTY</h4>
		</a>
		<a href="cancelBooking.php">
			<h4>CANCEL BOOKING</h4>
		</a>
	</div>
</div>
</footer>
</body>
