<!DOCTYPE html>
<html>
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-149144948-1');
	</script>
	<link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
	<meta charset="utf-8">
	<meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WanderTrake</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/trekDetail.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/trekDetail600up.css">
<!--	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600down.css">-->

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="jquery.datetimepicker.min.css">
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.datetimepicker.full.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">

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
            var e_id = '<?php echo !is_null($_GET['user_email']) ? $_GET['user_email'] : 'NULL'?>';
            //social login.
            if(e_id != 'NULL'){
                $.ajax({

                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/social_login',

                    data:{
                        'email': e_id,
                        'device':'web'
                    },
                    dataType: 'json',

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) { //1st time login
                            localStorage.setItem("auth_key", data.result.auth_key);
                            localStorage.setItem("user_type", data.result.user_type);
                            localStorage.setItem("user_name", data.result.name);
                            localStorage.setItem("mobile", data.result.mobile);
                            localStorage.setItem("user_gst_no", data.result.gst_no);
                            localStorage.setItem("user_email", data.result.email);
                            localStorage.setItem("device", 'web');
                            top.location.href = 'index.php';;
                        }
                        else if (xhr.status == 208) { //already logged in.
                            localStorage.setItem("auth_key", data.auth_key);
                            var auth_key = localStorage.getItem("auth_key");
                            var device = 'web';
                            if (confirm("User already logged in from another browser.Do you want to logout the existing id?")) {
                                //logout the previous session.
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
                                            alert("user successfully logged out");
                                            $.ajax({ //login again.

                                                type: 'POST',
                                                url: 'https://api.wandertribe.in/api/social_login',

                                                data:{
                                                    'email': e_id,
                                                    'device':'web'
                                                },
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
                                                        localStorage.setItem("device", 'web');
                                                        top.location.href = 'index.php';
                                                    }
                                                    else {
                                                        alert("Wrong credentials are entered...")
                                                    }
                                                },
                                                error: function (data) {
                                                    console.log('An error occurred.');
                                                }
                                            });
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
            }
            var auth_key = localStorage.getItem("auth_key");

            var dash = (localStorage.getItem("user_type") == 'VENDOR' || localStorage.getItem("user_type") == 'ADMIN') ? "dashboard" : "user";

            $(".login-status").each(function () {

                if (auth_key != undefined) {
                    $('.header button').hide();
                    //$('#buis_reg_btn').hide();
                    if (auth_key != undefined) {
                        $('.header button').hide();
                        //$('#buis_reg_btn').hide();
                        if(dash != "user"){
                            this.innerHTML = '<div class=" dropdown"> ' +
                                // '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
                                '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
                                // '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</button>'+
                                '<div class="dropdown-menu">'+
                                '<li><a class ="dropdown-item" href="/' + dash + '" class="top-wallet"  >Dashboard</a></li>'+
                                '<li onclick="fetch_data()"><a  class="top-wallet" >SRM</a></li>'+
                                '<li><a href="#" class="top-wallet" onclick="logout()">Logout</a></li>'+
                                '</div> </div> ';
                            // '<div class="dropdown-content" id="myDropdown">' +
                            // '<a href="/' + dash + '" class="top-wallet" >Dashboard</a> ' +
                            // ' <a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
                            // '</div>  </div>';
                        }
                        else{
                            this.innerHTML = '<div class="dropdown"> ' +
                                '<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</a>' +
                                // '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">My Account</button>'+
                                '<div class="dropdown-menu">'+
                                // '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
                                '<li><a href="#" class="top-wallet" onclick="logout()">Logout</a></li>'+
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

            $("#login_owner").submit(function (e) {
                var cred = $("#login_owner").serialize();
                e.preventDefault();
                $('#myModalLogin').hide();
                $.ajax({

                    type: 'POST',
                    url: 'https://api.wandertribe.in/api/login',

                    data: cred,
                    dataType: 'json',

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (data, textStatus, xhr) {
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
                                        if (xhr.status == 200){
                                            alert("user successfully logged out");
                                            //login again
                                            $.ajax({ //login again.

                                                type: 'POST',
                                                url: 'https://api.wandertribe.in/api/login',

                                                data: cred,
                                                dataType: 'json',

                                                beforeSend: function () {
                                                    $('.loader-outer').show();
                                                },

                                                success: function (data, textStatus, xhr) {
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
                                                    }
                                                    else {
                                                        alert("Wrong credentials are entered...")
                                                    }
                                                },
                                                error: function (data) {
                                                    console.log('An error occurred.');
                                                }
                                            });
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

            /*var buisness_modal = document.querySelector("#buis_reg_btn");

            buisness_modal.addEventListener('onclick',function () {
                $("#check-business").attr('checked',true);
                $("#reg_company_name").removeAttr('disabled');
            })*/
        });
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
                beforeSend: function () {
                    $('.loader-outer').show();
                },

                success: function (data, textStatus, xhr) {
                    $('.loader-outer').hide();
                    if (xhr.status == 200) {
                        localStorage.removeItem('auth_key');
                        localStorage.removeItem('user_type');
                        localStorage.removeItem('user_name');
                        localStorage.removeItem('user_email');
                        localStorage.removeItem('mobile');
                        top.location.href = '../index.php';
                    }
                },
                error: function (data) {
                    console.log('An error occurred.');
                }
            });
        };
        function search(){
            var location = document.getElementById('pac-input').value;
            var startDate = document.getElementById('date').value;
            var difficultyLevel = document.getElementById('difficulty-level').value;
            top.location.href = 'searchTreks.php?location=' + (document.getElementById('pac-input').value)
                +
                '&startDate=' +document.getElementById('date').value
                +
                '&difficultyLevel=' +document.getElementById('difficulty-level').value ;
        }
        function show(){
            $('.guide-popup').toggleClass('guide-popup-show');
        }
        function fetch_data() {
            localStorage.setItem('Authorization',"$2y$10$c1aPWd41DDEDVnsl9E58aeaL.hMHOThloXLsEXwrpbctkOU/hrMem");
            $.ajax({
                type: 'GET',
                url: 'https://dev.unfoldingskies.com/api/check_auth',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "$2y$10$c1aPWd41DDEDVnsl9E58aeaL.hMHOThloXLsEXwrpbctkOU/hrMem"
                },
                dataType: 'json',
                beforeSend: function () {
                    $('.loader-outer').show();
                },
                success: function (data, textStatus, xhr) {
                    $('.loader-outer').hide();
                    if (xhr.status == 200) {
                        console.log(data);
                        localStorage.setItem("user", JSON.stringify(data));
                        top.location.href = 'srm';
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
        }
    </script>

</head>
<body>
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

<div id="headerNew" style="background: #024959 0% 0% no-repeat padding-box;">
    <div class="row headerNew">
        <div class="col-xs-5 col-sm-2 logo">
            <img src="new_img/logo/logo1.png" alt="">
        </div>
        <div class="col-xs-3 col-sm-2" style="margin-top: 22px;">
            <a href="#">Trek overview</a>
        </div>
        <div class="col-xs-3 col-sm-2" style="margin-top: 22px;">
            <a href="#">Itinerary</a>
        </div>
        <div class="col-xs-3 col-sm-3 col-sm-offset-1" style="margin-top: 20px;">
            <h3>₹ 8,500 <span style="font-size: 20px; font-weight: 500;">Per adult</span></h3>
        </div>
        <div class="col-xs-3 col-sm-2" style="margin-top: 15px;">
            <button>Book Now</button>
        </div>
    </div>
</div>

<div id="header" style="background-image: linear-gradient(to right, purple, #1A1780);">
    <div class="row header">
        <div class="col-xs-2 col-sm-2 col-md-2 logo">
            <img src="new_img/logo/logo1.png" alt="">
        </div>
        <div class="col-xs-8 col-sm-6 col-md-7 col-xs-offset-2 col-sm-offset-4 col-md-offset-3 certify">
            <div class="row">
                <div class="col-xs-4 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Treks<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Stays</a></li>
                        <li class="divider"></li>
                        <li><a href="treksLanding.php">Treks</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Road Trips</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Experiences</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Event calendar</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-xs-offset-2 login_button" onclick="reset()">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModalLogin">
                        Login or Create Account
                    </button>
                </div>
                <div class="col-xs-6 col-xs-offset-2 inner-nav desktop-nav">
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
                                                    <input type="text" name="otp" class="form-control"placeholder="Enter Email/Mobile no.">
                                                </div>
                                                <button data-toggle="modal" data-target="#myModalReset1" data-dismiss="modal">
                                                    GET OTP
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create account now</a><a href="#"> |</a> <a href="#myModalLogin"  data-toggle="modal" data-dismiss="modal">Login</a>
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
                                                We have sent an OTP to your registered mobile number or email, please check.
                                            </p>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="otp">Enter OTP</label>
                                                    <input type="text" name="otp" class="form-control"placeholder="Enter OTP">
                                                </div>
                                                <button data-toggle="modal" data-target="#myModalReset2" data-dismiss="modal">
                                                    VERIFY OTP
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create account now</a><a href="#"> |</a> <a href="#myModalLogin"  data-toggle="modal" data-dismiss="modal">Login</a>
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
                                                    <input type="password" name="pwd" class="form-control"placeholder="Enter new Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="re-pwd">Confirm Password</label>
                                                    <input type="password" name="re-pwd" class="form-control"placeholder="Re-enter new Password">
                                                </div>

                                                <button type="submit">
                                                    RESET PASSWORD
                                                </button>
                                            </form>
                                            <div class="links">
                                                <a href="#myModalSignup" data-toggle="modal" data-dismiss="modal">Create account now</a><a href="#"> |</a> <a href="#myModalLogin"  data-toggle="modal" data-dismiss="modal">Login</a>
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

<div class="trek-pagination">
    <h2>Treks > Himachal ><span> Kasol Trek</span></h2>
</div>

<div class="row trek-place">
    <div class="col-sm-8" style="padding: 0;">
        <img id="trek_image" src="new_img/trek-image.png">
    </div>
    <div class="col-sm-4 trek-place-detail">
        <h5 class="trekDifficulty">Difficult</h5>
        <h1>Amedhi Kallu Trek</h1>
        <div class="trek-place-location">
            <img src="new_img/icons/destination.png">
            <h2>Himachal Pradesh</h2>
        </div>
        <div class="row">
            <div class="col-xs-3 weather1" id="weatherDetail1">
                <img src="new_img/trek/sunny.png">
                <span>4 D</span>
            </div>
            <div class="col-xs-3 weather1" id="weatherDetail2">
                <img src="new_img/trek/moon.png">
                <span>3 N</span>
            </div>
            <div class="col-xs-5 col-xs-offset-1 weather1" id="weatherDetail3">
                <img src="new_img/icons/road.png">
                <span>17 Km</span>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 weather1" id="weatherDetail4">
                <img src="new_img/trek/up-alt.png">
                <span>20,000 ft</span>
            </div>
            <div class="col-xs-6 weather1" id="weatherDetail5">
                <img src="new_img/trek/temperature.png">
                <span>18 °C</span>
            </div>
        </div>

        <h4>Inclusions</h4>

        <div class="row">
            <div class="col-xs-2 living">
                <figure>
                    <img src="new_img/icons/campground.png">
                    <figcaption>STAYS</figcaption>
                </figure>
            </div>
            <div class="col-xs-2 living">
                <figure>
                    <img src="new_img/icons/food.png">
                    <figcaption>FOOD</figcaption>
                </figure>
            </div>
        </div>

        <div class="row guide-amount">
            <div class="col-xs-4 guide" onclick="show()">
                <img src="new_img/icons/md-man.png">
                <span>GUIDE Details</span>

                <div class="guide-popup">
                    <div class="row">
                        <h3 class="col-xs-8">Tour Guide</h3>
                        <img class="col-xs-4" src="new_img/trek/guide-photo.png" alt="No photo available">
                    </div>

                    <div class="tour-guide" style="margin-left: 0;">
                        <h4>Name - <span style="color: #4E5AFF;">Mr. Atul Gupta</span></h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea.
                        </p>

                        <h4 style="margin-bottom: 10px;">Language Spoken</h4>
                        <span class="lang1">Hindi</span><span class="lang2" style="margin-left: 20px;">English</span>
                    </div>

                </div>
            </div>
            <div class="col-xs-7 col-xs-offset-1 amount">
                <span>Starts from</span><span style="font-size: 12px; font-weight: 400;">(Per Adult)</span>
                <h5>₹ 8,500</h5>
            </div>
        </div>
    </div>
</div>

<div class="row impDetail">
    <div class="col-sm-7">
        <h2>Organised by: <span style="color: #039BE5;">COMPANY NAME</span></h2>
        <h3>Trek Overview</h3>
        <p class="overview">A town with a historical touch and riverbank geography will just take your breath away! Rishikesh  is settled in foothills of Himalaya while residing in the state of Uttrakhand. The city attracts most of the travellers because of its mountain views, religious touch, and adventurous activities.
        </p>
        <h3>Itinerary</h3>

        <ul id="listItinerary" style="list-style-image: url(icons/pointer.png);">

        </ul>

        <a href="#listItinerary" id="itineraryShow">Collapse Itinerary</a>

        <div class="row">
            <div class="carry col-xs-5">
                <h3 style="margin-bottom: 20px; padding-top: 20px;">THINGS TO CARRY</h3>

                <ul id="carryThings">
                    <li>Comfortable Footwear</li>
                    <li>Mosquito Repellent</li>
                    <li>Sunscreen</li>
                    <li>Extra Set of Clothes</li>
                    <li>Sunglasses</li>
                    <li>Flip Flops</li>
                    <li>Towel</li>
                    <li>Camera</li>
                    <li>Flashlight With Extra Batteries</li>
                </ul>
            </div>

            <div class="inclusions col-xs-5 col-xs-offset-2">
                <h3 style="margin-bottom: 20px;">INCLUSIONS</h3>

                <h4>Before and After Treks</h4>
                <ul id="trekThings">
                    <li>Comfortable Footwear</li>
                    <li>Mosquito Repellent</li>
                    <li>Sunscreen</li>
                    <li>Extra Set of Clothes</li>
                </ul>
                <h4>During Treks</h4>
                <ul id="trekThings">
                    <li>Comfortable Footwear</li>
                    <li>Mosquito Repellent</li>
                    <li>Sunscreen</li>
                </ul>
            </div>
        </div>

        <h3>Equipments you will be provided During treks</h3>
        <div class="equipments">
            <h4>Individual items</h4>
            <div class="row">
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
            </div>

            <h4>Shared items</h4>
            <div class="row">
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
                <div class="col-xs-2">
                    <span>Item</span>
                </div>
            </div>
        </div>

        <h3>Tour Guide</h3>
        <div class="tour-guide">
            <h4>Name - <span style="color: #4E5AFF;">Mr. Atul Gupta</span></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea.
            </p>

            <h4 style="margin-bottom: 10px;">Language Spoken</h4>
            <span class="lang1">Hindi</span><span class="lang2" style="margin-left: 20px;">English</span>
        </div>

        <div class="plans">
            <h5>Emergency Response Plan</h5>
            <div id="emergencyPlan">
                <p></p>
                <a href="#emergencyPlan">Show less</a>
                <br>
            </div>

            <h5>Natural Disaster Emergency Plan</h5>
            <div id="disasterPlan">
                <p></p>
                <a href="#disasterPlan">Show less</a>
                <br>
            </div>

            <h5>Medical Emergency Response Plan</h5>
            <div id="medicalPlan">
                <p></p>
                <a href="#medicalPlan">Show less</a>
                <br>
            </div>
        </div>

        <h3>Cancellation Policy</h3>
        <ul id="listCancellation">
            <!-- <li>
                If cancellations are made 15 days before the start date of the trip, no cancellation fees will be applicable.

            </li>
            <li>
                If Cancellations are made within 1-15 days before the start date of the trip, 60% of Total tour cost will be charged as cancellation fee

            </li>
            <li>
                Same Day cancellations are non refundable.
            </li>
            <li>
                In case of unforeseen weather conditions or government restrictions, certain trips or activities may get cancelled. In such cases operator will try their best to provide an alternate feasible. However a cash refund will not be applicable for the same.

            </li>
            <li style="margin-bottom: 0;">
                Cancellations are strictly subjected to cancellation policies mentioned on the website & are irrespective of the date of booking.
            </li> -->
        </ul>
        <a href="#listCancellation" id="cancellationShow">Show less</a>

        <h3>Booking Confirmation Policy</h3>
        <ul id="listConfirmation">
            <li>
                The customer receives a confirmation voucher via email within 24 hours of successful booking.
            </li>
            <li>
                In case the preferred slots are unavailable, an alternate schedule of the customer’s preference will be arranged and a new confirmation voucher will be sent via email.
            </li>
            <li>
                Alternatively, the customer may choose to cancel their booking before confirmation and a full refund will be processed.
            </li>
        </ul>

    </div>
    <div class="col-sm-4 col-sm-offset-1 form-query">
        <div>
            <h4>Number of people in a trek</h4>
            <div class="restrict-people row">
                <h5 class="col-xs-6">Min - 8</h5>
                <h5 class="col-xs-6" style="text-align: right;">Max - 15</h5>
            </div>
            <form>
                <div>
                    <select id="dateSelect">
                        <option>Choose your date</option>
                    </select>
                </div>
                <div class="input-group">
                    <span>Adult</span>
                    <img src="new_img/icons/minus-circle.png" id="minusCircle">
                    <div class="people-number">
                        <input type="text" name="noOfPeople" id="people" placeholder="0">
                    </div>
                    <img src="new_img/icons/plus-circle.png" id="plusCircle">
                </div>
                <button type="submit">Book Now</button>
            </form>
            <h3>Have Any Question?</h3>
            <h3>Contact us @</h3>
            <h2>+91-9872-129281</h2>
        </div>
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
                <li>
                    <a href="#">
                        <img src="new_img/icons/facebook.png" alt="" style="width: 15px; height: 30px;">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="new_img/icons/instagram.png" alt="" style="width: 27px; height: 25px;">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="new_img/icons/youtube.png" alt="" style="width: 30px; height: 20px;">
                    </a>
                </li>
            </ul>
            <p>#wandertribe</p>
        </center>

    </div>
</div>

<footer class="footer">
    <div class="row">
        <div class="col-xs-4 footer1">
            <div class="row">
                <div class="col-xs-2" style="padding-right: 0;">
                    <img src="new_img/logo/logo3.png" alt="">
                </div>
                <div class="col-xs-10" style="height: 37.3px; padding-left: 0;">
                    <a href="#"><h3>WanderTribe</h3></a>
                </div>
            </div>
            <div>
                <p>An online platform allowing users to experience properties and life in offbeat locations across India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and other Travel related Suppliers to transform their business and opening new revenue streams for them.</p>
            </div>

            <div class="row copyright">
                <div class="col-xs-1" style="padding-right: 0; vertical-align: middle;">
                    <img src="new_img/icons/copyright.png">
                </div>
                <div class="col-xs-11" style="padding: 0;">
                    <h6>Copyright.2019 Unfolding Skies Private Limited.All Rights Reserved</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-3 footer2">
            <a href="#"><h3>TERMS & CONDITIONS</h3></a>
            <a href="#"><h4>GUEST POLICIES</h4></a>
            <a href="#"><h4>PRIVACY POLICIES</h4></a>
            <a href="#"><h4>CANCELLATION POLICIES</h4></a>
        </div>

        <div class="col-xs-3 footer3">
            <a href="#"><h3>TAGS</h3></a>
            <a href="#"><h4>WHY US</h4></a>
            <a href="#"><h4>ABOUT US</h4></a>
            <a href="#"><h4>CONTACT US</h4></a>
            <a href="#"><h4>GO GREEN</h4></a>
            <a href="#"><h4>DESTINATION MANAGEMENT</h4></a>
        </div>

        <div class="col-xs-2 footer4">
            <a href="#"><h3>LOGINS</h3></a>
            <a href="#"><h4>BUSINESS LOGIN</h4></a>
            <a href="#"><h4>LIST YOUR PROPERTY</h4></a>
            <a href="#"><h4>CANCEL BOOKING</h4></a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/trekDetail.js"></script>

<script>

    // $('body *').not('body .header').click(function () {
    // 	console.log(this);
    // 	$('#headerNew').show();
    // 	$('#header').hide();
    // });

    //$('#dateChosen').datetimepicker();

    /*$('#dateChosen').blur(function () {
        var chosenDate = $('#dateChosen').val();
        var arrDatetime = chosenDate.split(' ');
        var arrDate = arrDatetime[0].split('/');
        var arrRealDate = [];
        arrRealDate[0] = arrDate[1];
        arrRealDate[1] = arrDate[2];
        arrRealDate[2] = arrDate[0];

        var stringRealDate = arrRealDate.join('/');
        if(stringRealDate.length > 2)
            $('#dateChosen').val(stringRealDate);

        console.log(chosenDate);
        console.log(arrDatetime);
        console.log(arrDate);
        console.log(arrRealDate);
        console.log(stringRealDate);
    });*/

    document.getElementById('itineraryShow').addEventListener("click", function (event) {
        event.preventDefault();
        itineraryShowFn();
        //this.innerText==="Collapse Itinerary" ?
        //(this.innerText="Expand Itinerary") : (this.innerText="Collapse Itinerary");
    });

    $('#emergencyPlan a').click(function(event){
        event.preventDefault();
        emergencyPlanFn();
    });

    $('#disasterPlan a').click(function(event){
        event.preventDefault();
        disasterPlanFn();
    });

    $('#medicalPlan a').click(function(event){
        event.preventDefault();
        medicalPlanFn();
    });

    //window.addEventListener('load', cancellationPolicyFn);

    $('#cancellationShow').click(function (event) {
        event.preventDefault();
        cancellationPolicyFn();

        //this.innerText==="Show less" ? this.innerText="Show more" : this.innerText="Show less";
    });
</script>


</body>
</html>
