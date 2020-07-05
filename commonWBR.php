<!-- common file for w/o business registeration button -->
<script>
$(document).ready(function() {
    $("#check-business").prop("checked", false);
    $("#wrong_number").hide();
    $("#invalid_email").hide();
    $("#match_pwd").hide();
    $('#signupBody').show();
    $('#signupOTPBody').hide();
    $('#signupEnterOTPBody').hide();
    $('#signupSetPwdBody').hide();

    $('#myModalSignup').removeClass('show').addClass('fade');

    $("#match_pwd").hide();
    $("input[name='ConfirmPwd']").keyup(function() {
        if ($(this).val() != $("#password").val()) {
            $("#match_pwd").show();
            $("#signupSetPwdButton").attr('disabled', 'disabled');
        } else {
            $("#match_pwd").hide();
            $("#signupSetPwdButton").removeAttr('disabled');;
        }
    });
    //social login.
    
    var auth_key = localStorage.getItem("auth_key");


    var dash = (localStorage.getItem("user_type") == 'VENDOR' || localStorage.getItem("user_type") == 'ADMIN') ?
        "dashboard" : "user";

    $(".login-status").each(function() {

        if (auth_key != undefined) {
            $('.header button').hide();
            $('#buis_reg_btn').hide();
            if (auth_key != undefined) {
                $('.header button').hide();
                $('#buis_reg_btn').hide();
                if (dash != "user") {
                    this.innerHTML = '<div class="dropdown"> ' +
                        // '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
                        '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
                        // '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</button>'+
                        '<div class="dropdown-menu">' +
                        '<li><a class ="dropdown-item" href="/' + dash +
                        '" class="top-wallet" >Dashboard</a></li>' +
                        '<li  onclick="fetch_data()"><a class="top-wallet">SRM</a></li>' +
                        '<li><a href="#" class="top-wallet" onclick="logout()">Logout</a></li>' +
                        '</div> </div> ';
                } else {
                    this.innerHTML = '<div class="dropdown"> ' +
                        '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
                        '<div class="dropdown-menu">' +
                        '<li><a href="#" class="top-wallet" onclick="logout()">Logout</a></li>' +
                        '</div> </div> ';
                }
                $(".top-login").off('click');
            } else {
                $('.header button').show();
            }
        } else {
            $('.header button').show();
        }
    });

    $("#login_owner").submit(function(e) {
        var cred = $("#login_owner").serialize();
        e.preventDefault();
        $('#myModalLogin').hide();
        $.ajax({

            type: 'POST',
            url: 'https://api.wandertribe.in/api/login',

            data: cred,
            dataType: 'json',

            beforeSend: function() {
                $('.loader-outer').show();
            },

            success: function(data, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200 || xhr.status == 207) {
                    //document.querySelector('#myModalLogin').style.width=0;

                    localStorage.setItem("auth_key", data.result.auth_key);
                    localStorage.setItem("user_type", data.result.user_type);
                    localStorage.setItem("user_name", data.result.name);
                    localStorage.setItem("mobile", data.result.mobile);
                    localStorage.setItem("user_gst_no", data.result.gst_no);
                    localStorage.setItem("user_email", data.result.email);
                    localStorage.setItem("device", 'web');
                    location.reload();
                } else if (xhr.status == 208) {
                    localStorage.setItem("auth_key", data.auth_key);
                    var auth_key = localStorage.getItem("auth_key");
                    var device = 'web';
                    if (confirm(
                            "User already logged in from another browser.Do you want to logout the existing id?"
                            )) {
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

                            success: function(data, textStatus, xhr) {
                                $('.loader-outer').hide();
                                if (xhr.status == 200) {
                                    alert("user successfully logged out");
                                    //login again
                                    $.ajax({ //login again.

                                        type: 'POST',
                                        url: 'https://api.wandertribe.in/api/login',

                                        data: cred,
                                        dataType: 'json',

                                        beforeSend: function() {
                                            $('.loader-outer')
                                            .show();
                                        },

                                        success: function(data,
                                            textStatus, xhr) {
                                            $('.loader-outer')
                                            .hide();
                                            if (xhr.status == 200 ||
                                                xhr.status == 207) {
                                                //document.querySelector('#myModalLogin').style.width=0;

                                                localStorage
                                                    .setItem(
                                                        "auth_key",
                                                        data.result
                                                        .auth_key);
                                                localStorage
                                                    .setItem(
                                                        "user_type",
                                                        data.result
                                                        .user_type);
                                                localStorage
                                                    .setItem(
                                                        "user_name",
                                                        data.result
                                                        .name);
                                                localStorage
                                                    .setItem(
                                                        "mobile",
                                                        data.result
                                                        .mobile);
                                                localStorage
                                                    .setItem(
                                                        "user_gst_no",
                                                        data.result
                                                        .gst_no);
                                                localStorage
                                                    .setItem(
                                                        "user_email",
                                                        data.result
                                                        .email);
                                                localStorage
                                                    .setItem(
                                                        "device",
                                                        'web');
                                                //top.location.href = 'index.php';
                                                location.reload();
                                            } else {
                                                alert(
                                                    "Wrong credentials are entered...")
                                            }
                                        },
                                        error: function(data) {
                                            console.log(
                                                'An error occurred.'
                                                );
                                        }
                                    });
                                }
                            },
                            error: function(data) {
                                console.log('An error occurred.');
                            }
                        })
                    }
                    if (xhr.status != 200 && xhr.status != 208) {
                        alert('invalid login details');
                    }
                } else {
                    alert("Wrong credentials are entered...")
                }
            },
            error: function(data) {
                console.log('An error occurred.');
            }
        });
    });

    var signup_form = $('#signupformid');

    signup_form.submit(function(e) {
        e.preventDefault();
        if ($("#check-business").prop("checked") == true) {
            localStorage.setItem("user_type", "VENDOR");
            localStorage.setItem("company_name", document.getElementById('reg_company_name').value);
        } else {
            localStorage.setItem("user_type", "CUSTOMER");
        }
        localStorage.setItem("mobile", document.getElementById('reg_mobile').value);
        localStorage.setItem("user_email", document.getElementById('reg_email').value);
        localStorage.setItem("user_name", document.getElementById('reg_name').value);
        $.ajax({
            type: signup_form.attr('method'),
            url: signup_form.attr('action'),
            data: signup_form.serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('.loader-outer').show();
            },
            success: function(data, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200) {
                    window.stop();
                    $("#signupBody").hide();
                    $("#signupOTPBody").show();
                    $('#verify_number').val(localStorage.getItem('mobile'));
                } else if (xhr.status == 201) {
                    alert('Mobile number already found');
                } else if (xhr.status == 202) {
                    alert('Email already found');
                }
            },

            error: function(data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    });

    $("#sendOtp").submit(function(e) {
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
            beforeSend: function() {
                $('.loader-outer').show();
            },
            success: function(data, textStatus, xhr) {
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
            error: function(data) {
                $('.loader-outer').hide();
                alert('An error occurred.');
                console.log(data);
            }
        });
    });

    $("#verify_otp_form").submit(function(e) {
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
            beforeSend: function() {
                $('.loader-outer').show();
            },
            success: function(data, textStatus, xhr) {
                $('.loader-outer').hide();
                console.log(data);
                if (xhr.status == 200) {
                    window.stop();
                    $("#signupEnterOTPBody").hide();
                    $("#signupSetPwdBody").show();
                } else if (xhr.status == 202) {
                    alert('Please entry the correct OTP !');
                    $('#signupBody').hide();
                    $("#signupOTPBody").hide();
                    $("#signupEnterOTPBody").show();
                }
            },
            error: function(data) {
                $('.loader-outer').hide();
                console.log('An error occurred.');
                console.log(data);
            }
        });

    });

    $("#registration_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'https://api.wandertribe.in/api/register',
            data: {
                'name': localStorage.getItem('user_name'),
                'mobile': localStorage.getItem('mobile'),
                'email': localStorage.getItem('user_email'),
                'password': document.getElementById('password').value,
                'device': 'web',
                'company_name': localStorage.getItem('company_name'),
                'user_type': localStorage.getItem("user_type")
            },
            dataType: 'json',
            beforeSend: function() {
                $('.loader-outer').show();
            },
            success: function(data, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200) {
                    $("#logsignpop").hide();
                    localStorage.setItem("auth_key", data.result.auth_key);
                    localStorage.setItem("user_type", data.result.user_type);
                    localStorage.setItem("mobile", data.result.mobile);
                    localStorage.setItem("user_email", data.result.email);
                    localStorage.setItem("user_name", data.result.name);
                    localStorage.setItem("device", 'web');
                    top.location.href = 'index.php';
                } else if (xhr.status == 201) {
                    alert('User Already Registered');
                    // $('#email_error_message').html('Email Already exists !').css('color', 'red')
                } else if (xhr.status == 202) {
                    alert('User Already Registered');
                    // $('#email_error_message').html('Email Already exists !').css('color', 'red')
                }
            },

            error: function(data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    });
    $("#reg_mobile").blur(function() {
        var Number = document.getElementById('reg_mobile').value;
        var IndNum = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;

        if (IndNum.test(Number)) {
            $("#wrong_number").hide();
            $("#signupButton").removeAttr('disabled');
        } else {
            $("#wrong_number").show();
            $("#signupButton").attr('disabled', 'disabled');
            // $('#errMessage').text('please enter valid mobile number');
            // document.getElementById('profile_telephoneNumber').focus();
        }
    });
    $("#reg_email").blur(function() {
        var email = document.getElementById('reg_email').value;
        var email_reg =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (email_reg.test(email)) {
            $("#invalid_email").hide();
            $("#signupButton").removeAttr('disabled');
        } else {
            $("#invalid_email").show();
            $("#signupButton").attr('disabled', 'disabled');
            // $('#errMessage').text('please enter valid mobile number');
            // document.getElementById('profile_telephoneNumber').focus();
        }
    });

    if ($("#check-business").prop("checked") != true) {
        $("#reg_company_name").attr('disabled', 'disabled');
    }
    var checkbox = document.querySelector("input[name=buisness_checkbox]");

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            $("#reg_company_name").removeAttr('disabled');
        } else {
            $("#reg_company_name").attr('disabled', 'disabled');
        }
    });
});

function reset() {
    $("#check-business").removeAttr('checked');
    $("#reg_company_name").attr('disabled', 'disabled');
};

function business_checked() {
    $("#check-business").attr('checked', true);
    $("#reg_company_name").removeAttr('disabled');
};

function home() {
    location.href = 'index.php';
}

function fetch_data() {
    $authorization = localStorage.getItem('auth_key');
    localStorage.setItem('Authorization', $authorization);
    $.ajax({
        type: 'GET',
        url: 'https://dev.unfoldingskies.com/api/check_auth',
        headers: {
            "Content-Type": "application/json",
            "Authorization": $authorization,
        },
        dataType: 'json',
        beforeSend: function() {
            $('.loader-outer').show();
        },
        success: function(data, textStatus, xhr) {
            $('.loader-outer').hide();
            if (xhr.status == 200) {
                console.log(data);
                localStorage.setItem("user", JSON.stringify(data));
                top.location.href = 'srm';
            } else if (xhr.status == 201) {
                alert('Not Registered on Supply Side');
                // $('#email_error_message').html('Email Already exists !').css('color', 'red')
            }
        },

        error: function(data) {
            console.log('An error occurred.');
            console.log(data);
        }
    });
};

function logout() {
    var auth_key = localStorage.getItem("auth_key");
    $.ajax({

        type: 'POST',
        url: 'https://api.wandertribe.in/api/logout',
        headers: {
            auth_key: auth_key,

        },
        data: {
            device: "web",
        },
        beforeSend: function() {
            $('.loader-outer').show();
        },

        success: function(data, textStatus, xhr) {
            $('.loader-outer').hide();
            if (xhr.status == 200) {
                localStorage.removeItem('auth_key');
                localStorage.removeItem('user_type');
                localStorage.removeItem('user_name');
                localStorage.removeItem('user_email');
                localStorage.removeItem('mobile');
                if (localStorage.getItem('current_file')) {
                    localStorage.removeItem('current_file');
                }
                location.reload();
            }
        },
        error: function(data) {
            console.log('An error occurred.');
        }
    });
};

function save_file_name() {
    localStorage.setItem('current_file', window.location);
}
</script>
<!--  loader -->
<div class="loader-outer">
    <div class="loader-icon">
        <div class="loader-inner">
            <img src='img/fullscreen-loader.gif'>
            <p>Processing. Please Wait...</p>
        </div>
    </div>
</div>
<!--  loader  -->

<div style="background-image: linear-gradient(to right, purple, #1A1780);">
    <div class="row header">
        <div class="col-xs-2 col-sm-2 col-md-2 logo">
            <img src="new_img/logo/logo1.png" alt="" onclick="home()" style="cursor: pointer;">
        </div>
        <div class="col-xs-8 col-sm-7 col-md-7 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 certify">
            <div class="row">
                <div class="col-xs-4 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Trips<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Stays</a></li>
                        <li class="divider"></li>
                        <li><a href="treksLanding.php">Treks</a></li>
                        <li class="divider"></li>
                        <li><a href="TripsLanding.php">Road Trips</a></li>
                        <li class="divider"></li>
                        <li><a href="ExperienceLanding.php">Experiences</a></li>
                        <li class="divider"></li>
                        <li><a href="TravelLanding.php">Event calendar</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-xs-offset-2 login-div" style="padding-left: 0;">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModalLogin">
                        Login or Create Account
                    </button>
                </div>
                <div class="col-xs-6 col-xs-offset-2 inner-nav desktop-nav" id="logged-in">
                    <ul class="clearlist">
                        <li>
                            <div class="login-status top-login" id="acc_status"></div>
                        </li>
                    </ul>
                </div>
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
                                <div class="login-with" onclick="save_file_name()">
                                    <h2>Log in with</h2>
                                    <a href="https://api.wandertribe.in/socialMediaRedirect/google"><img
                                            src="new_img/login/google.png"></a>
                                    <p>OR</p>
                                    <a href="https://api.wandertribe.in/socialMediaRedirect/facebook"><img
                                            src="new_img/login/fb.png"></a>

                                </div>
                                <div>
                                    <form id="login_owner">
                                        <div class="form-group">
                                            <label>Registered Email/Mobile no.</label>
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Enter Email/Mobile no.">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter Password">
                                        </div>
                                        <input type="hidden" value="web" id="user_type_customer" name="device" />
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
                    <div class="modal-body scroll d-block">
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
                                            <a href="https://api.wandertribe.in/socialMediaRedirect/google"><img
                                                    src="new_img/login/google.png"></a>
                                            <p>OR</p>
                                            <a href="https://api.wandertribe.in/socialMediaRedirect/facebook"><img
                                                    src="new_img/login/fb.png"></a>
                                        </div>
                                        <div>
                                            <form method="post" action="https://api.wandertribe.in/api/check_mob_email"
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
                                                        placeholder="Enter your company name" id="reg_company_name"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mob">Enter Mobile no.</label>
                                                    <input type="text" name="mobile" class="form-control"
                                                        placeholder="Enter your mobile no." id="reg_mobile" required>
                                                    <span id="wrong_number" class="text-danger">please enter a valid
                                                        number</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email ID (optional)</label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Enter your email-id" id="reg_email" required>
                                                    <span id="invalid_email" class="text-danger">Invalid email</span>
                                                </div>
                                                <input type="hidden" value="web" id="reg_device" name="device" />
                                                <div class="form-group">
                                                    <input type="submit" class="btn form-control reg_btn"
                                                        id="signupButton" value="SIGNUP"
                                                        style="background-image: linear-gradient(to right, #ffdf31, #ff9900);">
                                                </div>

                                            </form>
                                            <div class="links">
                                                <p>Already have an account? <a href="#myModalLogin" data-toggle="modal"
                                                        data-dismiss="modal">
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
                                            <form id="sendOtp">
                                                <div class="form-group">
                                                    <label for="email-mob">Enter Registered Mobile no.</label>
                                                    <input type="text" name="mobile" class="form-control"
                                                        placeholder="Enter Email/Mobile no." id="verify_number"
                                                        readonly>
                                                </div>
                                                <button id="signupOTPButton" type="submit">GET OTP</button>
                                            </form>
                                            <div class="links">
                                                <p>Already have an account? <a href="#myModalLogin" data-toggle="modal"
                                                        data-dismiss="modal">
                                                        Log in.</a></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="signupEnterOTPBody">
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
                                                <p>Already have an account? <a href="#myModalLogin" data-toggle="modal"
                                                        data-dismiss="modal">
                                                        Log in.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="signupSetPwdBody">
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
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" placeholder="Enter new Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ConfirmPwd">Confirm Password</label>
                                                    <input type="password" name="ConfirmPwd" class="form-control"
                                                        placeholder="Re-enter new Password">
                                                    <span id="match_pwd" class="text-danger">Password and confirm
                                                        password does not match</span>
                                                </div>

                                                <button type="submit" id="signupSetPwdButton">
                                                    Submit
                                                </button>
                                            </form>
                                            <div class="links">
                                                <p>Already have an account? <a href="#myModalLogin" data-toggle="modal"
                                                        data-dismiss="modal">
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

        <div class="modal" id="noPropertyModal">
            <div class="modal-dialog" style="">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="new_img/notreks.png"
                            style="height: 500px; width: 421px; display: block; margin: 50px auto;">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="myModalReset">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container" style="width: 100%; padding: 0;">
                            <div class="row" style="margin: 0;">
                                <div class="col-xs-6">
                                    <div class="leaf1">
                                        <img src="new_img/login/leaf1.png">
                                    </div>
                                    <div class="leaf-que">
                                        <div class="leaf2">
                                            <img src="new_img/login/leaf2.png">
                                        </div>
                                        <div class="que">
                                            <img src="new_img/reset/que.png">
                                        </div>
                                    </div>
                                    <div class="leaf3">
                                        <img src="new_img/login/leaf3.png">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div style="margin-left: 10px; margin-right: 92px;">
                                        <div class="reset-text">
                                            <h3>Reset Password</h3>
                                            <p>
                                                We will send an OTP to your registered mobile number or email.
                                            </p>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="otp">Enter Registered Email/Mobile no.</label>
                                                    <input type="text" name="otp" class="form-control"
                                                        placeholder="Enter Email/Mobile no.">
                                                </div>
                                                <button data-toggle="modal" data-target="#myModalReset1"
                                                    data-dismiss="modal">
                                                    GET OTP
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create
                                                    account now</a><a href="#"> |</a> <a href="#myModalLogin"
                                                    data-toggle="modal" data-dismiss="modal">Login</a>
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

        <div class="modal" id="myModalReset1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container" style="width: 100%; padding: 0;">
                            <div class="row" style="margin: 0;">
                                <div class="col-xs-6">
                                    <div class="leaf1">
                                        <img src="new_img/login/leaf1.png">
                                    </div>
                                    <div class="leaf-que">
                                        <div class="leaf2">
                                            <img src="new_img/login/leaf2.png">
                                        </div>
                                        <div class="que">
                                            <img src="new_img/reset/que.png">
                                        </div>
                                    </div>
                                    <div class="leaf3">
                                        <img src="new_img/login/leaf3.png">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div style="margin-left: 10px; margin-right: 92px;">
                                        <div class="reset-text">
                                            <h3>Reset Password</h3>
                                            <p>
                                                We have sent an OTP to your registered mobile number or email, please
                                                check.
                                            </p>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="otp">Enter OTP</label>
                                                    <input type="text" name="otp" class="form-control"
                                                        placeholder="Enter OTP">
                                                </div>
                                                <button data-toggle="modal" data-target="#myModalReset2"
                                                    data-dismiss="modal">
                                                    VERIFY OTP
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create
                                                    account now</a><a href="#"> |</a> <a href="#myModalLogin"
                                                    data-toggle="modal" data-dismiss="modal">Login</a>
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
        <div class="modal" id="myModalReset2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container" style="width: 100%; padding: 0;">
                            <div class="row" style="margin: 0;">
                                <div class="col-xs-6">
                                    <div class="leaf1">
                                        <img src="new_img/login/leaf1.png">
                                    </div>
                                    <div class="leaf-que">
                                        <div class="leaf2">
                                            <img src="new_img/login/leaf2.png">
                                        </div>
                                        <div class="que">
                                            <img src="new_img/reset/que.png">
                                        </div>
                                    </div>
                                    <div class="leaf3">
                                        <img src="new_img/login/leaf3.png">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div style="margin-left: 10px; margin-right: 92px;">
                                        <div class="reset-text">
                                            <h3>Reset Password</h3>
                                            <p>
                                                Enter your new password.
                                            </p>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="pwd">Enter new Password</label>
                                                    <input type="password" name="pwd" class="form-control"
                                                        placeholder="Enter new Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="re-pwd">Confirm Password</label>
                                                    <input type="password" name="re-pwd" class="form-control"
                                                        placeholder="Re-enter new Password">
                                                </div>

                                                <button type="submit">
                                                    RESET PASSWORD
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create
                                                    account now</a><a href="#"> |</a> <a href="#myModalLogin"
                                                    data-toggle="modal" data-dismiss="modal">Login</a>
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