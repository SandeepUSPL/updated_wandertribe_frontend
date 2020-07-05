<!DOCTYPE html>
<html>

<head>
    <title>WanderTribe</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/ExperienceLanding.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)"
        href="css/ExperienceLanding600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/ExperienceLanding600down.css">
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
        <img class="hero-image" src="new_img/experiences/hero-img.png" alt="">
        <div class="holiday-text">
            <h2 class="demo">Wandertribe Holiday Experiences</h2>
            <p>All you have to do is just show up</p>
            <p>with your favourite wheels</p>

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
                <li class="active">
                    <a data-toggle="tab" href="#experience">
                        <img src="new_img/facility/experiences.png" alt="">
                        <h5>Experiences</h5>
                    </a>
                </li>
                <li>
                    <a href="TravelLanding.php">
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
                <input type="text" id="pac-input" placeholder="Enter your Destination">
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

    <div class="planning">
        <h2>Planning an unconventional experience is easier than thought</h2>
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

        <h3>Experiences</h3>
    </div>

    <div class="row experiences">
        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/adventure.png" class="exp-bg">
            <h2>Adventure</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/f-d-trips.png" class="exp-bg">
            <h2>Father-daughter Trips</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/women.png" class="exp-bg">
            <h2>Womens Only Trip</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/guitar.png" class="exp-bg">
            <h2>Music for Soul Journey</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/yog.png" class="exp-bg">
            <h2>Yoga, Wellness and Meditation</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/culinary-journeys.png" class="exp-bg">
            <h2>Culinary Journeys</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/cultural-experiences.png" class="exp-bg">
            <h2>Cultural Experiences</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/hobbies.png" class="exp-bg">
            <h2>Hobbies</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/treasure-hunt.png" class="exp-bg">
            <h2>Treasure Hunt Stories</h2>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="new_img/experiences/handicraft.png" class="exp-bg">
            <h2>Handicraft</h2>
        </div>
    </div>

    <?php include 'commonFooter.php' ?>

    <script src="js/ExperienceLanding.js"></script>
</body>

</html>