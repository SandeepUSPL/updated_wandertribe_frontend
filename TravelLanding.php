<!DOCTYPE html>
<html>

<head>
    <title>WanderTribe</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/TravelLanding.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/TravelLanding600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/TravelLanding600down.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">

    <script>
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
                        top.location.href = '../index.php';
                    }
                },
                error: function(data) {
                    console.log('An error occurred.');
                }
            });
        };
    </script>
</head>

<body>
    <div style="background-image: linear-gradient(to right, purple, #1A1780);">
        <!--        row header-->
        <?php include 'common.php'; ?>
    </div>

    <div style="position: relative;">
        <img class="hero-image" src="new_img/travel/hero-img.png" alt="">
        <div class="holiday-text">
            <h2 class="demo">Travel Calendar</h2>
            <h2>Somewhere in the World</h2>
            <p>A great way to plan your journey and create a wonderful experience.</p>

        </div>
        <div class="activities">

            <ul class="nav nav-tabs">
                <li>
                    <a href="index.php">
                        <img src="new_img/facility/stays.png" alt="">
                        <h5>Stays</h5>
                    </a>
                </li>
                <li>
                    <a href="treksLanding.php">
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
                    <a href="ExperienceLanding.php">
                        <img src="new_img/facility/experiences.png" alt="">
                        <h5>Experiences</h5>
                    </a>
                </li>
                <li class="active">
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
        <div>
            <h3>Where to?</h3>
        </div>

        <div id="experience" class="tab-pane fade in active">
            <div>
                <input type="text" id="pac-input" placeholder="">
            </div>
            <button data-toggle="dropdown"><span class="caret"></span></button>
            <button class="search-btn" onclick="search()">
                <img src="new_img/icons/search3.png">
            </button>
        </div>

    </div>

    <div class="sideSearch">
        <a href="#header" id="search1"><img src="new_img/icons/search1.png"></a>
    </div>

    <div class="travel">
        <h2>Travel India with <span style="font-weight: 900;"> WanderTribe </span></h2>
        <div class="row">
            <img src="new_img/state-bg/arrow-left.png" class="arrow" onclick="previousL()">
            <div class="col-sm-2 col-xs-5 event">
                <h3></h3>
                <h5></h5>
            </div>
            <div class="col-sm-2 col-xs-5 event">
                <h3></h3>
                <h5></h5>
            </div>
            <div class="col-sm-2 col-xs-5 event">
                <h3></h3>
                <h5></h5>
            </div>
            <div class="col-sm-2 col-xs-5 event">
                <h3></h3>
                <h5></h5>
            </div>
            <div class="col-sm-2 col-xs-5 event" style="position: relative;">
                <h3></h3>
                <h5></h5>
            </div>
            <img class="arrow" onclick="nextR()" src="new_img/state-bg/arrow-right.png">
        </div>
    </div>


    <h3>UPCOMING EVENTS</h3>

    <div class="future-events">
        <div class="row">
            <div class="col-xs-2">
                <h6>MAY</h6>
                <h4>20</h4>
            </div>
            <div class="col-xs-7">
                <h3>SUNBURN SUMMER FEST</h3>
                <div style="display: flex; margin-top: 25px;">
                    <span>TIME: 01:00 PM</span>
                    <pre>|      GOA</pre>
                </div>
            </div>
            <div class="col-xs-3">
                <img src="new_img/travel/party.png">
            </div>
        </div>
    </div>

    <!--common footer-->
    <?php include 'commonFooter.php'?>
    <!--footer ends-->

    <script type="text/javascript" src="js/TravelLanding.js"></script>
</body>

</html>