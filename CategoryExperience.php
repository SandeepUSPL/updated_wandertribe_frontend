<!DOCTYPE html>
<html>

<head>
    <title>WanderTribe Experience</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/CategoryExperience.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)"
        href="css/CategoryExperience600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)"
        href="css/CategoryExperience600down.css">
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
    <!--        row header-->
    <?php include 'commonWBR.php'; ?>


    <div style="position: relative; height: 366px;">
        <img class="hero-image" src="new_img/experiences/adventure-hero.png" alt="">
        <div class="holiday-text">
            <h2 class="demo">Adventure</h2>
            <p>Holiday Experiences</p>

        </div>
        <div class="enter-exp">
            <div>
                <h3>Where to?</h3>
            </div>

            <div id="experience" class="dropdown tab-pane fade in active">
                <div>
                    <input type="text" placeholder="Enter your Destination" id="pac-input">
                </div>
                <button data-toggle="dropdown"><span class="caret"></span></button>
                <button class="search-btn" onclick="search()">
                    <img src="new_img/icons/search3.png">
                </button>
            </div>

        </div>
    </div>

    <div class="search-exp">
        <div class="row">
            <span class="col-sm-4 col-sm-offset-1">Select Date</span>
            <div class="col-sm-4" style="padding: 0;">
                <img src="new_img/icons/calendar.png">
                <input type="date" name="" id="date">
            </div>
            <button class="col-sm-2" onclick="search()">Search</button>
        </div>
    </div>

    <div class="row discribe-exp">
        <div class="col-sm-3 select-exp">
            <h3>Categories</h3>
            <div class="dropdown">
                <button data-toggle="dropdown">Select<span class="caret"></span></button>
                <ul class="dropdown-menu" id="drop1">
                    <li>Adventure</li>
                    <li>Father-daughter Trips</li>
                    <li>Womens Only Trip</li>
                    <li>Music for Soul Journey</li>
                    <li>Yoga, Wellness and Meditation</li>
                    <li>Culinary Journeys</li>
                    <li>Cultural Experiences</li>
                    <li>Hobbies</li>
                    <li>Treasure Hunt Stories</li>
                    <li>Handicraft</li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 show-exp">
            <h3></h3>
            <div class="row">
                <div class="col-sm-5" style="padding: 0;">
                    <img src="new_img/experiences/rafting.png">
                </div>
                <div class="col-sm-7 show-exp-detail">
                    <h1>Rafting</h1>
                    <h2>Location: <span> Derahdun, Uttarakhand</span></h2>
                    <h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</h5>
                    <div class="row">
                        <div class="col-xs-8">
                            <h2>Duration: 4 hours</h2>
                            <h4>By: <span>Organiser Name</span></h4>
                        </div>
                        <div class="col-xs-4">
                            <h6>From</h6>
                            <h3>₹ 3,342</h3>
                            <button>More Details</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="other-exp">
        <div class="row experiences">
            <h3>More to explore</h3>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img src="new_img/experiences/handicraft.png" class="exp-bg">
                <h2>Handicraft</h2>
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
    </div>

    <?php include 'commonFooter.php' ?>

    <script src="js/CategoryExperience.js"></script>
</body>

</html>