<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149144948-1');
    </script>

    <title>Booking Cancellation</title>
    <link rel="icon" href="img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="tuner/css/colorpicker.css">
    <link rel="stylesheet" href="tuner/css/styles.css">
    <link rel="stylesheet" href="css/footer_tripvenza.css">
    <link rel="stylesheet" href="css/loginpopup.css">

    <style>
        input{
            border-radius: 10px !important;
        }

        td{
            color: black;
        }

        td:nth-child(odd){
            text-align: right;
            padding-right: 30px;
            font-weight: bolder;
        }
        td:nth-child(even){
            text-align: left;
        }
    </style>
</head>
<body>
<!-- header page-->
<header>
    <!-- Navigation panel-->
    <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
            <!-- Logo ( * your text or image into link tag *)-->
            <div class="nav-logo-wrap local-scroll"><a href="index.php" class="logo"><img src="img/logo.png"
                                                                                          data-at2x="img/logo@2x.png"
                                                                                          alt></a></div>
            <!-- Main Menu-->
            <div class="inner-nav desktop-nav">
                <ul class="clearlist">
                    <li>
                        <div class="acc-status top-login" id="acc_status"></div>
                    </li>
                    <!-- End Item-->
                </ul>

            </div>
            <!-- End Main Menu-->
        </div>
    </nav>
    <!-- End Navigation panel-->
</header>
<!-- ! header page-->
<!-- content-->
<div class="content-body">
    <div class="container page">
        <div class="row">
            <div class="col-lg-12 mb-50">
                <h2>Booking Cancellation</h2>
                <hr>
            </div>
            <div class="col-lg-12" id="get_order">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <form id="get_order_form">
                        <lable for"order_id">Order Id :</lable>
                        <input type="text" id="order_id" name="order_id">
                        <input type="submit" value="Submit" class="cws-button small mb-20 bg-orangish">
                    </form>
                </div>
            </div>
            <div class="col-lg-12" id="set_order" style="display: none">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <h4>For Your Booking in <span id="order_camp_name"></span></h4>
                    <table width="100%">
                        <tr>
                            <td>Custome Name : </td>
                            <td id="order_name"></td>
                        </tr>
                        <tr>
                            <td>Mobile : </td>
                            <td id="order_mobile"></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td id="order_email"></td>
                        </tr>
                        <tr>
                            <td>From : </td>
                            <td id="order_from_date"></td>
                        </tr>
                        <tr>
                            <td>To : </td>
                            <td id="order_to_date"></td>
                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td id="order_status"></td>
                        </tr>
                        <tr>
                            <td>Amount : </td>
                            <td id="order_amount"></td>
                        </tr>
                    </table>
                    <input type="hidden" value="" id="transaction_id">
                    <div id="cancel_status">
                        <input type="button" value="Cancel Order" class="cws-button small mb-20 bg-orangish" onclick="cancel_order()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ! content-->
<!-- footer-->
<footer class="footer footer-fixed" style="padding-top: 0px;">
    <div class="container pt-50">
        <div class="row">

            <div class="col-lg-12 text-center">
                <a href="#"><img class="social-icons" src="img/fb_icon.png"></a>
                <a href="#"><img class="social-icons" src="img/Linkedin_icon.png"></a>
                <a href="#"><img class="social-icons" src="img/Twitter_icon.png"></a>
                <a href="#"><img class="social-icons" src="img/insta_icon.png"></a>
            </div>

            <div class="col-lg-12">


                <div class="col-lg-3 pl-55">
                    <div class="col-lg-12">
                        <a class="tripvenza-logo" href="index.php">
                            <img class="tripvenza-logo_for_footer" src="img/white_logo.png"
                                 style="width: 160px;margin-bottom: 25px;">
                        </a>
                    </div>
                    <p style="line-height: 24px; font-size: 14px;font-weight: lighter; text-align: justify; width: 80%">
                        Wandertribe is an online travel platform allowing users to experience properties and life in
                        offbeat locations across India.
                        In this journey, we are connecting Property Owners,Travel Agents, Travel Curators & other Travel
                        Related Suppliers to transform their business and opening new revenue streams for them.
                    </p>
                </div>

                <div class="col-lg-9 footer-tags">

                    <div class="col-lg-3 pt-100 text-center">

                        <a href="terms.php?terms=terms">
                            <div><strong>Terms & Conditions</strong></div>
                        </a>
                        <a href="terms.php?terms=guest">
                            <div>Guest Policies</div>
                        </a>
                        <a href="terms.php?terms=privacy">
                            <div>Privacy Policies</div>
                        </a>
                        <a href="terms.php?terms=cancellation">
                            <div>Cancellation Policies</div>
                        </a>

                    </div>

                    <div class="col-lg-3 pt-100 text-center">

                        <a href="#">
                            <div><strong>Logins</strong></div>
                        </a>
                        <a href="#">
                            <div>Business</div>
                        </a>
                        <a href="#">
                            <div>List Your Property</div>
                        </a>
                        <a href="cancelBooking.php">
                            <div>Cancel Booking</div>
                        </a>

                    </div>

                    <div class="col-lg-3 pt-100 text-center">

                        <a href="#">
                            <div><strong>Tags</strong></div>
                        </a>
                        <a href="whyUs.php">
                            <div>WHY US</div>
                        </a>
                        <a href="#">
                            <div>ABOUT US</div>
                        </a>
                        <a href="pageContact.php">
                            <div>CONTACT US</div>
                        </a>

                        <a href="destinationManagement.php">
                            <div>DESTINATION MANAGEMENT</div>
                        </a>

                    </div>

                    <div class="col-lg-3 pt-10 text-right" style="padding-right: 70px">

                        <a href="#">
                            <div><strong>Categories</strong></div>
                        </a>
                        <a href="#">
                            <div>COUPLES</div>
                        </a>
                        <a href="#">
                            <div>FAMILY</div>
                        </a>
                        <a href="#">
                            <div>YOUNGSTERS</div>
                        </a>
                        <a href="#">
                            <div>DAY OFF</div>
                        </a>
                        <a href="#">
                            <div>FEMALE SPECIAL</div>
                        </a>
                        <a href="#">
                            <div>SENIOR CITIZENS</div>
                        </a>
                        <a href="#">
                            <div>DOG FRIENDLY</div>
                        </a>
                        <a href="#">
                            <div>LUXURY</div>
                        </a>

                    </div>

                </div>
            </div>


            <div class="col-lg-12 text-center">
                <h5 style="color:#C0C8D8; font-size: 10px;margin-top: 34px;font-weight: lighter; ">Copyright.2019
                    Unfolding Skies Private Limited. All Rights Reserved</h5>
            </div>

        </div>
    </div>
</footer>


<div id="scroll-top"><i class="fa fa-angle-up"></i></div>
<!-- ! footer-->
<!-- login popup-->
<div class="login-popup">
    <div class="login-popup-wrap">
        <div class="title-wrap">
            <h2>Login</h2><i class="close-button flaticon-close"></i>
        </div>
        <div class="login-content">
            <form class="form">
                <input type="text" name="email" value="" size="40" placeholder="Enter Your Mobile ..."
                       aria-required="true" class="form-row form-row-first" id="user_mobile">
                <input type="password" name="password" value="" size="40" placeholder="Enter Your Password ..."
                       aria-required="true" class="form-row form-row-last" id="user_password">
            </form>

            <div id="login_btn" onclick="login('<?php echo $_SERVER['API_ENDPOINTS'] ?>')">
                <a href="#" class="cws-button full-width mt-20" style="font-size: 20px;">Login now</a>
            </div>


        </div>
        <div class="login-bot">
            <p><span style="margin-right: 10%"><a onclick="forgot_password()"
                                                  href="#">Forgot Password ?</a></span>|<span
                        style="margin-left: 10%"><a href="registration.php">Register now</a></span></p>
        </div>
    </div>
</div>
<!-- ! login popup-->

<!-- ALERT popup-->
<div class="alert-popup wallet-popup">
    <div class="alert-popup-wrap">
        <div class="title-wrap">
            <h2>Wallet Balance</h2><i class="close-button flaticon-close"></i>
        </div>
        <div class="wallet-balance">
            <p></p>
        </div>
        <div class="alert-bot">
            <p></p>
        </div>
    </div>
</div>
<!-- ! ALERT popup-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.youtube.com/player_api"></script>
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="js/cws_parallax.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/bg-video/cws_self_vimeo_bg.js"></script>
<script type="text/javascript" src="js/bg-video/jquery.vimeo.api.min.js"></script>
<script type="text/javascript" src="js/bg-video/cws_YT_bg.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<!--<script type="text/javascript" src="tuner/js/colorpicker.js"></script>-->
<!--<script type="text/javascript" src="tuner/js/scripts.js"></script>-->
<script type="text/javascript" src="js/retina.min.js"></script>
<script>


    function login() {

        $.ajax({
            type: 'POST',
            url: 'https://api.wandertribe.in/api/login/login',
            data: {
                email: document.getElementById('user_email').value,
                password: document.getElementById('user_password').value
            },
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data.result.auth_key);
                localStorage.setItem("auth_key", data.result.auth_key);


            },
            statusCode: {
                200: function () {
                    location.reload();
                },
                202: function () {
                    $(".alert-popup").addClass("open");
                }
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    }


    $(document).ready(function islogged() {
        var auth_key = localStorage.getItem("auth_key");

        var dash = (localStorage.getItem("user_type") == 'VENDOR' || localStorage.getItem("user_type") == 'ADMIN') ? "dashboard" : "user";

        $(".acc-status").each(function () {

            if (auth_key != undefined) {

                this.innerHTML = '<div class="dropdown">' +
                    '<a href="#" class="cws-button small  alt mb-20 dropbtn">My Account</a>' +
                    '<div class="dropdown-content" id="myDropdown">' +
                    '<a href="/' + dash + '" class="top-wallet" >Dashboard</a> ' +
                    ' <a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
                    '</div>  </div>';
                $(".top-login").off('click');
            } else {
                this.innerHTML = '<a href="#" class="cws-button small  alt gray-dark mb-20">LogIn/SignUp</a>';
            }
        });

    });


    $("#get_order_form").submit(function (e) {

        e.preventDefault();


        $.ajax({
            type: 'POST',
            url: '<?php echo $_SERVER['API_ENDPOINTS'] ?>/api/transaction_status',
            data: $("#get_order_form").serialize(),
            dataType: 'json',
            beforeSend: function () {
                $('.loader-outer').show();
            },
            success: function (data, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200) {

                    if(data.result.status == "CANCELLED"){
                        $("#cancel_status").html('<h5 class="text-danger">This Order is already Cancelled.</h5>');
                    }

                    $("#order_camp_name").html(data.result.camp.camp_name);
                    $("#order_name").html(data.result.user.name);
                    $("#order_mobile").html(data.result.user.mobile);
                    $("#order_email").html(data.result.user.email);
                    $("#order_from_date").html(data.result.from_date);
                    $("#order_to_date").html(data.result.to_date);
                    $("#order_status").html(data.result.status);
                    $("#order_amount").html(data.result.amount);
                    $("#transaction_id").val(data.result.transaction_id);


                    $("#get_order").hide();
                    $("#set_order").show();


                } else if (xhr.status == 201) {
                    alert('Enter Correct Order Id');
                }
            },

            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    });

    function cancel_order() {

        $.ajax({
            type: 'POST',
            url: '<?php echo $_SERVER['API_ENDPOINTS'] ?>/api/cancel_booking',
            data: {
                'transaction_id':$("#transaction_id").val()
            },
            dataType: 'json',
            beforeSend: function () {
                $('.loader-outer').show();
            },
            success: function (data, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200) {

                    $("#cancel_status").html('<h5>This Order is cancelled.</h5>');

                }
            },

            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
        });
    }

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d92f6b7db28311764d6a4f9/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
