<!DOCTYPE html>
<html>

<head>
    <title>WanderTribe Experience</title>
    <link rel="icon" href="new_img/logo/logo3.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/CategoryTravel.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/CategoryTravel600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/CategoryTravel600down.css">
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
        <img class="hero-image" src="new_img/travel/category-hero.png" alt="">
        <div class="holiday-text">
            <h2 class="demo">Events <span>Calendar</span></h2>
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

    <h3>Available Events on <span>10 July</span></h3>

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

    <div class="travel">
        <h2>More Events</h2>
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

    <?php include 'commonFooter.php' ?>

    <script src="js/CategoryTravel.js"></script>
</body>

</html>