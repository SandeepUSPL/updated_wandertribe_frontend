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

    <title>GREEN HOTEL</title>
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
    <link rel="stylesheet" href="css/footer_tripvenza.css">
    <link rel="stylesheet" href="css/loginpopup.css">


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
    <style>
        ol{
            list-style: disc !important;
            margin-left: 40px;
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
<!-- content-->
<div class="content-body">
    <div class="container page">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-item">
                    <h4 class="title-section mt-30"><span class="font-bold">GREEN HOTEL</span></h4>
                    <div class="cws_divider mb-25 mt-5"></div>

                    <div class="col-md-9 black">
                        <h6>WHAT IS A GREEN HOTEL?</h6>
                        <p>
                            A GREEN HOTEL, is an environmentally sustainable hotel that minimize its impact on the
                            natural environment.

                            A GREEN HOTEL follows the practices of Green living:
                        </p>
                        <ol>
                            <li>Non-toxic housekeeping practices</li>
                            <li>Use of renewable energy</li>
                            <li>Organic soaps</li>
                            <li>Energy-efficient light fixtures</li>
                            <li>Serving local organic food in restaurants</li>
                            <li>Reusing linens when a guest is staying for more than one night</li>
                            <li>Incorporating recycling and composting programs.</li>
                        </ol>
                        <p>
                            HOTELS THAT FOLLOW THESE BEST
                            PRACTICES CAN ATTRACT
                            ENVIRONMENTALLY CONSCIOUS
                            TRAVELERS AND STAND OUT FROM
                            OTHER HOTELS.

                        </p>
                        <h6>WHY IS IT IMPORTANT?</h6>
                        <ol>
                            <li>ZERO WASTE program will help you reduce the amount of waste you produce, saving materials, resources and energy.</li>

                            <li>You often pay twice for the waste you produce – firstly in the form of packaging and secondly to dispose of it.</li>


                            <li>On average, a hotel creates around .5kg of waste per guest per night. This soon mounts up if you multiply it by the number of guest nights each year, as does the cost to dispose of it.</li>


                            <li>Waste legislation on business and households is becoming increasingly stringent, especially in Delhi/NCR. This would increase your waste disposal costs.</li>


                            <li>Many items of waste have a value because they can be recycled into something else. You may be able to make money from your hotel’s waste.</li>

                            <li>Often at least 30 per cent of a hotel’s solid waste stream can be sorted for recovery and recycling.</li>

                        </ol>
                        <h6>ZERO WASTE OBJECTIVE</h6>
                        <ol>
                            <li>REDUCE The best way to improve waste management is to create as little waste as possible by not purchasing it to begin with.</li>


                            <li>RECOVER You need to set up systems to collect and sort the waste so that it can be reused or recycled.</li>
                            <li>REUSE Consideration will need to be given to where certain items can be reused, or whether they can be sold or donated to organizations outside the hotel that can reuse them.</li>
                            <li>RECYCLE Many hotels, restaurants and tourism establishments already have some system in place for sorting and collecting everyday waste items such as bottles, cans, cardboard and paper for reuse or recycling.</li>

                        </ol>
                        <h6>ALTERNATIVES!</h6>
                        <ol>
                            <li>Install a POS system. Take orders digitally rather than writing them down on paper to help reduce paper waste</li>
                            <li>Use cloth napkins instead of paper napkins. If you use paper napkins, ask customers to be careful with use</li>
                            <li>Get laminated menus for longer use</li>

                            <li>Get rid of Styrofoam, plastic straws, plastic bottles, disposables</li>
                            <li>Install flow restricts on faucets and low flush toilets to limit the amount of water used</li>
                            <li>Buying local foods is an easy way to go green.</li>
                            <li>Energy Efficient lights, appliances and ventilators</li>
                            <li>Donate leftovers to charity.</li>

                            <li>Waste management program – segregate your waste and recycle</li>

                        </ol>
                        <h6>SOURCE SEGREGATION</h6>
                        <p>
                            Source Segregation is the most

                            critical but simplest step in

                            efficient waste management.



                            Some of the benefits of source

                            segregation include:
                        </p>
                        <ol>
                            <li>Improving the recycling potential for different types of waste •Reducing pollution significantly •Reducing cost of processing waste</li>
                            <li>Enabling composting/ bio-mechanization which helps in enriching the soil</li>
                            <li>Giving a dignified livelihood to waste workers</li>

                        </ol>
                        <h6>WET WASTE</h6>
                        <ol>
                            <li>Vegetable and Fruit peels</li>

                            <li>Rotten Vegetable and fruits</li>

                            <li>leftover food</li>

                            <li>used tea and coffee bags</li>

                            <li>Mango seeds</li>

                            <li>Egg shells , Rotten egg</li>

                            <li>coconut shell, fiber, tender part</li>

                            <li>Used flower and leaves after pooja</li>

                            <li>Soiled spices</li>

                            <li>Meat and non-veg food remains</li>

                            <li>Bones</li>

                            <li>floor sweeping dust</li>

                            <li>Expired food items packets (like bread ,</li>

                            <li>biscuits , ready to food)</li>

                            <li>Finger or toe nails</li>

                            <li>Hair</li>

                            <li>pet food</li>

                            <li>Garden leaves , Weeds , Dried Flowers</li>

                            <li>Chewing Gum</li>

                        </ol>

                        <h6>DRY WASTE</h6>
                        <ol>

                            <li>Aluminium Foil, cling wraps used to pack Food Used Hair Bands, Hair Clips , Combs , Hair Brushes</li>

                            <li>Stapler Pins , broken pins</li>

                            <li>Take Away Food Packing like Pizza Boxes,</li>

                            <li>Chutney , Sambar Covers etc</li>

                            <li>Leather, Rexine, Rubber, furniture,</li>

                            <li>thermocole (expanded polystyrene)</li>

                            <li>Used bottles, tubes , cans of Shaving cream ,</li>

                            <li>Deodorant, creams , etc.</li>

                            <li>Small broken Toys</li>

                            <li>Thermocaol Balls from bean bags</li>

                            <li>Tissue paper</li>

                            <li>Old brooms</li>

                            <li>Pieces of Aluminium Foils used to cover Ghee , Jam etc.</li>

                            <li>Small Tubs like the ones used for jam , cheese , yogurt etc.</li>

                            <li>Tin Bottles , like Pepsi cans etc.</li>

                            <li>Broken house hold Plastic items</li>

                            <li>Tetra packs, all pet bottles, plastic bottles</li>

                            <li>All stationery items, bathroom items</li>

                        </ol>

                        <h6>ACTION PLAN</h6>
                        <ol>

                            <li>Avoid the use of plastic straws.</li>
                            <li>Use containers with lids in preference to plastic wrap, cling film or foil.</li>

                            <li>Use refillable containers for soap, cleaners and foodstuffs.</li>

                            <li>Substitute reusable glass bottles for plastic ones.</li>

                            <li>Use cloth or canvas bags or baskets for laundry, shoe polish, etc. instead of plastic bags.</li>

                            <li>Use mugs in preference to paper cups, and paper cups rather than polystyrene.</li>

                            <li>Maximize the use of computers/electronic mail to reduce paper use. Ask yourself if you really need to print out the document</li>

                            <li>Make and use your own compost, where feasible.</li>

                            <li>Worn towels, sheets and tablecloths can be re-used as cleaning cloths and dusters or turned into aprons.</li>



                            <li>Reuse computer and other paper as notepaper.</li>

                            <li>Donate used and surplus items to schools or charitable organisations instead of throwing them away, such as donating partially-used guest shampoo, conditioner and bath gel to homeless shelters and charities.</li>


                            <li>Reuse leftover pads and pencils from meeting rooms.</li>

                            <li>Use straw and shredded paper or other degradable material for packaging.</li>

                            <li>Use cloth napkins in preference to paper ones. If you do use paper ones, they can be composted after use unless they are badly soiled.</li>


                            <li>Avoid using waste disposal units that grind kitchen waste before putting it down the drain. They require a lot of water to work effectively and increase the burden on waste water treatment. They can also cause odours and attract rodents.</li>

                        </ol>
                    </div>
                    
                    <div class="col-md-3">
                        <figcaption class="text-center"><h6>REPLACE</h6></figcaption>
                        <img src="img/go-green.png" alt="">
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
                    <div class="col-sm-5 col-md-4 col-xs-4 signup_heading_container" onclick="show_signup();"><h5
                                class=" signup_heading">SIGNUP</h5></div>
                    <div class="col-sm-2 col-md-4 col-xs-4 title-wrap" onclick="alwaysopenlogin()"
                         style="padding: 0px !important;width:fit-content;padding-top: 7px;margin-left: 20px;margin-top: 4px;">
                        <i class=" close-button flaticon-close" style="padding-top: 6px;"></i></div>
                </div>
                <div class="login_form">
                    <form>
                        <div class="login_email_container">
                            <input type="number" class="login_email" placeholder="Enter your Mobile" value=""
                                   autocomplete="off"
                                   id="user_mobile" pattern="/^-?\d+\.?\d*$/"
                                   onKeyPress="if((this.value.length==10)) return false;" min="0"
                                   oninput="validity.valid||(value='');" required/>
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
                                <!--                                <div class="col-md-6 col-sm-6 col-xs-6 checkbox-container">-->
                                <!--                                    <input type="checkbox"><a href="#">Remember me<br>-->
                                <!--                                </div>-->
                                <div class="col-md-6 col-sm-6 col-xs-6 Forgot_Password_Container">
                                    <a href="#" class="ForgetPwd" onclick="forgot_password()">Forget Password?</a>
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
                    <form name="checkout" method="post" action="<?php echo $_SERVER['API_ENDPOINTS']; ?>/api/register"
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
                            <input type="number" class="form-control signup_fillups" maxlength="10" placeholder="Phone"
                                   pattern="/^-?\d+\.?\d*$/" onKeyPress="if((this.value.length==10)) return false;"
                                   min="0" oninput="validity.valid||(value='');" autocomplete="off"
                                   id="billing_phone" name="mobile" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control signup_fillups" placeholder="Password"
                                   id="billing_password" name="password" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control signup_fillups" placeholder="Confirm Password"
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
            <div class="title-wrap" style="padding-top: 5px;width:100%;height: 30px;" onclick="alwaysopenlogin()"><i
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
<script type="text/javascript" src="tuner/js/colorpicker.js"></script>
<script type="text/javascript" src="tuner/js/scripts.js"></script>
<script type="text/javascript" src="js/retina.min.js"></script>

<script>
    //login auth key
    $(document).ready(function islogged() {
        var auth_key = localStorage.getItem("auth_key");

        $(".acc-status").each(function () {

            if (auth_key != undefined) {
                this.innerHTML = '<div class="dropdown">' +
                    '<a href="#" class="cws-button small alt gray-dark mb-20 dropbtn"">My Account</a>' +
                    '<div class="dropdown-content" id="myDropdown">' +
                    '<a href="/user" class="top-wallet" >Dashboard</a> ' +
                    '<a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
                    '</div>  </div>';
                $(".top-login").off('click');
            } else {
                this.innerHTML = '<a href="#" class="cws-button small alt gray-dark mb-20">LogIn/SignUp</a>';
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
                    sessionStorage.setItem("mobile", data.result.mobile);
                    sessionStorage.setItem("user_email", data.result.email);
                    sessionStorage.setItem("user_name", data.result.name);
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


</script>

<script>
    $('.login_pass').keypress(function (e) {
        if (e.which == '13') {

            $(".btn_login").click();
        }
    });
</script><!--Start of Tawk.to Script-->
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
