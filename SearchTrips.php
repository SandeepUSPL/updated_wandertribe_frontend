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
    <title>WanderTribe Trips</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/StateTrips.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/StateTrips600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/StateTrips600down.css">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">

    <script>

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

</script>

</head>
<body>
<!--  commonWBR -->
<?php include "commonWBR.php";?>
<!--commonWBR-->

<div class="search-trek">
    <center>
        <ul class="list-inline">
            <li>
                <div class="visual">
                    <img src="new_img/icons/destination.png" alt="">
                    <input id="pac-input" class="controls item-info" type="text" placeholder="Meetup Point">
                </div>
            </li>
            <li>
                <div class="visual">
                    <img src="new_img/icons/calendar.png" alt="">
                    <input type="date" name="date-in" class="item-info" id="date">
                </div>
            </li>
            <li>
                <div class="visual">
                    <img src="new_img/icons/graph.png" alt="">

                    <select class="item-info" id="roadType">
                        <option value="">Select road type</option>
                        <option value="smooth">SMOOTH HIGHWAY</option>
                        <option value="twist">TWIST AND TURN</option>
                        <option value="bumpy">BUMPY RIDES</option>
                        <option value="offroading">OFFROADING</option>
                    </select>
                </div>
            </li>
            <li>
                <button>Search your Trip</button>
            </li>
        </ul>
    </center>
</div>

<div class="trek-text">
    <h2>Best Drives</h2>
    <h3></h3>
</div>

<div class="filter">
    <div class="row">
        <div class="col-xs-2 filter-arrow" style="height: 100%;">
            <img src="new_img/icons/tri-arrow.png">
            <h3>Filter</h3>
        </div>
        <div class="col-xs-10 road-type">
            <div class="row">
                <div class="col-lg-2">
                    Road type
                </div>
                <div class="col-lg-10" style="padding: 0;">
                    <div class="road-buttons">
                        <button id="btn_smooth" onclick="roadType(this)">SMOOTH HIGHWAY</button>
                        <button id="btn_twist" onclick="roadType(this)">TWIST AND TURN</button>
                        <button id="btn_bumpy" onclick="roadType(this)">BUMPY RIDES</button>
                        <button id="btn_offroading" onclick="roadType(this)">OFFROADING</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="future-trips row">
<!--    append from js-->
</div>

<?php include 'commonFooter.php'?>

<script type="text/javascript" src="js/SearchTrips.js"></script>

</body>
</html>
