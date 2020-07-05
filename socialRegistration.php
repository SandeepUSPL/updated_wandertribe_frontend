<!DOCTYPE html>
<html lang="en">
<head>
	<title>WanderTribe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/socialRegistration.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/socialRegistration">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/socialRegistration">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
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
            //$("#invalid_email").hide();
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

	    	// $(".login-status").each(function () {

	     //        if (auth_key != undefined) {
	     //        	 $('.header button').hide();
	     //        	 $('#buis_reg_btn').hide();
	     //            this.innerHTML = '<div class="dropdown"> ' +
	     //                // '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
	     //                 '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
	     //                 // '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</button>'+
					 //    '<div class="dropdown-menu">'+
					 //      '<a class ="dropdown-item" href="/' + dash + '" class="top-wallet" >Dashboard</a>'+
					 //      '<a href="#" class="top-wallet" onclick="logout()">Logout</a>'+
					 //    '</div> </div> ';
	     //                // '<div class="dropdown-content" id="myDropdown">' +
	     //                // '<a href="/' + dash + '" class="top-wallet" >Dashboard</a> ' +
	     //                // ' <a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
	     //                // '</div>  </div>';
	     //            $(".top-login").off('click');
	     //        } else {
	     //             $('.header button').show();
	     //        }
	     //    });
    	   
      //       $("#login_owner").submit(function (e) {

      //           e.preventDefault();

      //           $.ajax({

      //               type: 'POST',
      //               url: 'https://api.wandertribe.in/api/login',

      //               data: $("#login_owner").serialize(),
      //               dataType: 'json',

      //               beforeSend: function () {
      //                   $('.loader-outer').show();
      //               },

      //               success: function (data, textStatus, xhr) {
      //                   $('.loader-outer').hide();
      //                   if (xhr.status == 200) {
      //                       //document.querySelector('#myModalLogin').style.width=0;

      //                       localStorage.setItem("auth_key", data.result.auth_key);
      //                       localStorage.setItem("user_type", data.result.user_type);
      //                       localStorage.setItem("user_name", data.result.name);
      //                       localStorage.setItem("mobile", data.result.mobile);
      //                       localStorage.setItem("user_gst_no", data.result.gst_no);
      //                       localStorage.setItem("user_email", data.result.email);
      //                       if (data.result.user_type == 'VENDOR' || data.result.user_type == 'ADMIN') {
      //                           top.location.href = 'dashboard/index.php';
      //                       } else{
                            	
      //                           location.reload();
                                
      //                       }
      //                       console.log(data);
      //                   }
      //                   else if (xhr.status == 208) {
      //                       localStorage.setItem("auth_key", data.auth_key);
      //                       var auth_key = localStorage.getItem("auth_key");
      //                       var device = 'web';
      //                       if (confirm("User already logged in from another browser.Do you want to logout the existing id?")) {
      //                           $.ajax({
      //                               type: 'POST',
      //                               url: 'https://api.wandertribe.in/api/logout',
      //                               headers: {
      //                                   auth_key: auth_key,
      //                               },
      //                               data: {
      //                                   device: device,
      //                               },
      //                               beforeSend: function() {
      //                                   $('.loader-outer').show();
      //                               },

      //                               success: function (data, textStatus, xhr) {
      //                                   $('.loader-outer').hide();
      //                                   if (xhr.status == 200) {
      //                                       // 
      //                                       location.reload();
      //                                       alert("user successfully logged out");
      //                                   }
      //                               },
      //                               error: function (data) {
      //                                   console.log('An error occurred.');
      //                               }
      //                           })
      //                       }
      //                       if (xhr.status != 200 && xhr.status != 208) {
      //                           alert('invalid login details');
      //                       }
      //                   }
      //                   else {
      //                   	alert("Wrong credentials are entered...")
      //                   }
      //               },
      //               error: function (data) {
      //                   console.log('An error occurred.');
      //               }
      //           });
      //       });

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
                //localStorage.setItem("user_email",document.getElementById('reg_email').value );
                //localStorage.setItem("user_name",document.getElementById('reg_name').value );
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
		                } 
		                // else if (xhr.status == 202) {
		                //     alert('Email already found');
		                //     // $('#email_error_message').html('Email Already exists !').css('color', 'red')
		                // }
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
            // $("#reg_email").blur(function () {
            //     var email = document.getElementById('reg_email').value;
            //     var email_reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            //     if(email_reg.test(email)){
            //         $("#invalid_email").hide();
            //         $("#signupButton").removeAttr('disabled');
            //     }
            //     else{
            //         $("#invalid_email").show();
            //         $("#signupButton").attr('disabled','disabled');
            //         // $('#errMessage').text('please enter valid mobile number');
            //         // document.getElementById('profile_telephoneNumber').focus();
            //     }
            // });

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
	<img class="hero-image" src="new_img/socialRegistration.png">
	<div id="signupBody">
		<h4>ENTER MOBILE NUMBER</h4>
		<form method="post"
		action="https://api.wandertribe.in/api/check_mob_email"
		enctype="multipart/form-data" id="signupformid">
		<div class="form-group">
			<input type="text" name="mobile" class="form-control"
			placeholder="Enter your mobile no." id = "reg_mobile" required>
			<span id="wrong_number" class="text-danger">please enter a valid number</span>
		</div>
		<input type="checkbox" id="check-business" name="buisness_checkbox">
		<label class="control-label">BUSINESS NAME 
			<span>(only for business user)</span>
		</label>
		<div class="form-group">
			<input type="text" name="company" class="form-control"
			placeholder="Enter your company name" id = "reg_company_name" required>
		</div>
		<input type="hidden" value="web" id="reg_device" name="device"/>
		<div class="form-group">
			<input type="submit" class="btn form-control reg_btn" id="signupButton" value="SIGNUP"
			data-target="#myModalSignup" data-toggle="modal">
			<!-- <a href="#myModalSignup" data-toggle="modal">
				Log in.
			</a> -->
		</div>
	</form>
</div>
<div class="modal Model-signUp" id="myModalSignup">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body scroll">
				<div class="container" style="width: 100%; padding: 0;">
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
</body>