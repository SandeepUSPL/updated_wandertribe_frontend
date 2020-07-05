<html xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149144948-1');
    </script>

    <title>Forgot Password</title>

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
    <!--    <link rel="stylesheet" href="tuner/css/colorpicker.css">-->
    <link rel="stylesheet" href="css/forgotpass.css">

</head>
<body>


<div class="container forgot-pass-container">
    <div class="row">
        <div class="col-md-12 col-xs-12 heading">
            <h2><strong>FORGOT YOUR PASSWORD? </strong></h2>
        </div>
    </div>
    <form id="forgot_pass_form" action="" enctype="multipart/form-data" class="checkout woocommerce-checkout"
          id="formId">
        <div class="input-field">
            <input type="number" class="phone" id="billing_phone" placeholder="Enter your mobile number"
                   pattern="/^-?\d+\.?\d*$/"
                   onKeyPress="if(this.value.length==10) return false;" required/>
        </div>
        <div class="row button-info">
            <div class="text-center mb-3 col-md-6 col-xs-6 button-get">
                <input type="button" class="btn btn-primary  btn-block btn-rounded z-depth-1 button-get-otp"
                       onclick="sendOtp()" value="GET OTP">
            </div>
            <div class="col-md-6 col-xs-6 aaa">

                <a href="index.php"><h5>Return login</h5></a>

            </div>
        </div>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    //var email = <?php //echo $_GET['email']?>
    //
    //    $(document).ready(function pageText() {
    //
    //        var mainText = '';
    //        if (sessionStorage.getItem('mobile_verification_type') == 'forgot_password') {
    //            mainText = '<h2><span>FORGOT</span> PASSWORD</h2>';
    //            $('#dynamicForm').html("Forgot Password");
    //            $('#main-text-of-page').html(mainText);
    //        } else {
    //            mainText = '<h2><span>Authenticate</span> your Account</h2>';
    //            $('#dynamicForm').html("Authenticate your Account");
    //            $('#main-text-of-page').html(mainText);
    //        }
    //
    //
    //    });

    function sendOtp() {
        console.log("statrt");

        sessionStorage.setItem('mobile', document.getElementById('billing_phone').value);
        $.ajax({
            type: 'POST',
            url: '<?php echo $_SERVER['API_ENDPOINTS'] ?>/api/sendOtp',
            data: {
                'mobile': sessionStorage.getItem('mobile'),
                'type': 'otp',
                'title': sessionStorage.getItem('mobile_verification_type')
            },
            dataType: 'json',
            beforeSend: function () {
                console.log("mid");
                $('.loader-outer').show();
            },
            success: function (data, textStatus, xhr) {
                $('.loader-outer').hide();
                console.log(data);
                if (xhr.status == 200) {
                    console.log("end");
                     top.location.href = 'EnterOTP.php';
                } else if (xhr.status == 201) {
                    alert('No user found with this mobile number');
                }

            },
            error: function (data) {
                $('.loader-outer').hide();
                alert('An error occurred.');
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
