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
    <title>WanderTribe Treks</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">
    <meta name="Description" content="An online platform allowing users to experience properties and life in offbeat locations across
                        India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and
                        other Travel related Suppliers to transform their business and opening new revenue streams for
                        them.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!--	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/index.css">-->
<!--	<link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/index600up.css">-->
<!--	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/index600down.css">-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/trekLanding.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/trekLanding600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/trekLanding600down.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">

    <script>
        function search(){
            var location = document.getElementById('pac-input').value;
            var startDate = document.getElementById('date').value;
            var difficultyLevel = document.getElementById('difficulty-level').value;
            console.log(location ,startDate,difficultyLevel);
            localStorage.setItem('trekDifficulty', difficultyLevel);
            localStorage.setItem('sort','');
            top.location.href = 'searchTreks.php?location=' + (document.getElementById('pac-input').value)
                +
                '&startDate=' +document.getElementById('date').value
                +
                '&difficultyLevel=' +document.getElementById('difficulty-level').value ;
        }

    </script>
</head>
<body>
    <div style="background-image: linear-gradient(to right, purple, #1A1780); height: 70px;">
<!--        row header-->
        <?php include 'common.php'; ?>
	</div>

	<div style="position: relative;">
		<img class="hero-image" src="new_img/trek/hero-image.png" alt="">
		<div class="holiday-text">
			<p>Introducing</p>
			<h2 class="demo">WanderTribe Treks</h2>
			<h3>Treks hosted to amazing places, all you have to do is show up.</h3>
		</div>
		<div class="activities">
			
			<ul class="nav nav-tabs">
				<li>
					<a  href="index.php">
						<img src="new_img/facility/stays.png" alt="">
						<h5>Stays</h5>
					</a> 
				</li>
				<li class="active">
					<a data-toggle="tab" href="#treks">
						<img src="new_img/facility/treks.png" alt="">
						<h5>Treks</h5>
					</a>
				</li>
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
						<h5>Travel Calender</h5>
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
		<div id="treks" class="tab-pane fade in active" style="background: #ECEFF1;">
			
			<ul class="list-inline" style="position: relative;">
				<li class="active">
					<div class="visual">
						<img src="new_img/icons/destination.png" alt="">
						<span>Where</span>
					</div>
					<div>
                        <input id="pac-input" class="controls item-info" type="text" placeholder="location">
					</div>
				</li>
				<li>
					<div class="visual">
						<img src="new_img/icons/check-in.png" alt="">
						<span>When</span>
					</div>
					<div>
						<input type="date" name="date-in" class="item-info" id="date"><!-- 14 <span>Feb, 2020</span> -->
					</div>
				</li>
				<li>

					<div class="visual">
						<img src="new_img/icons/check-out.png" alt="">
						<span>Difficulty Level</span>
					</div>
					<div>
						<select class="item-info" id="difficulty-level">
							<option class="dif-level" value="">Select difficult level</option>
							<option value="easy">Easy</option>
							<option value="moderate">Moderate</option>
							<option value="difficult">Difficult</option>
						</select>
					</div><!-- 20 <span>Feb, 2020</span> -->
				</li>
				<br><br><br>
				<div class="search"><button class="btn btn-warning" onclick="search()">SEARCH NOW</button> </div>
			</ul>

		</div>
	</div>
    <div class="sideSearch">
        <a href="#header" id ="search1"><img src="new_img/icons/search1.png"></a>
    </div>

	<div class="planning">
		<h2>Planning a trek should be easy.</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<img src="new_img/planning/itineraries.png" alt="">
				</div>
				<div class="col-xs-4">
					<img src="new_img/planning/lodging.png" alt="">
				</div>
				<div class="col-xs-4">
					<img src="new_img/planning/logistics.png" alt="">
				</div>
			</div>
		</div>
	</div>

    <div class="travel">
        <h2>Travel India with <span style="font-weight: 900;"> WanderTribe </span></h2>
        <div class="row">
            <img src="new_img/state-bg/arrow-left.png" class="arrow" onclick="previousL()">
            <div class="col-sm-2 col-xs-5 state" onclick="stateTrek()">
                <h3></h3>
                <h4>REGION</h4>
                <img src="new_img/state-bg/hiking.png" alt="" class="hiking">
                <h5>BEST TREKS</h5>
            </div>
            <div class="col-sm-2 col-xs-5 state" onclick="stateTrek()">
                <h3></h3>
                <h4>REGION</h4>
                <img src="new_img/state-bg/hiking.png" class="hiking">
                <h5>BEST TREKS</h5>
            </div>
            <div class="col-sm-2 col-xs-5 state" onclick="stateTrek()">
                <h3></h3>
                <h4>REGION</h4>
                <img src="new_img/state-bg/hiking.png" class="hiking">
                <h5>BEST TREKS</h5>
            </div>
            <div class="col-sm-2 col-xs-5 state" onclick="stateTrek()">
                <h3></h3>
                <h4>REGION</h4>
                <img src="new_img/state-bg/hiking.png" class="hiking">
                <h5>BEST TREKS</h5>
            </div>
            <div class="col-sm-2 col-xs-5 state" onclick="stateTrek()" style="position: relative;">
                <h3></h3>
                <h4>REGION</h4>
                <img src="new_img/state-bg/hiking.png" class="hiking">
                <h5>BEST TREKS</h5>
            </div>
            <img class="arrow" onclick="nextR()" src="new_img/state-bg/arrow-right.png">
        </div>
    </div>

    <div class="future-treks">
        <h1>Our recent <span>Upcoming treks</span></h1>
        <div class="row">

        </div>

        <button class="show-more">SHOW MORE</button>
    </div>

    <!--common footer-->
    <?php include 'commonFooter.php'?>
    <!--footer ends-->

<!--    <script>-->
<!--        function initAutocomplete() {-->
<!--            // Create the search box and link it to the UI element.-->
<!--            var input = document.getElementById('pac-input');-->
<!--            var searchBox = new google.maps.places.SearchBox(input);-->
<!--        }-->
<!--    </script>-->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT21ywvRwGzIuHQ6lpwSakNhImr1ZOEto&libraries=places&callback=initAutocomplete"async defer></script>-->
    <script type="text/javascript" src="js/trekLanding.js"></script>
</body>
</html>
