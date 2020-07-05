<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-149144948-1');
    </script>
    <title>WanderTribe</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords"
        content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">
    <meta name="Description" content="An online platform allowing users to experience properties and life in offbeat locations across
                        India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and
                        other Travel related Suppliers to transform their business and opening new revenue streams for
                        them.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/index.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)"
        href="css/index600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600down.css">
    <!--    <link rel = "stylesheet" type="text/css" href="css/main.css">-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">
    <script>
    $(function() {
        var dateFormat = "mm/dd/yy",
            from = $("#from_date")
            .datepicker({
                minDate: 0,
                numberOfMonths: 1,
                showAnim: "blind"
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#to_date").datepicker({
                numberOfMonths: 1,
                showAnim: "blind"
            })
            .on("change", function() {
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
    <div style="background-image: linear-gradient(to right, purple, #1A1780); height: 70px;">
        <?php include 'common.php'; ?>
    </div>
    <div style="position: relative;">
        <img class="hero-image" src="new_img/hero-image.png" alt="">
        <div class="holiday-text">
            <h2 class="demo">BOOK YOUR HOLIDAY</h2>
        </div>
        <div class="activities">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#stays">
                        <img src="new_img/facility/stays.png" alt="">
                        <h5>Stays</h5>
                    </a>
                </li>
                <li>
                    <a href="treksLanding.php">
                        <img src="new_img/facility/treks.png" alt="">
                        <h5>Treks</h5>
                    </a></li>
                <li>
                    <a href="TripsLanding.php">
                        <img src="new_img/facility/road-trips.png" alt="">
                        <h5>Road Trips</h5>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#home">
                        <img src="new_img/facility/experiences.png" alt="">
                        <h5>Experiences</h5>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#home">
                        <img src="new_img/facility/travel-calender.png">
                        <h5>Event Calender</h5>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#home">
                        <img src="new_img/facility/others.png" alt="">
                        <h5>Others</h5>
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <div class="tab-content">
        <div id="stays" class="tab-pane fade in active" style="background: #ECEFF1;">
            <center>
                <ul class="list-inline" style="position: relative;">

                    <li class="active">

                        <img src="new_img/icons/destination.png" alt="">
                        <h5>Destination</h5>
                        <!-- <h6 class="item-info">Kasol, Himachal</h6> -->
                        <div>
                            <select class="item-info" name="destination" id="destination">
                                <option value="Andaman">Andaman</option>
                                <option value="Barot">Barot</option>
                                <option value="Bir Billing">Bir Billing</option>
                                <option value="Chail">Chail</option>
                                <option value="Dehradun">Dehradun</option>
                                <option value="Dharamshala">Dharamshala</option>
                                <option value="Jibhi">Jibhi</option>
                                <option value="Kanatal">Kanatal</option>
                                <option value="Kasol">Kasol</option>
                                <option value="Leh">Leh</option>
                                <option value="Manali">Manali</option>
                                <option value="McLeod Ganj">McLeod Ganj</option>
                                <option value="Mukteshwar">Mukteshwar</option>
                                <option value="Naggar">Naggar</option>
                                <option value="Naldehra">Naldehra</option>
                                <option value="Narkanda">Narkanda</option>
                                <option value="Pangot">Pangot</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rishikesh">Rishikesh</option>
                                <option value="Shimla">Shimla</option>
                                <option value="Shoghi">Shoghi</option>
                                <option value="Tirthan Valley">Tirthan Valley</option>
                            </select>
                        </div>

                    </li>
                    <li>
                        <img src="new_img/icons/check-in.png" alt="">
                        <h5> Check-in</h5>
                        <input type="text" name="date-in" placeholder="month/date/year"
                            class="calendar-default item-info" id="from_date">
                    </li>
                    <li>
                        <img src="new_img/icons/check-out.png" alt="">
                        <h5> Check-out</h5>
                        <input type="text" placeholder="month/date/year" name="date-out"
                            class="calendar-default item-info" id="to_date">
                    </li>
                    <li>
                        <img src="new_img/icons/add-people.png" alt="">
                        <h5> No. of people</h5>
                        <input class="item-info" type="number" placeholder="2" id="no_of_person">
                    </li>
                    <br><br>
                    <div class="search"><button class="btn btn-warning" onclick="search_query()">SEARCH NOW</button>
                    </div>
                </ul>
            </center>
        </div>
    </div>

    <div class="sideSearch">
        <a href="#header" id="search1"><img src="new_img/icons/search1.png"></a>
        <a href="#myCarousel" id="offer1"><img src="new_img/icons/offer1.png"></a>
    </div>

    <div class="offer">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="row carousel-top">
                    <div class="col-xs-6">
                        <h2>Special Offers</h2>
                    </div>
                    <div class="col-xs-1 col-xs-offset-4" style="margin-top: 20px;">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon  glyphicon-circle-arrow-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon  glyphicon-circle-arrow-right"></span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <a href="https://hotels.wandertribe.in/query/Jibhi">
                        <div class="col-xs-4 col-xs-offset-3 item active">
                            <center>
                                <img src="new_img/offers/offer1.png" style="width: 100%">
                            </center>
                        </div>
                    </a>
                    <a href="https://hotels.wandertribe.in/query/Jibhi">
                        <div class="col-xs-4 col-xs-offset-3 item">
                            <center>
                                <img src="new_img/offers/offer2.png" style="width: 100%">
                            </center>
                        </div>
                    </a>
                    <!--                    <div class="col-xs-3 col-xs-offset-3 item">-->
                    <!--                        <center>-->
                    <!--                            <img src="new_img/offers/offer3.png" style="width: 100%">-->
                    <!--                        </center>-->
                    <!--                    </div>-->

                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="destinations">
        <h2>Destinations</h2>
        <div class="row">
        </div>

    </div>

    <div class="destination-map">
        <h2>Destination Map</h2>
        <div class="row">
            <div class="col-sm-8 tri-map">
                <img src="new_img/destination-map.png">
                <h3 id="kashmir">KASHMIR</h3>
                <h3 id="leh">LEH</h3>
                <h3 id="himachal">HIMACHAL PRADESH</h3>
                <h3 id="uttarakhand">UTTARAKHAND</h3>
                <h3 id="punjab">PUNJAB</h3>
                <h3 id="delhi">DELHI</h3>
                <img src="new_img/icons/circle.png" id="kashmirImg" onclick="search_query('NULL', 'JAMMU AND KASHMIR')"
                    style="border-radius: 50%; cursor: pointer;" ;>
                <img src="new_img/icons/circle.png" id="lehImg" onclick="search_query('NULL', 'LEH')"
                    style="border-radius: 50%;cursor: pointer;">
                <img src="new_img/icons/circle.png" id="himachalImg" onclick="search_query('NULL', 'HIMACHAL PRADESH')"
                    style="border-radius: 50%;cursor: pointer;">
                <img src="new_img/icons/circle.png" id="uttarakhandImg" onclick="search_query('NULL', 'UTTARAKHAND')"
                    style="border-radius: 50%;cursor: pointer;">
                <img src="new_img/icons/circle.png" id="punjabImg" onclick="search_query('NULL', 'PUNJAB')"
                    style="border-radius: 50%;cursor: pointer;">
                <img src="new_img/icons/circle.png" id="delhiImg" onclick="search_query('NULL', 'DELHI')"
                    style="border-radius: 50%;cursor: pointer;">
            </div>
            <div class="col-sm-4">
                <div class="col-xs-12 destination-travel1">
                    <img src="new_img/destination-venue.png">
                </div>
                <div class="col-xs-12 destination-travel2">
                    <img src="new_img/destination-route.png">
                </div>
            </div>
        </div>
    </div>

    <div class="service">
        <h2>Service Gaurantee</h2>
        <div class="row">
            <div class="col-xs-2 col-xs-offset-1">
                <img src="new_img/service/branded-toiletries.png">
                <h5>Branded Toiletries</h5>
            </div>
            <div class="col-xs-2">
                <img src="new_img/service/clean-washroom.png">
                <h5>Clean Washroom</h5>
            </div>
            <div class="col-xs-2">
                <img src="new_img/service/clean-linen.png">
                <h5>Clean Linen</h5>
            </div>
            <div class="col-xs-2">
                <img src="new_img/service/packaged-water.png">
                <h5>Packaged Water</h5>
            </div>
            <div class="col-xs-2">
                <img src="new_img/service/wi-fi.png">
                <h5>Wi-Fi</h5>
            </div>
        </div>
    </div>

    <div class="loan">
        <img src="new_img/loan.png">
        <h3>Apply for Travel Loan</h3>
        <img src="new_img/loan-apply.png" onclick="loan()">
    </div>
    <!--common footer-->
    <?php include 'commonFooter.php'?>
    <!--footer ends-->
    <script type="text/javascript">

    function pointerValue(place) {
        //place = this.value;
        console.log(typeof place);
            console.log('hum090');
        var place1 = `${place}`.includes(' ') === true ? place.replace(/ /g, '%20') : place;
            console.log(typeof place1);
            console.log(place);
            return place1;
            
    }
    var type = '';

    function search_query(type = "NULL", dest = "") {

        if (dest === "") {
            dest = $("#destination").val();
        }

        if ($("#destination").val() == "" || $("#destination").val() == "undefined") {
            $("#destination").focus();
            $("#destination").addClass("bg-antiquewhite");
            setTimeout(function() {
                $("#destination").removeClass("bg-antiquewhite");
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

            sessionStorage.setItem("destination_name", document.getElementById('destination').value);
            sessionStorage.setItem("from_date", document.getElementById('from_date').value);
            sessionStorage.setItem("to_date", document.getElementById('to_date').value);
            sessionStorage.setItem("booking_required", document.getElementById('no_of_person').value);

            var destVal = document.getElementById('destination').value;
            window.location = 'https://www.wandertribe.in/search.php?destination_name=' +
                dest +
                '&from_date=' + document.getElementById("from_date").value +
                '&to_date=' + document.getElementById("to_date").value +
                '&booking_required=' + document.getElementById("no_of_person").value +
                '&type="' + type + '"';
        }

    }

    var taglines = {
        "Punjab": "Valour and Vigour",
        "Andaman": "Good Vibes with Sea and Tides",
        "Barot": "Rising Hub of Adventure",
        "Bir Billing": "Paragliding Paradise",
        "Rishikesh": "Rapid Rise to Nirvana",
        "Jibhi": "Landscapes and Waterfalls",
        "Dharamshala": "Little England Meets Little Tibet",
        "Manali": "Queen of Hill Stations",
        "Chail": "Proud Ruler's Answer to Shimla",
        "Dehradun": "From Camp to Capital",
        "Leh": "Barren Splendour",
        "McLeod Ganj": "Little Lhasa",
        "Mukteshwar": "Where the Mountains come to You",
        "Kanatal": "Picturesque suburb of Mussoorie",
        "Kasol": "Hippie in Hills",
        "Naggar": "Where the Clock Stops",
        "Naldehra": "Golfing Paradise in the Hills",
        "Narkanda": "Trekking, Skiing and Apple Biting",
        "Pangot": "Bird Watching Hamlet",
        "Shimla": "The Allure of an Aging Queen",
        "Shoghi": "Serene, Calm and Epitome of Beauty",
        "Tirthan Valley": "Solitude, Solace and Nature"
    };

    function set_destination_list() {

        var destin = "";
        var place = "";


        $(".destinations > div.row").html("");

        $("select.item-info > option").each(function() {

            place = this.value;
            console.log(typeof place);
            console.log('hum090');
            var place1 = `${place}`.includes(' ') === true ? place.replace(' ', '%20') : place;
            console.log(typeof place1);
            console.log(place);
            console.log(taglines[place])
            destin = `<div class="col-xs-6 col-md-4" style="cursor: pointer;">
				<div class="row" onclick=search_query("NULL","${place1}")>
				<div class="col-xs-4">
				<img src="new_img/destinations/${place}.png" alt="" >
				</div>
				<div class="col-xs-8 destination-text">
				<h3>${place}</h3>
				<p>${taglines[place]}</p>
				</div>
				</div>
				</div>`;

            $(".destinations > div.row").append(destin);
        });
    }

    $(document).ready(set_destination_list);

    function mapResponsive() {
        if (window.innerWidth < 1084) {
            $('.tri-map').removeClass('col-sm-8');
            $('.tri-map+div').removeClass('col-sm-4');
		}
		else {
			$('.tri-map').addClass('col-sm-8');
            $('.tri-map+div').addClass('col-sm-4');
		}
	}
	window.onload = mapResponsive();
	window.onresize = mapResponsive();
    /*document.querySelector('.tri-map+div').style.marginLeft=
    (window.innerWidth>(document.querySelector('.tri-map').clientWidth
    +document.querySelector('.tri-map+div').clientWidth+20))?(window.innerWidth-
    (document.querySelector('.tri-map').clientWidth
    +document.querySelector('.tri-map+div').clientWidth+20)):"auto";*/ 

    function loan() {
        location.href = "applyLoan.php"
    }
    </script>
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d92f6b7db28311764d6a4f9/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
</body>

</html>