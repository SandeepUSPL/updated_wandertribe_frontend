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

    <title>Reset Password</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="icon" href="img/logo.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="thbusiness/css/bootstrap.css">
    <link rel="stylesheet" href="thbusiness/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="thbusiness/css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="tuner/css/colorpicker.css">
    <link rel="stylesheet" href="css/resetpass.css">


</head>
<body>


<div class="container Reset-your-pass">
    <div class="heading-1">
        <h1>RESET YOUR PASSWORD</h1>
    </div>
    <form id="reset_pass_form" onsubmit="return checkpassword(this)">
    <div class="inputs-fields">
        <div class="text-field">
            <input type="password" class="form-control" id="billing_password" placeholder="New Password" value="" minlength="6" name="password1" required/>
        </div>
        <div class="pass-field">
            <input type="password" class="form-control" id="remember_password" placeholder="Confirm New Password" value=""minlength="6" name="password2" required/>
            <span id='remember_password_message'>Checking...</span>
        </div>
    </div>


    <div class="button">
        <input type="button" value="SUBMIT" class="btn btn-primary btn-block btn-rounded z-depth-1 button-get-otp" onclick="change_password('<?php echo $_SERVER['API_ENDPOINTS'] ?>')">
    </div>
    </form>
</div>


<script>
    $('#billing_password, #remember_password').on('keyup', function () {
        if ($('#billing_password').val() == $('#remember_password').val()) {
            $('#remember_password_message').html('Matching').css('color', 'green');
        } else
            $('#remember_password_message').html('Not Matching').css('color', 'red');


    });
</script>

<script>




</script>


<script>
    function change_password(endpoint) {

        $.ajax({
            type: 'POST',
            url: endpoint + '/api/change_password',
            data: {
                'password': document.getElementById('billing_password').value,
                'mobile': sessionStorage.getItem('mobile')
            },

            dataType: 'json',
            beforeSend: function () {
                $('.loader-outer').show();
            },
            success: function (data, textStatus, xhr) {
                $('.loader-outer').hide();
                console.log(data);
                if (xhr.status == 200) {
                    alert("Your password changed successfully !! Please login now.");
                    sessionStorage.setItem('alert', '1');
                    top.location.href = "Successotp.php";
                }
            },
            error: function (data) {
                $('.loader-outer').hide();
                console.log('An error occurred.');
                console.log(data);
            }
        });

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
