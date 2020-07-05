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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Checkout</title>
    <link rel="icon" href="img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="css/loginpopup.css">
    <link rel="stylesheet" href="css/footer_tripvenza.css">


    <script>


        $(document).ready(function () {
            $(".signup_form").hide();
            $(".login_heading").css("font-size", "18px");
            $(".login_heading").css("font-weight", "bold");
            $(".choose_your_type").hide();
        });

        function show_signup() {

            $(".login_form").hide();
            $(".choose_your_type").show();
            $(".Left-part").hide();
            $(".form_heading").hide();
            $(".signup_form").hide();
        }

        function show_login() {
            $(".signup_form").hide();
            $(".login_form").show();
            $(".login_heading").css("font-size", "18px");
            $(".login_heading").css("font-weight", "bold");
            $(".signup_heading").css("font-size", "14px");
            $(".signup_heading").css("font-weight", "lighter");

        }

        function opensignup(typ) {

            $(".login_form").hide();
            $(".signup_form").show();

            $(".login_heading").css("font-size", "13px");
            $(".login_heading").css("font-weight", "lighter");
            $(".signup_heading").css("font-size", "17px");
            $(".signup_heading").css("font-weight", "bold");
            $(".choose_your_type").hide();
            $(".Left-part").show();
            $(".form_heading").show();
            $("#user_type").val(typ);

        }

        function alwaysopenlogin() {
            $(".Left-part").show();
            $(".signup_form").hide();
            $(".choose_your_type").hide();
            $(".login_form").show();
            $(".form_heading").show();
        }
    </script>
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
                    <!-- Item With Sub-->
                    <!--<li><a href="comingSoon.html" class="mn-has-sub active">Property</a></li>-->
                    <!--&lt;!&ndash; End Item With Sub&ndash;&gt;-->
                    <!--<li class="slash">/</li>-->
                    <!-- Item With Sub-->
                    <!--                    <li><a href="businessRegistration.php" class="mn-has-sub">Business</a></li>-->
                    <!-- End Item With Sub-->
                    <!--                    <li class="slash">/</li>-->
                    <!-- Item With Sub-->
                    <!--<li><a href="comingSoon.html" class="mn-has-sub">Itinerary</a></li>-->
                    <!--&lt;!&ndash; End Item With Sub&ndash;&gt;-->
                    <!--<li class="slash">/</li>-->
                    <!--&lt;!&ndash; Item With Sub&ndash;&gt;-->
                    <!--<li><a href="comingSoon.html" class="mn-has-sub">blog</a></li>-->
                    <!--&lt;!&ndash; End Item With Sub&ndash;&gt;-->
                    <!--<li class="slash">/</li>-->
                    <!-- Item-->
                    <!--                    <li><a href="vendorRegistration.php">List Your Property</a></li>-->
                    <!-- End Item-->
                    <!--                    <li class="slash">/</li>-->

                    <!--                    <li><a href="pageContact.php">Contact</a></li>-->
                    <!-- End Item-->
                    <!--                    <li class="slash">/</li>-->

                    <!-- Item-->
                    <!--<li><a href="#"> <i class="flaticon-suntour-phone"></i> 24/7</a></li>-->
                    <!-- End Item-->
                    <!-- Item-->
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
<div class="content-body ">
    <div class="container page">
        <div class="row checkout-container mb-30">
            <!-- content-->
            <div class="col-md-8 checkout-content">
                <h3 class="font-color mb-30">Guest Details</h3>
                <h4 class="ml-20">Contact Details</h4>
                <hr style="border: 0.5px solid grey">
                <div class="row">
                    <div class="col-md-8 checkout-form">

                        <form id="checkout_form" class="ml-20">

                            <p id="billing_email_field"
                               class="form-row form-row-wide validate-required validate-email">
                                <label for="checkout_name">Name</label>
                                <input id="checkout_name" type="text" name="name"
                                       placeholder="" value="" class="input-text" required>
                            </p>

                            <p id="billing_phone_field"
                               class="form-row form-row-wide validate-required validate-phone">
                                <label for="checkout_mobile">Mobile Number</label>
                                <input id="checkout_mobile" type="number" name="mobile" placeholder=""
                                       value="" class="input-text" pattern="/^-?\d+\.?\d*$/"
                                       onKeyPress="if(this.value.length==10) return false;" required>
                            </p>

                            <p id="billing_email_field"
                               class="form-row form-row-wide validate-required validate-email">
                                <label for="checkout_email">Email Address</label>
                                <input id="checkout_email" type="email" name="email" placeholder=""
                                       value="" class="input-text" required>
                            </p>

<!--                            <p id="billing_email_field"-->
<!--                               class="form-row form-row-wide validate-required validate-email">-->
<!--                                <label for="checkout_gst">GST Number (if any)</label>-->
<!--                                <input id="checkout_gst" type="text" name="gst" placeholder=""-->
<!--                                       value="" class="input-text">-->
<!--                            </p>-->

                            <input type="hidden" name="order_id"  id="checkout_order_id" value="">
                            <input type="hidden" value="web" id="device" name="device"/>
                            <input type="hidden" name="camp_id"  id="checkout_camp_id" value="">
                            <input type="hidden" name="purpose"  id="checkout_purpose" value="">
                            <input type="hidden" name="amount"  id="checkout_amount" value="">
                            <input type="hidden" name="from_date"  id="checkout_from_date" value="">
                            <input type="hidden" name="to_date"  id="checkout_to_date" value="">
                            <input type="hidden" name="no_of_bookings"  id="checkout_no_of_bookings" value="">
                            <input type="hidden" name="booking_status"  id="checkout_booking_status" value="">
                            <input type="hidden" name="camp_code"  id="checkout_camp_code" value="">

                        </form>

                    </div>
                    <div class="col-md-4">
                        <p class="mt-25">
                            &#8594; All communication from WanderTribe will be sent to the shared details.
                        </p>
                    </div>
                </div>
                <h4 class="ml-20">Value Add-ons</h4>
                <hr style="border: 0.5px solid grey">
                <!--                <div class="addon" style="padding-left: 30px; font-size: 20px;">-->
                <!--                    <input type="checkbox" name="addon" value="ti"> Travel Insurance<br>-->
                <!--                </div>-->
                <div class="addon" style="padding-left: 30px; font-size: 20px;">
                    <input type="checkbox" name="is_guide" value="is_guide" id="is_guide">Do you need a Guide? (₹<span
                            id="guide_charges"></span> per day)<br>
                </div>
                <!--                <div class="addon" style="padding-left: 30px; font-size: 20px;">-->
                <!--                    For how many days? <input type="number" name="days_guide" placeholder="0" id="days_guide" style="width: 60px;">-->
                <!--                </div>-->

                <hr style="border: 0.5px solid grey">
                <div class="row text-center">
                    <div class="col-md-6">
                        <input type="radio" name="radio_checkout_amount" value="full" id="full_checkout_amount" style="-webkit-appearance: radio!important; margin-right: 10px" checked="checked">PAY FULL AMOUNT<br>(₹<span style="font-weight: 700;font-size: 20px;margin-left: 5px" id="full_amount"></span>)
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="radio_checkout_amount" value="partial" id="partial_checkout_amount" style="-webkit-appearance: radio!important; margin-right: 10px">PAY PARTIAL AMOUNT (35%)<br>(₹<span style="font-weight: 700;font-size: 20px;margin-left: 5px" id="partial_amount"></span>)
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="cws-button small mb-20 bg-orangish" style="width: 30%; border-radius: 10px" value="&rarr;PAY NOW" form="checkout_form" />
                    </div>
                </div>

            </div>

            <!-- sidebar-->
            <div class="col-md-4 sidebar checkout-sidebar" style="border: 2px dashed lightgray">

                <div class="checkout-header flex-box mt-20">
                    <img id="camp_image" src="img/list1.jpg">
                    <div class="ml-20">
                        <h3 class="font-color" id="camp_code">WanderTribe 12110</h3>
                        <p id="camp_destination">Lajpat Nagar, Delhi - 110024, India</p>
                    </div>
                </div>
                <hr style="border: 0.5px solid grey">
                <div class="checkout-time">
                    <div>
                        <p><span class="font-bold black" style="margin-right: 4em;"
                                 id="check_in">Thu, 18 April 2019</span>Check in time 12 PM</p>
                    </div>
                    <div>
                        <p><span class="font-bold black" style="margin-right: 4em;"
                                 id="check_out">Thu, 20 April 2019</span>Check out time 11 PM</p>
                    </div>
                    <hr style="border: 0.5px solid lightgray; width: 95%">
                    <div class="checkout-accom black">
                        <p>
                            <span id="rooms">01</span>
                            <span id="camp_type">Swiss</span>,
                            <span id="guests">02</span> Guests,
                            <span id="days">01</span> Night
                        </p>
                    </div>
                    <hr style="border: 0.5px solid lightgray; width: 95%">
                </div>

                <div class="mt-30 row">
                    <div>
                        <h5>Payment Details</h5>
                    </div>
                    <hr style="border: 0.5px solid grey">
                    <div class="col-md-6">
                        <div>Booking Amount</div>
                        <div>Price Dropped</div>
                        <div>Coupon Discount</div>
                        <div>Guide</div>
                        <div>CGST</div>
                        <div>SGST</div>
                        <div>IGST</div>
                    </div>
                    <div class="col-md-3">
                        <div>---</div>
                        <div><span id="price_drop_tag"></span>%</div>
                        <div><span id="coupon_tag"></span></div>
                        <div><span id="is_guide_tag">NO</span></div>
                        <div><span id="cgst_tag"></span>%</div>
                        <div><span id="sgst_tag"></span>%</div>
                        <div><span id="igst_tag"></span>%</div>
                    </div>
                    <div class="col-md-3">
                        <div id="booking_amt">1600</div>
                        <div id="price_drop_amt">-70</div>
                        <div id="coupon_amt">-200</div>
                        <div id="guide_charges_amt">500</div>
                        <div id="cgst_amt">156</div>
                        <div id="sgst_amt">156</div>
                        <div id="igst_amt">156</div>
                    </div>
                </div>
                <hr style="border: 0.5px solid grey; margin-top: 30px">
                <div class="flex-box black font-bold" style="font-size: 20px; margin-top: -20px">
                    <div class="col-md-9">
                        Payable Total Amount
                    </div>
                    <div class="col-md-3" id="chckout_amt">
                        2600
                    </div>

                </div>
                <hr style="border: 0.5px solid grey">

            </div>
        </div>
        <!-- ! content-->
        <!-- footer-->
        <footer class="footer footer-fixed" style="padding-top: 0px;">
            <div class="container pt-50">
                <div class="row">

                    <div class="col-lg-12 text-center">
                        <a href="https://www.facebook.com/wandertribe.in"><img class="social-icons" src="img/fb_icon.png"></a>
                        <a href="https://www.linkedin.com/company/wandertribe"><img class="social-icons" src="img/Linkedin_icon.png"></a>
                        <!--                <a href="#"><img class="social-icons" src="img/Twitter_icon.png"></a>-->
                        <a href="https://www.instagram.com/wandertribe.in/"><img class="social-icons" src="img/insta_icon.png"></a>
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

                                <a href="goGreen.php">
                                    <div>Go Green</div>
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

        <div id="pg_form" style="display: none">

            <form id="redirectForm" method="post" action="<?php echo $_SERVER['CASHFREE_ENDPOINTS']; ?>">
                <input type="hidden" id="appId" name="appId" value=""/>
                <input type="hidden" id="orderId" name="orderId" value=""/>
                <input type="hidden" id="orderAmount" name="orderAmount" value=""/>
                <input type="hidden" id="orderCurrency" name="orderCurrency" value=""/>
                <input type="hidden" id="orderNote" name="orderNote" value=""/>
                <input type="hidden" id="customerName" name="customerName" value=""/>
                <input type="hidden" id="customerEmail" name="customerEmail" value=""/>
                <input type="hidden" id="customerPhone" name="customerPhone" value=""/>
                <input type="hidden" id="returnUrl" name="returnUrl" value=""/>
                <input type="hidden" id="notifyUrl" name="notifyUrl" value=""/>
                <input type="hidden" id="signature" name="signature" value=""/>
            </form>

        </div>

        <!--  loader -->
        <div class="loader-outer">
            <div class="loader-icon">
                <div class="loader-inner">
                    <img src='img/fullscreen-loader.gif'>
                    <p>Processing. Please Wait...</p>
                </div>
            </div>
        </div>

        <!-- ! loader -->
        <!-- login popup-->
        <div class="login-popup" id="logsignpop">
            <div class="container Login_Signup_Container">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-0 Left-part">
                        <div class="IMAGE1">
                            <img src="img/image-new.png">
                        </div>
                        <div class="IMAGE2">
                            <img src="img/brand-logo.png">

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-part">
                        <div class="row form_heading">
                            <div class="col-sm-5 col-md-4 col-xs-4 login_heading_container" onclick="show_login();"><h5
                                        class=" login_heading">LOGIN</h5></div>
                            <div class="col-sm-5 col-md-4 col-xs-4 signup_heading_container" onclick="show_signup();">
                                <h5
                                        class=" signup_heading">SIGNUP</h5></div>
                            <div class="col-sm-2 col-md-4 col-xs-4 title-wrap" onclick="alwaysopenlogin()"
                                 style="padding: 0px !important;width:fit-content;padding-top: 7px;margin-left: 20px;margin-top: 4px;">
                                <i class=" close-button flaticon-close" style="padding-top: 6px;"></i></div>
                        </div>
                        <div class=" login_form">
                            <form>
                                <div class="login_email_container">
                                    <input type="text" class="login_email" placeholder="Enter your Mobile" value=""
                                           id="user_mobile" required/>
                                </div>
                                <div class="login_pass_container">
                                    <input type="password" class="login_pass" placeholder="Your Password" value=""
                                           id="user_password" required/>
                                </div>
                                <div class="Login_button">
                                    <a href="#" class="btn btn-warning btn_login lg" id="login_index"
                                       onclick="login('<?php echo $_SERVER['API_ENDPOINTS'] ?>')">Sign in
                                    </a>
                                </div>
                                <div class="form-group">
                                    <div class="row middle_container">
                                        <div class="col-md-6 col-sm-6 col-xs-6 checkbox-container">
                                            <input type="checkbox"><a href="#">Remember me<br>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 Forgot_Password_Container">
                                            <a href="#" class="ForgetPwd" onclick="forgot_password()">Forget
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <hr style="height: 5px;margin:5px;border-bottom: 1px solid lightgrey;width:90%;">

                                <div class="rest-icons" style="height: 20px;display: flex;margin-top: 20px;">
                                    <h3 style="color: black;font-size: 12px;margin-top: 8px;margin-left:5px;text-align: left;font-family:Century Gothic;font-weight: 10px;  ">
                                        or sign in with-</h3>
                                    <a href="#"><img src="img/facebook.png"
                                                     style="height: 30px;width: 30px;margin-left: 20px;margin-top: 3px;"></a>
                                    <a href="#">
                                        <img src="img/gplus.png"
                                             style="height:30px;width:30px;margin-left: 15px;margin-top: 3px;"></a>
                                </div>
                            </form>
                        </div>
                        <div class="signup_form">
                            <form name="checkout" method="post"
                                  action="<?php echo $_SERVER['API_ENDPOINTS']; ?>/api/register"
                                  enctype="multipart/form-data"
                                  class="checkout woocommerce-checkout" id="signupformid">

                                <div class="form-group">
                                    <input type="text" class="form-control signup_fillups" placeholder="Name"
                                           id="billing_first_name" name="name" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control signup_fillups" placeholder="E-mail"
                                           id="billing_email" name="email" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control signup_fillups" maxlength="10"
                                           placeholder="Phone"
                                           id="billing_phone" name="mobile" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control signup_fillups" placeholder="Password"
                                           id="billing_password" name="password" value="" required/>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control signup_fillups"
                                           placeholder="Confirm Password"
                                           id="remember_password" name="remember_password" value="" required/>
                                </div>

                                <input type="hidden" value="" id="user_type" name="user_type"/>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn_register">Register</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="choose_your_type">
                    <div class="title-wrap" style="padding-top: 5px;width:100%;height: 30px;"
                         onclick="alwaysopenlogin()"><i
                                class=" close-button flaticon-close" style="float: right;"></i></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 property-image-ls">
                            <img src="img/property.png" class="property_image" onclick="opensignup('VENDOR')"
                                 onmouseover="this.src='img/pgnew.png'" onmouseout="this.src='img/property.png'; ">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 buisness-image-ls">
                            <img src="img/buisness.png" class="buisness_image" onclick="opensignup('CUSTOMER')"
                                 onmouseover="this.src='img/bgnew.png'" onmouseout="this.src='img/buisness.png';">
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- ! login popup-->
    <!-- news popup-->
    <div class="news-popup">
        <div class="news-popup-wrap"><i class="close-button flaticon-close"></i>
            <div class="row">
                <div class="col-sm-6"><img src="pic/news-popup.jpg" data-at2x="pic/news-popup@2x.jpg" alt></div>
                <div class="col-sm-6">
                    <div class="news-content">
                        <div class="news-title">
                            <h2>Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                        <form method="get" action="#" class="newsletter contact-form">
                            <label class="mb-0">
                                <input type="text" placeholder="Enter Your Email ..." value="" name="email"
                                       class="newsletter-field mb-0">
                            </label>
                            <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
                        </form>
                        <div class="checkbox-wrap">
                            <div class="checkbox">
                                <input id="checkbox40" type="checkbox" value="None" name="check">
                                <label for="checkbox40">Dont Show This Message Again</label>
                            </div>
                        </div>
                        <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#"
                                                                                                         class="cws-social flaticon-social"></a><a
                                    href="#" class="cws-social flaticon-social-3"></a><a href="#"
                                                                                         class="cws-social flaticon-social-1"></a><a
                                    href="#" class="cws-social flaticon-social-network"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ! news popup-->

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
    <script type="text/javascript"
            src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
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
    <script type="text/javascript" src="js/retina.min.js"></script>

    <script>

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


        var frm = $('#signupformid');

        frm.submit(function (e) {

            e.preventDefault();


            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
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


        var checkout_details = JSON.parse(atob((sessionStorage.getItem('checkout_details'))));
        var checkout_amount = 0;
        console.log(checkout_details);
        $(document).ready(function () {

            if (checkout_details.guide_charges == null) {
                $(".addon").html('<p>Not Available at this property</p>');
            }

            //replacing the default camp image on based of camp type
            if (checkout_details.camp_type == 'homestay') {
                $("#camp_image").attr('src', 'img/cottage-tent.png');
            } else if (checkout_details.camp_type == 'dome') {
                $("#camp_image").attr('src', 'img/dome.jpg');
            } else if (checkout_details.camp_type == 'alpine') {
                $("#camp_image").attr('src', 'img/alpine.jpg');
            } else if (checkout_details.camp_type == 'swiss') {
                $("#camp_image").attr('src', 'img/swiss.jpg');
            } else if (checkout_details.camp_type == 'cottage') {
                $("#camp_image").attr('src', 'img/cottage.jpg');
            }

            $("#checkout_name").val(localStorage.getItem("user_name"));
            $("#checkout_mobile").val(localStorage.getItem("mobile"));
            $("#checkout_email").val(localStorage.getItem("user_email"));
            $("#guide_charges").html(checkout_details.guide_charges);

            $("#camp_code").html(checkout_details.camp_name);
            $("#camp_destination").html(checkout_details.camp_destination);
            $("#check_in").html(checkout_details.check_in);
            $("#check_out").html(checkout_details.check_out);
            $("#rooms").html(checkout_details.rooms);
            $("#camp_type").html(checkout_details.camp_type);
            $("#guests").html(checkout_details.guests);
            $("#days").html(checkout_details.days);
            $("#price_drop_tag").html(0);
            $("#coupon_tag").html("NONE");
            $("#cgst_tag").html(checkout_details.cgst);
            $("#sgst_tag").html(checkout_details.sgst);
            $("#igst_tag").html(checkout_details.igst);

            $("#booking_amt").html(checkout_details.amount);
            $("#price_drop_amt").html(0);
            $("#coupon_amt").html(0);
            $("#guide_charges_amt").html(0);
            $("#cgst_amt").html((checkout_details.amount * checkout_details.cgst / 100).toFixed(2));
            $("#sgst_amt").html((checkout_details.amount * checkout_details.sgst / 100).toFixed(2));
            $("#igst_amt").html((checkout_details.amount * checkout_details.igst / 100).toFixed(2));
            get_checkout_amount();

        });

        $('input[name=is_guide]').change(function () {
            if ($(this).is(':checked')) {
                $("#guide_charges_amt").html(checkout_details.guide_charges);
                $("#is_guide_tag").html("YES");

            } else {
                $("#guide_charges_amt").html(0);
                $("#is_guide_tag").html("NO");
            }
            get_checkout_amount();
        });

        function get_checkout_amount() {
            checkout_amount = checkout_details.amount * (checkout_details.cgst + checkout_details.sgst + checkout_details.igst) / 100;

            //+ before a variable changes a string to integer
            checkout_amount += +checkout_details.amount;

            checkout_amount = checkout_amount - parseFloat($("#price_drop_amt").text()) - parseFloat($("#coupon_amt").text()) + parseFloat($("#guide_charges_amt").text());
            checkout_amount = checkout_amount.toFixed(2);
            $("#chckout_amt").html(checkout_amount);
            $("#full_amount").html(checkout_amount);
            $("#partial_amount").html((checkout_amount*0.35).toFixed(2));
        }

        function create_UUID() {
            var dt = new Date().getTime();
            var uuid = 'xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
                var r = (dt + Math.random() * 16) % 16 | 0;
                dt = Math.floor(dt / 16);
                return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
            });
            localStorage.setItem('order_id', uuid);
            return uuid;
        }

        // function placeorder() {

            var checkout_from = $('#checkout_form');

            checkout_from.submit(function (e) {

                e.preventDefault();

                var auth_key = localStorage.getItem("auth_key");
                // if (auth_key != undefined) {
                $("#checkout_order_id").val(create_UUID());
                $("#checkout_camp_id").val(sessionStorage.getItem('camp_id'));
                $("#checkout_camp_code").val(checkout_details.camp_code);
                $("#checkout_purpose").val("new hotel booking");
                $("#checkout_from_date").val(sessionStorage.getItem("from_date"));
                $("#checkout_to_date").val(sessionStorage.getItem("to_date"));
                $("#checkout_no_of_bookings").val(sessionStorage.getItem("booking_required"));
                $("input[name='radio_checkout_amount']:checked").val() == "full" ? $("#checkout_booking_status").val("PENDING") : $("#checkout_booking_status").val("ADVANCE") ;
                $("input[name='radio_checkout_amount']:checked").val() == "full" ? $("#checkout_amount").val(parseFloat($("#chckout_amt").text())) : $("#checkout_amount").val((parseFloat($("#chckout_amt").text()))*0.35) ;
                // $("#checkout_name").val(localStorage.getItem("user_name"));
                // $("#checkout_mobile").val(localStorage.getItem("user_mobile"));
                // $("#checkout_email").val(localStorage.getItem("user_email"));
                $.ajax({
                    type: 'POST',
                    crossDomain: true,
                    url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/create_payment_request',
                    headers: {
                        "auth_key": auth_key
                    },
                    data: checkout_from.serialize(),
                    dataType: 'json',

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (response, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            document.getElementById("appId").value = response.result.appId;
                            document.getElementById("orderId").value = response.result.orderId;
                            document.getElementById("orderAmount").value = response.result.orderAmount;
                            document.getElementById("orderCurrency").value = response.result.orderCurrency;
                            document.getElementById("orderNote").value = response.result.orderNote;
                            document.getElementById("customerName").value = response.result.customerName;
                            document.getElementById("customerEmail").value = response.result.customerEmail;
                            document.getElementById("customerPhone").value = response.result.customerPhone;
                            document.getElementById("returnUrl").value = response.result.returnUrl;
                            document.getElementById("notifyUrl").value = response.result.notifyUrl;
                            document.getElementById("signature").value = response.result.signature;
                            document.getElementById("redirectForm").submit();

                        }
                        if(xhr.status == 400 || xhr.status == 202){
                            localStorage.removeItem('auth_key');
                            localStorage.removeItem('user_type');
                            localStorage.removeItem('user_name');
                            localStorage.removeItem('user_email');
                            localStorage.removeItem('mobile');
                            top.location.href = '../index.php';
                            alert("you have been logged out.Please login again !!");
                        }
                        // else {
                        //     alert('Invalid Session please login again !!');
                        //     $(".login-popup").addClass("open");
                        // }
                    },
                    error: function (error) {
                        $('.loader-outer').hide();
                        console.log('error');
                    }
                });
                // }
                // else {
                //     $(".login-popup").addClass("open");
                // }

            });

        // }

    </script>
    <script>
        $('.login_pass').keypress(function (e) {
            if (e.which == '13') {

                $(".btn_login").click();
            }
        });
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
