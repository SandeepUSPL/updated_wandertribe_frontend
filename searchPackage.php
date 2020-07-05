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

    <title>Search results</title>
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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

        // top.location.href = 'comingSoon.php';

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
                        from.datepicker("option", "maxDate", getDate(this));
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

    <style>
        .bg-antiquewhite {
            background: antiquewhite !important;
            background-color: antiquewhite !important;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            opacity: 1;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .status-UNVERIFIED {
            display: none;
        }

        .status-PENDING {
            display: none;
        }

    </style>


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
            <div class="nav-logo-wrap local-scroll"><a href="index.php" class="logo">
                    <img src="img/logo.png" data-at2x="img/logo@2x.png" alt></a>
            </div>
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
<div class="content-body">
    <div class="row">
        <!-- section prices-->
        <div id="prices" class="container mb-50 mt-40">
            <div class="search-hotels room-search pattern">
                <div class="search-room-title">
                    <h5>Choose your Package</h5>
                </div>
<!--                <div class="tours-container">-->
<!--                    <div class="tours-box">-->
<!--                        <div class="tours-search mb-20">-->
<!--                            <form class="form search divider-skew" id="formId">-->
<!--                                <div class="dropdown search-wrap text-center">-->
<!--                                    <select class="form-control search-field pl-55" name="destination"-->
<!--                                            id="search_destination" style="border: none; box-shadow: none;">-->
<!--                                        <option value="Pangot">Pangot</option>-->
<!--                                        <option value="Bir Billing">Bir Billing</option>-->
<!--                                        <option value="Kanatal">Kanatal</option>-->
<!--                                        <option value="Leh">Leh</option>-->
<!--                                        <option value="Kasol">Kasol</option>-->
<!--                                        <option value="Mcleodganj">Mcleodganj</option>-->
<!--                                        <option value="Naggar">Naggar</option>-->
<!--                                        <option value="Rishikesh">Rishikesh</option>-->
<!--                                        <option value="Jibhi">Jibhi</option>-->
<!--                                        <option value="Chail">Chail</option>-->
<!--                                        <option value="Tirthan Valley">Tirthan Valley</option>-->
<!--                                        <option value="Mukteshwar">Mukteshwar</option>-->
<!--                                        <option value="Shoghi">Shoghi</option>-->
<!--                                        <option value="Barot">Barot</option>-->
<!--                                        <option value="Naldehra">Naldehra</option>-->
<!--                                        <option value="Narkanda">Narkanda</option>-->
<!--                                        <option value="Shimla">Shimla</option>-->
<!--                                        <option value="Manali">Manali</option>-->
<!--                                        <option value="Dharamshala">Dharamshala</option>-->
<!--                                        <option value="Dehradun">Dehradun</option>-->
<!--                                    </select>-->
<!--                                    <i class="flaticon-suntour-map search-icon"></i>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                            <div class="tours-calendar divider-skew">-->
<!--                                <fieldset form="formId">-->
<!--                                    <input placeholder="Depart date" type="text" class="calendar-default textbox-n"-->
<!--                                           id="from_date">-->
<!--                                    <i class="flaticon-suntour-calendar calendar-icon"></i>-->
<!--                                </fieldset>-->
<!--                            </div>-->
<!--                            <div class="tours-calendar divider-skew">-->
<!--                                <fieldset form="formId">-->
<!--                                    <input placeholder="Return date" type="text" class="calendar-default textbox-n"-->
<!--                                           id="to_date">-->
<!--                                    <i class="flaticon-suntour-calendar calendar-icon"></i>-->
<!--                                </fieldset>-->
<!--                            </div>-->
<!---->
<!--                            <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>-->
<!--                                <fieldset form="formId">-->
<!--                                    <div class="select">-->
<!--                                        <input type="number" placeholder="Number of Person" id="no_of_person">-->
<!--                                    </div>-->
<!--                                </fieldset>-->
<!--                            </div>-->
<!--                            <div class="button-search" onclick="search_query()">Search</div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                    <!-- ! search tours form-->-->
<!--                </div>-->
            </div>
            <!--        </section>-->

            <!-- ! header page-->

            <div class="container page">
                <div class="row">
                    <!-- sidebar-->
                    <div class="col-md-4 sidebar">
                        <aside class="sb-left pb-50-imp">

                            <div class="cws-widget">
                                <div class="widget-categories">
                                    <h2 class="widget-title">PRICING</h2>
                                    <ul>
                                        <li class="cat-item cat-item-1" onclick="sort_by_price(1)"><a
                                                    href="javascript:void(0);">Low To High Price </a></li>
                                        <li class="cat-item cat-item-1" onclick="sort_by_price(-1)"><a
                                                    href="javascript:void(0);">High To Low Price</a></li>
                                    </ul>
                                </div>
                            </div>

<!--                            <div class="cws-widget">-->
<!--                                <div class="widget-categories">-->
<!--                                    <h2 class="widget-title">PROPERTY TYPE</h2>-->
<!--                                    <ul>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_cat('all')">All</a></li>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_cat('camps')">Camps</a></li>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_cat('cottage')">Cottage</a>-->
<!--                                        </li>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_cat('homestay')">Homestays</a>-->
<!--                                        </li>-->
<!---->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="cws-widget">-->
<!--                                <div class="widget-categories">-->
<!--                                    <h2 class="widget-title">PROPERTY ASSURANCE</h2>-->
<!--                                    <ul>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_status('all')">All</a></li>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_status('TRUSTED')">Trusted</a>-->
<!--                                        </li>-->
<!--                                        <li class="cat-item cat-item-1"><a href="javascript:void(0);"-->
<!--                                                                           onclick="sort_by_status('VERIFIED')">Verified</a>-->
<!--                                        </li>-->
<!---->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->

                            <!-- widget category-->
                            <!--                            <div class="cws-widget">-->
                            <!--                                <div class="widget-categories">-->
                            <!--                                    <h2 class="widget-title">Popular Groups</h2>-->
                            <!--                                    <ul>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Couple</a>[08]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Senior Citizen</a>[11]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Family</a>[14]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Female Special</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Youngsters</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Special Abled Peoples</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Day Off</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Tripvenza Lux</a>[09]</li>-->
                            <!--                                    </ul>-->
                            <!--                                    <h2 class="widget-title">Near by Locations</h2>-->
                            <!--                                    <ul>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Near Bus Stands</a>[03]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Near Railway Stations</a>[2]</li>-->
                            <!--                                    </ul>-->
                            <!--                                    <h2 class="widget-title">Deals And Discounts</h2>-->
                            <!--                                    <ul>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Deal 1</a>[14]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Deal 2</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Deal 3</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Deal 4</a>[09]</li>-->
                            <!--                                        <li class="cat-item cat-item-1"><a href="#">Deal 5</a>[09]</li>-->
                            <!--                                    </ul>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!-- ! widget category-->

                            <!-- filter price-->
                            <!--                            <div class="cws-widget">-->
                            <!--                                <div class="widget-price-slider">-->
                            <!--                                    <h2 class="widget-title">Filter By Price</h2>-->
                            <!--                                    <form method="get" action="#">-->
                            <!--                                        <div class="price_slider_wrapper">-->
                            <!--                                            <div aria-disabled="false"-->
                            <!--                                                 class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">-->
                            <!--                                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>-->
                            <!--                                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all">-->
                            <!--                                                    <div style="" class="price_label"><span class="from"></span></div>-->
                            <!--                                                </a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">-->
                            <!--                                                    <div style="" class="price_label"><span class="to"></span></div>-->
                            <!--                                                </a>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="price_slider_amount addon">-->
                            <!--                                                <input id="min_price" type="text" name="min_price" value="" data-min="0"-->
                            <!--                                                       placeholder="Min price" style="display: none;">-->
                            <!--                                                <input id="max_price" type="text" name="max_price" value=""-->
                            <!--                                                       data-max="100"-->
                            <!--                                                       placeholder="Max price" style="display: none;">-->
                            <!--                                                <div class="price_label"><span class="from"></span>- <span-->
                            <!--                                                            class="to"></span></div>-->
                            <!--                                                <a href="#" class="cws-button mini alt">Filter</a>-->
                            <!--                                                <input type="hidden" name="post_type" value="product">-->
                            <!--                                                <div class="clear"></div>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </form>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!-- ! filter price-->
                        </aside>
                    </div>
                    <!-- ! sidebar-->

                    <!--                main content-->
                    <div class="col-md-8 recom-item-wrapper" id="hotel_list_from_api">

                        <!--                        <div class="recom-item col-md-12">-->
                        <!--                            <div class="recom-item-img col-md-8">-->
                        <!--                                <img src="img/list1.jpg">-->
                        <!--                            </div>-->
                        <!---->
                        <!--                            <div class="recom-item-details col-md-4">-->
                        <!--                                <div class="font-color">Starts from</div>-->
                        <!--                                <div class="font-color camp-price">RS. 2000</div>-->
                        <!--                                <div class="camp-code font-color">TRIPVENZA 12110</div>-->
                        <!--                                <div class="camp-name">Camp Sharma ji</div>-->
                        <!--                                <div>The mall road Shimla</div>-->
                        <!--                                <div class="camp-ratings">-->
                        <!--                                    <img src="img/ratings/stars50.png">-->
                        <!--                                    <span>346</span> Ratings-->
                        <!--                                </div>-->
                        <!--                                <div class="camp-icons text-center">-->
                        <!--                                    <img class="camp-icon dome" src="img/dome.jpg" width="40px">-->
                        <!--                                    <img class="camp-icon alpine" src="img/alpine.jpg" width="40px">-->
                        <!--                                    <img class="camp-icon swiss" src="img/swiss.jpg" width="40px">-->
                        <!--                                    <img class="camp-icon cottage" src="img/cottage.jpg" width="40px">-->
                        <!--                                </div>-->
                        <!--                                <div class="camp-icon-names font-color text-center">-->
                        <!--                                    <span>Dome</span><span>Alpine</span><span>Swiss</span><span>Cottage</span>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                    </div>
                    <!--                main content-->

                </div>
            </div>
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
                                <div class="col-sm-5 col-md-4 col-xs-4 login_heading_container" onclick="show_login();">
                                    <h5
                                            class=" login_heading">LOGIN</h5></div>
                                <div class="col-sm-5 col-md-4 col-xs-4 signup_heading_container"
                                     onclick="show_signup();"><h5
                                            class=" signup_heading">SIGNUP</h5></div>
                                <div class="col-sm-2 col-md-4 col-xs-4 title-wrap" onclick="alwaysopenlogin()"
                                     style="padding: 0px !important;width:fit-content;padding-top: 7px;margin-left: 20px;margin-top: 4px;">
                                    <i class=" close-button flaticon-close" style="padding-top: 6px;"></i></div>
                            </div>
                            <div class="login_form">
                                <form>
                                    <div class="login_email_container">
                                        <input type="number" class="login_email" placeholder="Enter your Mobile"
                                               value="" autocomplete="off"
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
                                               placeholder="Phone" pattern="/^-?\d+\.?\d*$/"
                                               onKeyPress="if((this.value.length==10)) return false;" min="0"
                                               oninput="validity.valid||(value='');" autocomplete="off"
                                               id="billing_phone" name="mobile" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control signup_fillups"
                                               placeholder="Password"
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
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.</p>
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
                                <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a
                                            href="#" class="cws-social flaticon-social"></a><a href="#"
                                                                                               class="cws-social flaticon-social-3"></a><a
                                            href="#" class="cws-social flaticon-social-1"></a><a href="#"
                                                                                                 class="cws-social flaticon-social-network"></a>
                                </div>
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

            <!-- The Modal -->
            <div id="no_camp" class="modal">

                <!-- Modal content -->
                <div class="modal-content row">
                    <span class="close" onclick="close_modal(this)">&times;</span>
                    <div class="col-lg-12 text-center">
                        <img src="img/notfound.png">
                        <h3>No Property Found</h3>
                        <h6>Please Try Another Location</h6>
                    </div>
                </div>

            </div>


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
            <script type="text/javascript"
                    src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script type="text/javascript"
                    src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script type="text/javascript"
                    src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
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

            <!--            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qn71MFToKOPARXqmGQj60564ddiSFv0&libraries=places&callback=initAutocomplete"-->
            <!--                    async defer></script>-->

            <script>


                $(document).ready(function islogged() {
                    var auth_key = localStorage.getItem("auth_key");

                    $(".acc-status").each(function () {

                        if (auth_key != undefined) {
                            this.innerHTML = '<div class="dropdown">' +
                                '<a href="#" class="cws-button small  alt gray-dark mb-20 dropbtn"">My Account</a>' +
                                '<div class="dropdown-content" id="myDropdown">' +
                                '<a href="/user" class="top-wallet" >Dashboard</a> ' +
                                '<a href="#" class="top-wallet" onclick="logout()">Logout</a>' +
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


                var images_index = [];
                var images = [];
                var camps = [];
                var indx = 0;
                var full_camp_list = [];

                $(document).ready(function get_camplist() {

                    $('#from_date').datepicker();
                    $('#from_date').datepicker('setDate', <?php echo $_GET['from_date'];?>);

                    $('#to_date').datepicker();
                    $('#to_date').datepicker('setDate', <?php echo $_GET['to_date'];?>);

                    $("#no_of_person").val(<?php echo $_GET['booking_required'];?>);
                    $("#search_destination").val('<?php echo $_GET['destination_name'];?>');

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/package_query',
                        data: {
                            package_type: '<?php echo $_GET['package_type'];?>'
                        },
                        dataType: 'json',

                        beforeSend: function () {
                            $('.loader-outer').show();
                        },

                        success: function (data, textStatus, xhr) {
                            if (xhr.status == 200) {

                                console.log(data);
                                $('.loader-outer').hide();
                                if (data.result.length > 0) {
                                    full_camp_list = data.result;
                                    display_camp_list(full_camp_list);
                                } else {
                                    // alert("No camp found");
                                    $("#no_camp").show();
                                    setTimeout(function () {
                                        top.location.href = 'index.php';
                                    }, 5000)
                                }


                            } else {
                                $("#no_camp").show();
                                setTimeout(function () {
                                    top.location.href = 'index.php';
                                }, 5000)
                            }
                        },
                        error:

                            function (error) {
                                $('.loader-outer').hide();
                                console.log('error');
                            }
                    })
                    ;
                });


                function prev_slide(index) {
                    if (images_index[index] > 0) {
                        images_index[index]--;
                        images_index[index] = (images_index[index] % images[index].length);
                    } else {
                        images_index[index] = images[index].length;
                    }
                    var cid = '#camp_image' + index;
                    $(cid).attr("src", images[index][images_index[index]].imageUrl);

                }

                function next_slide(index) {

                    var cid = '#camp_image' + index;
                    images_index[index]++;
                    images_index[index] = (images_index[index] % images[index].length);
                    $(cid).attr("src", images[index][images_index[index]].imageUrl);
                }

                function search_query() {

                    if ($("#search_destination").val() == "" || $("#search_destination").val() == "undefined") {
                        $("#search_destination").focus();
                        $("#search_destination").addClass("bg-antiquewhite");
                        setTimeout(function () {
                            $("#search_destination").removeClass("bg-antiquewhite");
                        }, 2000);
                    } else {
                        if ($("#from_date").val() == "" || $("#from_date").val() == "undefined") {
                            $('#from_date').datepicker();
                            $('#from_date').datepicker('setDate', '0');
                        }
                        if ($("#to_date").val() == "" || $("#to_date").val() == "undefined") {
                            $('#to_date').datepicker();
                            $('#to_date').datepicker('setDate', '1');
                        }
                        if ($("#no_of_person").val() == "" || $("#no_of_person").val() == "undefined") {
                            $('#no_of_person').val(2);
                        }

                        sessionStorage.setItem("destination_name", document.getElementById('search_destination').value);
                        sessionStorage.setItem("from_date", document.getElementById('from_date').value);
                        sessionStorage.setItem("to_date", document.getElementById('to_date').value);
                        sessionStorage.setItem("booking_required", document.getElementById('no_of_person').value);

                        top.location.href = 'search.php?destination_name=' + document.getElementById('search_destination').value
                            +
                            '&from_date=' + document.getElementById("from_date").value
                            +
                            '&to_date=' + document.getElementById("to_date").value +
                            '&booking_required=' + document.getElementById("no_of_person").value +
                            '&type="NULL"';
                    }

                }

                // function initAutocomplete() {
                //     var autocomplete = new google.maps.places.Autocomplete(
                //         document.getElementById('search_destination'), {types: ['geocode']});
                //
                // }

                function camp_detail(property) {

                    var searchDetails = {
                        // "destination_name" : sessionStorage.getItem("destination_name"),
                        "from_date": sessionStorage.getItem("from_date"),
                        "to_date": sessionStorage.getItem("to_date"),
                        "booking_required": sessionStorage.getItem("booking_required")
                    }
// alert(JSON.stringify(camps[property]));

                    // if(localStorage.getItem("auth_key") != undefined){
                    // sessionStorage.setItem('campDetails', btoa(JSON.stringify(camps[property])));
                    top.location.href = "propertyDetail.php?fd=" + searchDetails.from_date + "&td=" + searchDetails.to_date + "&br=" + searchDetails.booking_required + "&cid=" + camps[property].camp.camp_id;
                    // }
                    // else{
                    //     $(".login-popup").addClass("open");
                    // }

                    // console.log(btoa(JSON.stringify(searchDetails)));
                    // console.log(searchDetails);
                }

            </script>

            <script>
                $('.login_pass').keypress(function (e) {
                    if (e.which == '13') {

                        $(".btn_login").click();
                    }
                });


                function display_camp_list(lst) {

                    if (lst.length > 0) {
                        $("#hotel_list_from_api").html("");
                        var hotel = "";
                        images_index = [];
                        images = [];
                        camps = [];
                        indx = 0;

                        $.each(lst, function (index, india) {

                            if (india.image.length == 0) {
                                return;
                            }

                            var temp_img = [];
                            $.each(india.image, function (index, value) {
                                if (value.imageType != "meal") {
                                    temp_img.push(value)
                                }
                            })

                            images.push(temp_img);
                            camps.push(india);
                            images_index.push(0);
                            var cmp = (window.btoa(india));
                            hotel += '<div class="recom-item col-md-12">\n' +
                                '                        <div class="recom-item-img col-md-8">\n' +
                                '                            <img id="camp_image' + index + '" src="' + india.image[0].imageUrl + '">\n' +
                                '                            <a class="prev-slide" onclick="prev_slide(' + index + ')">&#10094;</a>\n' +
                                '                            <a class="next-slide" onclick="next_slide(' + index + ')">&#10095;</a>\n' +
                                '                        </div>\n' +
                                '\n' +
                                '                        <div class="recom-item-details col-md-4" onclick="camp_detail(\'' + indx + '\')">\n' +
                                '<div class="col-md-6 recom-detail-header">\n' +
                                '                            <div class="font-color">Starts from</div>\n' +
                                '                            <div class="font-color camp-price">₹ ' + india.price_per_person + '</div>\n' +
                                '            </div>\n' +
                                // '            <div class="col-md-6 status-' + india.camp.verification_status + '">\n' +
                                // '                <img src="img/' + india.camp.verification_status + '.png" alt="property status">\n' +
                                // '            </div>' +
                                '                            <div class="col-md-12 camp-code font-color">' + india.package_name + '</div>\n' +
                                '                            <div class="col-md-12 camp-code font-color">' + india.property_name + '</div>\n' +
                                '                            <div class="col-md-12 camp-location">' + india.destination.destination_name + '</div>\n' +
                                // '                            <div class="camp-ratings">\n' +
                                // '                                <img src="img/ratings/stars' + india.camp.rating + '.png">\n' +
                                // '                                <span>' + india.camp.rating_count + '</span> Ratings\n' +
                                // '                            </div>\n' +
                                // '                            <div class="col-md-12 camp-icons text-center">\n' +
                                // '                                <img class="camp-icon dome" id="camp_icon_dome' + index + '" src="img/dome.jpg" width="30px">\n' +
                                // '                                <img class="camp-icon alpine" id="camp_icon_alpine' + index + '" src="img/alpine.jpg" width="30px">\n' +
                                // '                                <img class="camp-icon swiss" id="camp_icon_swiss' + index + '" src="img/swiss.jpg" width="30px">\n' +
                                // '                                <img class="camp-icon cottage" id="camp_icon_cottage' + index + '" src="img/cottage.jpg" width="30px">\n' +
                                // '                                <img class="camp-icon homestay" id="camp_icon_homestay' + index + '" src="img/cottage-tent.png" width="30px">\n' +
                                // '                                <img class="camp-icon resort" id="camp_icon_resort' + index + '" src="img/resort.png" width="30px">\n' +
                                // '                            </div>\n' +
                                // '                            <div class="col-md-12 camp-icon-names font-color text-center">\n' +
                                // '                                <span id="camp_name_dome' + index + '">Dome</span><span id="camp_name_alpine' + index + '">Alpine</span><span id="camp_name_swiss' + index + '">Swiss</span><span id="camp_name_cottage' + index + '">Cottage</span><span id="camp_name_homestay' + index + '">Homestay</span><span id="camp_name_resort' + index + '">Resort</span>\n' +
                                // '                            </div>\n' +
                                '    <div class="col-md-12 mb-0 pb-0 text-center">\n' +
                                '                    <button disabled class="cws-button small  alt mb-20 mb-0 bg-orangish"\n' +
                                '                            style="width: 90%;  border-radius: 10px" ;">Get Details\n' +
                                '                    </button>\n' +
                                '                </div>\n' +
                                '                        </div>\n' +
                                '                    </div>';

                            indx++;

                        });

                        $("#hotel_list_from_api").html(hotel);

                        for (i = 0; i < camps.length; i++) {
                            if (!camps[i].tent) {
                                $("#camp_icon_alpine" + i).hide();
                                $("#camp_name_alpine" + i).hide();
                            }
                            if (!camps[i].swiss) {
                                $("#camp_icon_swiss" + i).hide();
                                $("#camp_name_swiss" + i).hide();
                            }
                            if (!camps[i].dome) {
                                $("#camp_icon_dome" + i).hide();
                                $("#camp_name_dome" + i).hide();
                            }
                            if (!camps[i].cottage) {
                                $("#camp_icon_cottage" + i).hide();
                                $("#camp_name_cottage" + i).hide();
                            }
                            if (!camps[i].homestay) {
                                $("#camp_icon_homestay" + i).hide();
                                $("#camp_name_homestay" + i).hide();
                            }
                            if (!camps[i].resort) {
                                $("#camp_icon_resort" + i).hide();
                                $("#camp_name_resort" + i).hide();
                            }
                        }
                    } else {

                        var no_camp_message = '<div class="col-lg-12 text-center">\n' +
                            '                        <img src="img/notfound.png" style="width: 50%">\n' +
                            '                        <h3>No Property Found</h3>\n' +
                            '                    </div>'

                        $("#hotel_list_from_api").html(no_camp_message);
                    }
                }

                function sort_by_price(x) {
                    var new_list = [...full_camp_list];
                    new_list.sort((a, b) => (a.camp.price > b.camp.price) ? x : x * (-1));
                    display_camp_list(new_list);
                }

                function close_modal(ele) {
                    $(ele).closest(".modal").hide();
                    top.location.href = "index.php";
                }

                function sort_by_cat(x) {
                    var new_list = [];

                    $.each(full_camp_list, function (index, value) {
                        if (x == "all") {
                            new_list = [...full_camp_list];
                            return false;
                        } else if (x == "camps") {
                            if (value.tent != undefined || value.dome != undefined || value.swiss != undefined) {
                                new_list.push(value);
                            }
                        } else if (x == "cottage") {
                            if (value.cottage != undefined) {
                                new_list.push(value);
                            }
                        } else if (x == "homestay") {
                            if (value.homestay != undefined) {
                                new_list.push(value);
                            }
                        }
                    });

                    display_camp_list(new_list);
                }


                function sort_by_status(x) {
                    var new_list = [];

                    $.each(full_camp_list, function (index, value) {

                        if (x == "all") {
                            new_list = [...full_camp_list];
                            return false;
                        } else if (x == "TRUSTED") {
                            if (value.camp.verification_status == "TRUSTED") {
                                new_list.push(value);
                            }
                        } else if (x == "VERIFIED") {
                            if (value.camp.verification_status == "VERIFIED") {
                                new_list.push(value);
                            }
                        }

                    });

                    display_camp_list(new_list);
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
