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

    <title>Property Detail</title>
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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        !function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>
    <script>

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
    <style>
        .amenities div {
            display: none;
        }

        .adults, .children {
            width: 30px !important;
            padding: 0 !important;
            text-align: center;
        }

        .add-button, .delete-button {
            display: inline-block;
            font-weight: bolder;
            cursor: pointer;
            width: 30px;
            border: 1px solid transparent;
            height: 30px;
            border-radius: 50%;
            background: lightgray;
            color: black;
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
<div class="content-body">
    <div class="container page">
        <div class="row property-details">
            <!-- content-->
            <div class="col-md-8 property-detail-content">
                <div class="col-md-12 slideshow-container">
                    <div class="mySlides fader">
                        <img id="property_detail_slide" src="img/list1.jpg">
                    </div>

                    <a class="prev" onclick="change_slide(-1)">&#10094;</a>
                    <a class="next" onclick="change_slide(1)">&#10095;</a>
                </div>
                <div class="row property-detail-header">
                    <div class="col-md-8 property-detail-header-main">
                        <h1 class="font-color mt-0" id="camp_id">WANDERTRIBE 12110</h1>
                        <p class="font-color">Exact address of the camp will be shared after booking</p>
                        <!--                        <img src="img/ratings/stars15.png" width="30%" id="camp_rating">-->
                    </div>
                    <div class="col-md-4 property-detail-header-side">
                        <h5 class="font-color text-right"><img src="img/location.png" width="32px"><span
                                    id="camp_destination">Tattapani, Shimla</span></h5>
                        <p class="text-right font-color"><a href="#camp_rules">&#8594; Read Hotels Rules</a></p>
                    </div>
                </div>
                <div class="row property-detail-body">
                    <hr style="border: 0.5px solid grey;" class="mb-0">
                    <div class="col-md-6 property-detail-body-left">
                        <div class="row amenities">
                            <h5>Amenities</h5>
                            <div class="col-md-6" id="swimming_pool">
                                <p><img src="img/amenities/swim.png" width="32px"><span>Swimming Pool</span></p>
                            </div>
                            <div class="col-md-6" id="mobile_network">
                                <p><img src="img/amenities/network.png" width="32px"><span>Mobile Network</span></p>
                            </div>
                            <div class="col-md-6" id="wifi">
                                <p><img src="img/amenities/wifi.png" width="32px"><span>WIFI</span></p>
                            </div>
                            <div class="col-md-6" id="cctv">
                                <p><img src="img/amenities/cctv.png" width="32px"><span>CCTV</span></p>
                            </div>
                            <div class="col-md-6" id="veg_food">
                                <p><img src="img/amenities/veg.png" width="32px"><span>Veg</span></p>
                            </div>
                            <div class="col-md-6" id="non_veg_food">
                                <p><img src="img/amenities/non-veg.png" width="32px"><span>Non-Veg</span></p>
                            </div>
                            <div class="col-md-6" id="bonfire">
                                <p><img src="img/amenities/fire.png" width="32px"><span>Bon-fire</span></p>
                            </div>
                            <div class="col-md-6" id="ac">
                                <p><img src="img/amenities/ac.png" width="32px"><span>AC</span></p>
                            </div>
                            <div class="col-md-6" id="cooler">
                                <p><img src="img/amenities/cooler.png" width="32px"><span>Cooler</span></p>
                            </div>
                            <div class="col-md-6" id="fan">
                                <p><img src="img/amenities/fan.png" width="32px"><span>Fan</span></p>
                            </div>
                            <div class="col-md-6" id="fridge">
                                <p><img src="img/amenities/fridge.png" width="32px"><span>Fridge</span></p>
                            </div>
                            <div class="col-md-6" id="heater">
                                <p><img src="img/amenities/heater.png" width="32px"><span>Heater</span></p>
                            </div>
                            <div class="col-md-6" id="hot_water">
                                <p><img src="img/amenities/hot-water.png" width="32px"><span>Hot-water</span></p>
                            </div>

                            <div class="col-md-6" id="power_supply">
                                <p><img src="img/amenities/power.png" width="32px"><span>Power</span></p>
                            </div>
                            <div class="col-md-6" id="wheelchair">
                                <p><img src="img/amenities/wheelchair.png" width="32px"><span>Wheelchair</span></p>
                            </div>
                            <div class="col-md-6" id="pet_friendly">
                                <p><img src="img/amenities/pet.png" width="32px"><span>Pet friendly</span></p>
                            </div>
                            <div class="col-md-6" id="parking">
                                <p><img src="img/amenities/parking.png" width="32px"><span>Parking</span></p>
                            </div>
                            <div class="col-md-6" id="washroom">
                                <p><img src="img/amenities/washroom.png" width="32px"><span>Washroom</span></p>
                            </div>
                            <div class="col-md-6" id="indian">
                                <p><img src="img/amenities/indian-toilet.png" width="32px"><span>Indian-Toilet</span>
                                </p>
                            </div>
                            <div class="col-md-6" id="western">
                                <p><img src="img/amenities/western-toilet.png" width="32px"><span>Western-Toilet</span>
                                </p>
                            </div>
                            <div class="col-md-6" id="pit">
                                <p><img src="img/amenities/pit-type.png" width="32px"><span>Pit-type</span></p>
                            </div>

                        </div>


                        <!--                        <div class="row weather">-->
                        <!--                            <h5>Weather Forecast</h5>-->
                        <!--                            <a class="weatherwidget-io" href="https://forecast7.com/en/20d5978d96/india/"-->
                        <!--                               data-mode="Forecast" data-textcolor="#f15d22" style="pointer-events:none">New York</a>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-md-6 property-detail-body-right">

                        <div class="row camp-rules" id="camp_rules">
                            <h5>Camp Rules</h5>
                            <ul>
                                <li>Check in after 12:00PM</li>
                                <li>Check out before 11:00AM</li>
                                <li>WanderTribe welcomes guests of all nationalities</li>
                            </ul>
                        </div>

                        <!--                        <div class="row">-->
                        <!--                            <h5>Distance Calculator</h5>-->
                        <!--                            <p class="bg-gray-3 bd-rd-10 shadow-box shadow-box distance-calculator-input ">-->
                        <!--                                <img src="img/location.png" width="16px">-->
                        <!--                                <input type="text" placeholder="Search near by places from Camp">-->
                        <!--                            </p>-->
                        <!--                        </div>-->


                    </div>
                    <!--                    <hr style="border: 0.5px solid grey;">-->
                </div>

            </div>
            <!-- sidebar-->
            <div class="col-md-4 property-detail-sidebar">
                <div class="bg-gray-3 bd-rd-10 shadow-box">
                    <div class="camp-icons text-center">
                        <img id="camp_icon_dome" class="camp-icon dome fill-grayscale" src="img/dome.jpg">
                        <img id="camp_icon_alpine" class="camp-icon alpine" src="img/alpine.jpg">
                        <img id="camp_icon_swiss" class="camp-icon swiss fill-grayscale" src="img/swiss.jpg">
                        <img id="camp_icon_cottage" class="camp-icon cottage fill-grayscale" src="img/cottage.jpg">
                        <img id="camp_icon_homestay" class="camp-icon homestay fill-grayscale"
                             src="img/cottage-tent.png">
                        <img id="camp_icon_resort" class="camp-icon resort fill-grayscale" src="img/resort.png">
                    </div>
                    <div class="camp-icon-names font-color text-center">
                        <span id="camp_name_dome">Dome</span>
                        <span id="camp_name_alpine">Alpine</span>
                        <span id="camp_name_swiss">Swiss</span>
                        <span id="camp_name_cottage">Cottage</span>
                        <span id="camp_name_homestay">Homestay</span>
                        <span id="camp_name_resort">Resort</span>
                    </div>
                </div>


                <div class="row bg-gray-3 bd-rd-10 text-center">
                    <div class="">
                        <select class="form-control" name="category" id="details_category"
                                style="background-size: auto; background-color: transparent; box-shadow: none;">
                            <option value="None" id="category_none" class="category" style="display: none">Standard
                                Property
                            </option>
                            <option class="category" id="category_delux" value="Deluxe" style="display: none">Deluxe
                            </option>
                            <option class="category" id="category_super_delux" value="Super Deluxe"
                                    style="display: none">Super Deluxe
                            </option>
                            <option class="category" id="category_luxury" value="Luxury" style="display: none">Luxury
                            </option>
                            <option class="category" id="category_suit" value="Suite" style="display: none">Suite
                            </option>
                            <option class="category" id="category_family_suit" value="Family Suite"
                                    style="display: none">Family Suite
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row flex-box">
                    <div class="col-md-5">
                        <div>CHECK-IN</div>
                        <p class=" bg-gray-3 bd-rd-10 shadow-box">
                            <input placeholder="01/22/2019" type="text" id="from_date"
                                   style="font-size: 15px; padding-right: 0px">
                        </p>

                    </div>
                    <div class="col-md-5">
                        <div>CHECK-OUT</div>
                        <p class=" bg-gray-3 bd-rd-10 shadow-box">
                            <input placeholder="01/29/2019" type="text" id="to_date"
                                   style="font-size: 15px; padding-right: 0px">
                        </p>

                    </div>
                    <div class="col-md-2">
                        <div>ROOM</div>
                        <p class="bg-gray-3 bd-rd-10 shadow-box text-center" id="no_of_person" onclick="edit_options()">
                            1
                        </p>

                    </div>
                </div>

                <div class="row bg-gray-3 bd-rd-10 shadow-box">
                    <div class="col-md-9 billing-summary">
                        <p class="black"><span class="persons">1</span>Person, <span class="rooms">2</span><span
                                    class="camp-type">Alpine</span></p>
                        <!--                        <p>₹ <span>3456</span> Total</p>-->
                    </div>
                    <div class="col-md-2 font-color" id="edit" style="cursor: pointer;" onclick="edit_options()">
                        Edit
                    </div>
                    <div class="col-md-12 edit-details" id="edit_details"
                         style="display: none; max-height: 200px; overflow-y: scroll">
                        <div class="flex-box text-center">
                            <div>Room 1</div>
                            <div>
                                <div>
                                    Adults (max <span class="adult_occupancy"></span> )
                                </div>
                                <div>

                                    <span class="delete-button" onclick="delete_adult(this)">-</span> <input
                                            class="adults" onchange="get_pricing()" type="number" value="1"
                                            oninput="validity.valid||(value='');" readonly> <span class="add-button"
                                                                                                  onclick="add_adult(this)">+</span>

                                </div>
                            </div>
                            <div>
                                <div>
                                    Children (max 2)
                                </div>
                                <div>

                                    <span class="delete-button" onclick="delete_child(this)">-</span> <input
                                            class="children" onchange="get_pricing()" type="number" value="0"
                                            oninput="validity.valid||(value='');" readonly> <span class="add-button"
                                                                                                  onclick="add_child(this)">+</span>

                                </div>
                            </div>

                        </div>
                        <div class="text-center edit-detail-room" id="edit_room">

                        </div>
                    </div>
                    <div class="text-center edit-buttons" style="display: none;">
                        <button class="cws-button small  alt mb-20 mb-0 bg-orangish"
                                style="width: 40%;  border-radius: 10px" onclick="add_room();">Add
                        </button>
                        <button class="cws-button small  alt mb-20 mb-0 bg-orangish"
                                style="width: 40%;  border-radius: 10px" onclick="remove_room();">Remove
                        </button>
                    </div>
                </div>

                <div class="bg-gray-3 bd-rd-10 shadow-box billing-summary">
                    <div class=" black flex-box">
                        <div style="width: 25%">Price for:</div>
                        <div style="width: 75%"><span class="persons">1</span>Person, <span class="rooms">2</span><span
                                    class="camp-type">Alpine</span>,
                            <span class="days">2</span>Nights
                        </div>
                    </div>
                    <h4>₹ <span id="total_price">0</span> Total</h4>
                    <p>(Inclusive of all taxes)</p>

                    <input type="text" name="coupon_code" id="coupon_code"
                           style="border: 1px solid #000 !important; width: 40%; border-radius: 10px">
                    <button class="cws-button small  alt mb-20 mb-0 bg-orangish"
                            style="border-radius: 10px" onclick="get_pricing();">Apply
                    </button>
                    <p id="coupon_message" class="">(Do you have a coupon code?)</p>

                </div>
                <div class="mb-0 pb-0 text-center">
                    <button class="cws-button small  alt mb-20 mb-0 bg-orangish"
                            style="width: 90%;  border-radius: 10px" onclick="book_camp();">&rarr;CONTINUE TO BOOK
                    </button>
                </div>
                <!--                <div class="bg-gray-3 bd-rd-10 shadow-box mt-0 pt-0">-->
                <!--                    <p>KEEP IN MIND</p>-->
                <!--                    <p CLASS="font-color">+Cancellation Policy</p>-->
                <!--                    <hr>-->
                <!--                    <ul>-->
                <!--                        <li>We have a client-friendly cancellation/refund policy in place in case there are any last minute changes in your plan after booking.</li>-->
                <!--                        <li>If you choose to cancel your booking 15 days prior to the set date, then we offer to refund the whole booking amount without any deductions.</li>-->
                <!--                        <li>In case the cancellation is done less than 15 days before the dates booked then also we will refund. Though this will be 50% of the total amount.</li>-->
                <!--                        <li>However, all the cancellations made less than a week before the booked trip will not fetch any refund.</li>-->
                <!--                    </ul>-->
                <!--                </div>-->
                <div class="font-color text-center"><a href="terms.php">Terms and Conditions*</a></div>

                <!--                <div class="row">-->
                <!--                    <h5>Reviews</h5>-->
                <!--                    <div class="col-md-12 review-bubble">-->
                <!--                        <div class="talk-bubble tri-right right-in">-->
                <!--                            <div class="col-md-3 profile-pic">-->
                <!--                                <img src="img/profile-photo.jpg" width="80%"-->
                <!--                                     style="border: #f15d22 solid 2px; border-radius: 50%;">-->
                <!--                            </div>-->
                <!--                            <div class="col-md-9">-->
                <!--                                <img src="img/ratings/stars40.png" width="50%">-->
                <!--                                <div class="talktext">-->
                <!--                                    <p>Moving our way back up the right side indented. Uses .round and .right-in</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!---->
                <!--                    <div class="col-md-12 review-bubble">-->
                <!--                        <div class="talk-bubble tri-right right-in">-->
                <!--                            <div class="col-md-3 profile-pic">-->
                <!--                                <img src="img/profile-photo.jpg" width="80%"-->
                <!--                                     style="border: #f15d22 solid 2px; border-radius: 50%;">-->
                <!--                            </div>-->
                <!--                            <div class="col-md-9">-->
                <!--                                <img src="img/ratings/stars50.png" width="50%">-->
                <!--                                <div class="talktext">-->
                <!--                                    <p>Moving our way back up the right side indented. Uses .round and .right-in</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!---->
                <!--                </div>-->

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

            <form id="redirectForm" method="post" action="https://test.cashfree.com/billpay/checkout/post/submit">
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
        <script type="text/javascript" src="tuner/js/colorpicker.js"></script>
        <script type="text/javascript" src="tuner/js/scripts.js"></script>
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

        </script>

        <script>
            var current_slide = 0;
            var slides = [];

            function change_slide(x) {
                current_slide += x;
                if (current_slide < 0) {
                    current_slide = slides.length;
                }
                if (current_slide > slides.length) {
                    current_slide = 0;
                }

                $("#property_detail_slide").attr("src", slides[current_slide]);

            }

        </script>

        <script>
            var total_rooms = 1;

            function add_room() {
                total_rooms++;
                var room = '<div class="flex-box text-center">\n' +
                    '                            <div>Room ' + total_rooms + '</div>\n' +
                    '                            <div>\n' +
                    '                                <div>\n' +
                    '                                    Adults (max <span class="adult_occupancy"></span> )\n' +
                    '                                </div>\n' +
                    '                                <div>\n' +
                    '\n' +
                    '                                    <span class="delete-button" onclick="delete_adult(this)">-</span> <input class="adults" onchange="get_pricing()" type="number" value="1" oninput="validity.valid||(value=\'\');" readonly> <span class="add-button" onclick="add_adult(this)">+</span>\n' +
                    '                                    \n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '                            <div>\n' +
                    '                                <div>\n' +
                    '                                    Children (max 2)\n' +
                    '                                </div>\n' +
                    '                                <div>\n' +
                    '\n' +
                    '                                    <span class="delete-button" onclick="delete_child(this)">-</span> <input class="children" onchange="get_pricing()" type="number" value="0" oninput="validity.valid||(value=\'\');" readonly> <span class="add-button" onclick="add_child(this)">+</span>\n' +
                    '\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>';
                $("#edit_room").append(room);
                $("#no_of_person").html(total_rooms);
                get_pricing();
            }

            function remove_room() {
                if (total_rooms > 1) {
                    total_rooms--;
                    $("#edit_room").children().last().remove();
                }
                $("#no_of_person").html(total_rooms);
                get_pricing();
            }


            function add_adult(ele) {
                if ($(ele).siblings(".adults").val() < max_occupancy) {
                    $(ele).siblings(".adults").val(1 + parseInt($(ele).siblings(".adults").val()));
                    $(ele).siblings(".adults").trigger("change");
                }
            }

            function delete_adult(ele) {
                if ($(ele).siblings(".adults").val() > 1) {
                    $(ele).siblings(".adults").val(parseInt($(ele).siblings(".adults").val()) - 1);
                    $(ele).siblings(".adults").trigger("change");
                }
            }

            function add_child(ele) {
                if ($(ele).siblings(".children").val() < 2) {
                    $(ele).siblings(".children").val(1 + parseInt($(ele).siblings(".children").val()));
                    $(ele).siblings(".children").trigger("change");
                }
            }

            function delete_child(ele) {
                if ($(ele).siblings(".children").val() > 0) {
                    $(ele).siblings(".children").val(parseInt($(ele).siblings(".children").val()) - 1);
                    $(ele).siblings(".children").trigger("change");
                }
            }

            function edit_options() {
                ele = $("#edit");
                $(".edit-buttons").toggle();
                $("#edit_details").toggle();
                if (ele.html() === "Close") {
                    ele.html("Edit");
                } else {
                    ele.html("Close");
                }
            }

            var campDetails = {};
            var max_occupancy = 0;

            //var searchDetails = JSON.parse(atob(('<?php //echo $_GET['srchdtls']; ?>//')));

            // sessionStorage.setItem("destination_name", searchDetails.destination_name);
            sessionStorage.setItem("from_date", '<?php echo $_GET['fd'] ?>');
            sessionStorage.setItem("to_date", '<?php echo $_GET['td'] ?>');
            sessionStorage.setItem("booking_required", <?php echo $_GET['br'] ?>);

            $(document).ready(function () {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/get_camp_details',
                    data: {

                        camp_id: "<?php echo $_GET['cid'];?>"
                    },
                    dataType: 'json',

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            campDetails.camp = data.result;
                            campDetails.dome = data.result.dome;
                            campDetails.tent = data.result.tent;
                            campDetails.swiss = data.result.swiss;
                            campDetails.cottage = data.result.cottage;
                            campDetails.homestay = data.result.homestay;
                            campDetails.resort = data.result.resort;
                            console.log(campDetails);
                            set_camp_details();
                        }
                    },
                    error: function (error) {
                        $('.loader-outer').hide();
                        console.log('error');
                    }
                });

            });


            function set_camp_details() {
                sessionStorage.setItem("camp_id", campDetails.camp.camp_id);

                campDetails.camp.image.forEach(function (entry) {
                    if (entry.image_type != "meal") {
                        slides.push(entry.image_url);
                    }
                });
                $("#property_detail_slide").attr("src", slides[0]);

                //updating  details which are property specific
                var has_dome = true;
                var has_tent = true;
                var has_swiss = true;
                var has_cottage = true;
                var has_homestay = true;
                var has_resort = true;

                if (campDetails.swiss.length == 0) {
                    has_swiss = false;
                    $("#camp_icon_swiss").hide();
                    $("#camp_name_swiss").hide();
                }

                if (campDetails.tent.length == 0) {
                    has_tent = false;
                    $("#camp_icon_alpine").hide();
                    $("#camp_name_alpine").hide();
                }

                if (campDetails.dome.length == 0) {
                    has_dome = false;
                    $("#camp_icon_dome").hide();
                    $("#camp_name_dome").hide();
                }

                if (campDetails.cottage.length == 0) {
                    has_cottage = false;
                    $("#camp_icon_cottage").hide();
                    $("#camp_name_cottage").hide();
                }

                if (campDetails.homestay.length == 0) {
                    has_homestay = false;
                    $("#camp_icon_homestay").hide();
                    $("#camp_name_homestay").hide();
                }

                if (campDetails.resort.length == 0) {
                    has_resort = false;
                    $("#camp_icon_resort").hide();
                    $("#camp_name_resort").hide();
                }


                $("#camp_id").html(campDetails.camp.camp_name);
                $("#camp_destination").html(campDetails.camp.destination.destination_name);
                // $("#camp_rating").attr("src", "img/ratings/stars" + campDetails.camp.rating + ".png");

                if (campDetails.camp.camp_info.swimming_pool == 'Y') {
                    $("#swimming_pool").show();
                }
                if (campDetails.camp.camp_info.mobile_network == 'Y') {
                    $("#mobile_network").show();
                }
                if (campDetails.camp.camp_info.wifi == 'Y') {
                    $("#wifi").show();
                }
                if (campDetails.camp.camp_info.cctv == 'Y') {
                    $("#cctv").show();
                }
                if (campDetails.camp.camp_info.veg_food == 'Y') {
                    $("#veg_food").show();
                }
                if (campDetails.camp.camp_info.non_veg_food == 'Y') {
                    $("#non_veg_food").show();
                }
                if (campDetails.camp.camp_info.bonfire == 'Y') {
                    $("#bonfire").show();
                }

                //updating  details which are property specific

                $('#from_date').datepicker();
                $('#from_date').datepicker('setDate', sessionStorage.getItem("from_date"));

                $('#to_date').datepicker();
                $('#to_date').datepicker('setDate', sessionStorage.getItem("to_date"));


                function get_dome() {
                    sessionStorage.setItem("camp_type", "dome");
                    $(".camp-type").each(function () {
                        $(this).html("Dome");
                    });

                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.dome.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.dome[0]["category"]);
                    max_occupancy = campDetails.dome[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.dome.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.dome.washroom_type != null) {
                        $("#" + campDetails.dome.washroom_type).show();
                    }
                    if (campDetails.dome.power_supply != null) {
                        $("#power_supply").show();
                    }

                    $("#camp_icon_dome").removeClass("fill-grayscale");
                    $("#camp_icon_alpine").addClass("fill-grayscale");
                    $("#camp_icon_swiss").addClass("fill-grayscale");
                    $("#camp_icon_cottage").addClass("fill-grayscale");
                    $("#camp_icon_homestay").addClass("fill-grayscale");
                    $("#camp_icon_resort").addClass("fill-grayscale");
                    get_pricing();

                }

                function get_tent() {
                    sessionStorage.setItem("camp_type", "tent");
                    $(".camp-type").each(function () {
                        $(this).html("Alpine");
                    });

                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.tent.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.tent[0]["category"]);
                    max_occupancy = campDetails.tent[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.tent.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.tent.washroom_type != null) {
                        $("#" + campDetails.tent.washroom_type).show();
                    }
                    if (campDetails.tent.power_supply != null) {
                        $("#power_supply").show();
                    }

                    $("#camp_icon_alpine").removeClass("fill-grayscale");
                    $("#camp_icon_dome").addClass("fill-grayscale");
                    $("#camp_icon_swiss").addClass("fill-grayscale");
                    $("#camp_icon_cottage").addClass("fill-grayscale");
                    $("#camp_icon_homestay").addClass("fill-grayscale");
                    $("#camp_icon_resort").addClass("fill-grayscale");
                    get_pricing();
                }

                function get_swiss() {
                    sessionStorage.setItem("camp_type", "swiss");
                    $(".camp-type").each(function () {
                        $(this).html("Swiss");
                    });

                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.swiss.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.swiss[0]["category"]);
                    max_occupancy = campDetails.swiss[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.swiss.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.swiss.washroom_type != null) {
                        $("#" + campDetails.swiss.washroom_type).show();
                    }
                    if (campDetails.swiss.power_supply != null) {
                        $("#power_supply").show();
                    }

                    $("#camp_icon_swiss").removeClass("fill-grayscale");
                    $("#camp_icon_dome").addClass("fill-grayscale");
                    $("#camp_icon_alpine").addClass("fill-grayscale");
                    $("#camp_icon_cottage").addClass("fill-grayscale");
                    $("#camp_icon_homestay").addClass("fill-grayscale");
                    $("#camp_icon_resort").addClass("fill-grayscale");
                    get_pricing();
                }

                function get_cottage() {

                    sessionStorage.setItem("camp_type", "cottage");
                    $(".camp-type").each(function () {
                        $(this).html("Cottage");
                    });

                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.cottage.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.cottage[0]["category"]);
                    max_occupancy = campDetails.cottage[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.cottage.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.cottage.washroom_type != null) {
                        $("#" + campDetails.cottage.washroom_type).show();
                    }
                    if (campDetails.cottage.power_supply != null) {
                        $("#power_supply").show();
                    }
                    $("#camp_icon_cottage").removeClass("fill-grayscale");
                    $("#camp_icon_dome").addClass("fill-grayscale");
                    $("#camp_icon_swiss").addClass("fill-grayscale");
                    $("#camp_icon_alpine").addClass("fill-grayscale");
                    $("#camp_icon_homestay").addClass("fill-grayscale");
                    $("#camp_icon_resort").addClass("fill-grayscale");
                    get_pricing();
                }

                function get_homestay() {

                    sessionStorage.setItem("camp_type", "homestay");
                    $(".camp-type").each(function () {
                        $(this).html("Homestay");
                    });


                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.homestay.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.homestay[0]["category"]);
                    max_occupancy = campDetails.homestay[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.homestay.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.homestay.washroom_type != null) {
                        $("#" + campDetails.homestay.washroom_type).show();
                    }
                    if (campDetails.homestay.power_supply != null) {
                        $("#power_supply").show();
                    }
                    $("#camp_icon_homestay").removeClass("fill-grayscale");
                    $("#camp_icon_cottage").addClass("fill-grayscale");
                    $("#camp_icon_dome").addClass("fill-grayscale");
                    $("#camp_icon_swiss").addClass("fill-grayscale");
                    $("#camp_icon_alpine").addClass("fill-grayscale");
                    $("#camp_icon_resort").addClass("fill-grayscale");
                    get_pricing();
                }

                function get_resort() {

                    sessionStorage.setItem("camp_type", "resort");
                    $(".camp-type").each(function () {
                        $(this).html("Resort");
                    });

                    $(".category").each(function () {
                        $(this).hide();
                    });

                    campDetails.resort.forEach(function (value, index) {
                        $("#details_category option[value=\'" + value["category"] + "\']").show();
                    });

                    $("#details_category").val(campDetails.resort[0]["category"]);
                    max_occupancy = campDetails.resort[0]["occupancy"];
                    $(".adult_occupancy").each(function () {
                        $(this).html(max_occupancy);
                    });
                    set_rooms();

                    if (campDetails.resort.washroom != null) {
                        $("#washroom").show();
                    }
                    if (campDetails.resort.washroom_type != null) {
                        $("#" + campDetails.resort.washroom_type).show();
                    }
                    if (campDetails.resort.power_supply != null) {
                        $("#power_supply").show();
                    }
                    $("#camp_icon_resort").removeClass("fill-grayscale");
                    $("#camp_icon_cottage").addClass("fill-grayscale");
                    $("#camp_icon_dome").addClass("fill-grayscale");
                    $("#camp_icon_swiss").addClass("fill-grayscale");
                    $("#camp_icon_alpine").addClass("fill-grayscale");
                    $("#camp_icon_homestay").addClass("fill-grayscale");
                    get_pricing();
                }

                if (has_dome) {
                    get_dome();
                } else if (has_tent) {
                    get_tent();
                } else if (has_swiss) {
                    get_swiss();
                } else if (has_cottage) {
                    get_cottage();
                } else if (has_homestay) {
                    get_homestay();
                } else if (has_resort) {
                    get_resort();
                }

                $("#camp_icon_alpine").click(get_tent);
                $("#camp_icon_dome").click(get_dome);
                $("#camp_icon_swiss").click(get_swiss);
                $("#camp_icon_cottage").click(get_cottage);
                $("#camp_icon_homestay").click(get_homestay);
                $("#camp_icon_resort").click(get_resort);

            }

            function set_rooms() {
                var booking_required = parseFloat(sessionStorage.getItem("booking_required"));
                var booking_rooms = Math.floor(booking_required / max_occupancy);
                for (i = 0; i < booking_rooms - 1; i++) {
                    add_room();
                }
                $(".adults").each(function () {
                    $(this).val(max_occupancy);
                });
                if ((booking_required % max_occupancy) > 0) {
                    if (booking_rooms > 0) {
                        add_room();
                    }
                    $(".adults").last().val(booking_required % max_occupancy);
                }
            }

            function get_pricing() {

                var child = 0;
                var adults = 0;
                var days = 1;
                $('.adults').each(function () {
                    adults += parseFloat(this.value);
                });

                $('.children').each(function () {
                    child += parseFloat(this.value);
                });

                days = Math.floor((Date.parse(sessionStorage.getItem("to_date")) - Date.parse(sessionStorage.getItem("from_date"))) / 86400000);
                if (days == 0) {
                    days = 1;
                }
                if (days < 0) {
                    $('#to_date').datepicker();
                    $('#to_date').datepicker('setDate', sessionStorage.getItem("from_date"));
                    sessionStorage.setItem("to_date", $("#from_date").val());
                    days = 1;
                }
                $(".persons").each(function () {
                    $(this).html(adults + child);
                });

                $(".days").each(function () {
                    $(this).html(days);
                });

                $(".rooms").each(function () {
                    $(this).html(total_rooms);
                });

                sessionStorage.setItem("booking_duration", days);
                sessionStorage.setItem("total_guests", adults + child);
                campDetails[sessionStorage.getItem("camp_type")].forEach(function (value, index) {
                    if (value.category == $("#details_category").val()) {
                        sessionStorage.setItem("camp_code", value.camp_code);
                        max_occupancy = value.occupancy;
                        $(".adult_occupancy").each(function () {
                            $(this).html(max_occupancy);
                        });
                    }
                });

                var rooms = [];
                $('.adults').each(function () {
                    rooms.push(this.value);
                });
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/get_pricing',
                    headers: {
                        "auth_key": localStorage.getItem("auth_key")
                    },
                    data: {
                        children: child,
                        adults: adults,
                        days: days,
                        rooms: rooms,
                        camp_id: sessionStorage.getItem("camp_id"),
                        camp_type: sessionStorage.getItem("camp_type"),
                        camp_code: sessionStorage.getItem("camp_code"),
                        coupon_code: $("#coupon_code").val(),
                        from_date: sessionStorage.getItem("from_date"),
                        to_date: sessionStorage.getItem("to_date"),
                        device:localStorage.getItem("device")
                    },

                    beforeSend: function () {
                        $('.loader-outer').show();
                    },

                    success: function (data, textStatus, xhr) {
                        $('.loader-outer').hide();
                        if (xhr.status == 200) {
                            if($("#coupon_code").val() == ""){
                                if($("#total_price").html() == data.result.toFixed(2)){
                                    $("#coupon_message").html("Invalid code");
                                    $("#coupon_message").addClass("text-danger");
                                }
                                else if(data.result.toFixed(2) < $("#total_price").html()){
                                    $("#coupon_message").html("Coupon code applied");
                                    $("#coupon_message").removeClass("text-danger");
                                    $("#coupon_message").addClass("text-success");
                                }
                            }
                            $("#total_price").html(data.result.toFixed(2));
                            $(".persons").each(function () {
                                $(this).html(adults + child);
                            });
                        }
                    },
                    error:

                        function (error) {
                            $('.loader-outer').hide();
                            console.log('error');
                        }
                })
            }


            $("#from_date").change(function () {
                sessionStorage.setItem("from_date", this.value);
                sessionStorage.setItem("to_date", $("#to_date").val());
                get_pricing();
            });
            $("#to_date").change(function () {
                sessionStorage.setItem("to_date", this.value);
                get_pricing();
            });

            $("#details_category").change(function () {
                get_pricing();
            });

            function book_camp() {

                // if (localStorage.getItem("auth_key") != undefined) {

                var rooms = [];
                $('.adults').each(function () {
                    rooms.push(this.value);
                });
                var campType = $('.camp-icons').find('img:not(".fill-grayscale")').attr('id').split("_");
                campType = campType[2] == "alpine" ? "tent" : campType[2];
                var checkout_details = {
                    camp_name: campDetails.camp.camp_name,
                    camp_code: "",
                    camp_destination: $("#camp_destination").text(),
                    check_in: $("#from_date").val(),
                    check_out: $("#to_date").val(),
                    rooms: parseFloat($("#no_of_person").text().trim()),
                    camp_type: sessionStorage.getItem("camp_type"),
                    days: parseFloat(sessionStorage.getItem("booking_duration")),
                    amount: $("#total_price").text(),
                    guide_charges: "",
                    cgst: "",
                    igst: "",
                    sgst: "",
                    guests: sessionStorage.getItem("total_guests"),
                    room_details: rooms
                };

                campDetails[sessionStorage.getItem("camp_type")].forEach(function (value, index) {
                    if (value.category == $("#details_category").val()) {
                        checkout_details.camp_code = value.camp_code;
                        checkout_details.guide_charges = value.guide_charges;
                        checkout_details.cgst = value.cgst;
                        checkout_details.igst = value.igst;
                        checkout_details.sgst = value.sgst;

                    }
                });

                localStorage.setItem("room_details", JSON.stringify(checkout_details.room_details));
                sessionStorage.setItem("checkout_details", btoa(JSON.stringify(checkout_details)));
                top.location.href = "checkout.php";
                // } else {
                //     $(".login-popup").addClass("open");
                // }
            }

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
