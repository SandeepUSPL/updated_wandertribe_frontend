<!DOCTYPE html>
<html lang="en">

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
    <meta name="keywords" content="wandertribe ,theroadlesstravelled ,TRLT ,travel ,travelling ,traveltheworld ,naturalworld ,lifeawayfromlife ,outdoorliving ,incredibleindia ,travelindia ,travelrealindia ,exploreindia ,himachal ,himalaya ,pahadipeople ,pahadilife ,localpeople ,himalayanpeople ,adventure ,trekking ,hiking ,walking ,diving ,snorkeling ,running ,mountainbike ,birdwatching ,swimming ,fishing ,boating ,newplace ,newexperiences , ,travelphotography ,travelblogger ,travelgram ,tourism ,hotel ,hotels ,hospitalityindustry ,travelagency ,worldtravel ,traveltips ,nature ,beauty ,beautiful ,pahadi_corner ,himachal ,himachaltourism ,travelrealindia ,himachalpradesh ,photographers_of_india ,himalayas ,travelgram ,mountains ,nature ,wanderlust ,traveller ,portrait ,mypixeldiary ,traveldiaries ,Instahimachal ,StoriesofIndia ,indiapictures ,hills ,IndianPhotoGraphy ,weuttarakhand ,roads ,uttarakhandheaven ,roadtrip ,travelrealindia ,uttarakhand ,himachal   ,uttarkashidiaries ,himalayas  ,india ,travel ,mountains ,wanderlust,travelphotography ,travelcouple ,travelph ,travellers ,traveleurope ,travelblog ,travelstoke ,travelgram ,travelawesome ,travelguide ,traveller ,instatravel ,travel_drops ,travelbook ,travels ,traveler ,travelislife ,travelholic ,traveldeeper ,travelbag ,traveladdict ,travelling ,travelphoto ,traveltheworld ,traveling ,travelblogger ,travel_captures,solotravels ,solotraveldiaries ,solotravelstories ,nomadiclife ,womenwhoexplore ,womenwhotravel ,travelingladies ,familytravels ,travelingwithkids ,familytravelmoment ,roamtheplanet,sky ,clouds ,beach ,food ,nature  ,snow ,sunset ,night ,mountains ,sunsetporn ,nightphotography ,postcardsfromtheworld ,choosemountains ,optoutside ,ipulledoverforthis ,viewfromthetop ,sunset_madness,travelista  ,travelingplanet ,travelingworld ,travelingislife ,travelingsoul ,travelpicsdaily  ,travelstories ,globelletravels ,travelvibes ,globetrotters ,travelworld ,travelwriter ,adventureawaits  ,travellingram ,travelquote ,travelquotes ,theuprootedrose,exploretheglobe ,travelinstyle ,adventureanywhere ,letsgoeverywhere ,worldtraveller ,hello_worldpics ,travelwell ,postcardplaces ,meettheworld ,globetrotting,travelinspo">
    <meta name="Description" content="An online platform allowing users to experience properties and life in offbeat locations across
    India. In this journey, we are connecting Property Owners, Travel Agents, Travel Curators and
    other Travel related Suppliers to transform their business and opening new revenue streams for
    them.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149144948-1"></script>
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1084px)" href="css/e-pass.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 601px) and (max-width: 1083px)" href="css/e-pass600up.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/e-pass600up.css">

    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">
</head>

<body>
<div style="background-image: linear-gradient(to right, purple, #1A1780);">
        <!--        row header-->
        <?php include 'common.php'; ?>
    </div>
    
    <div class="e-pass-head">
        <div class="row">
            <div class="col-xs-6">
                <h1>E-pass form</h1>
                <h6>Apply online here</h6>
            </div>
            <div class="col-xs-6">
                <img src="new_img/e-pass/bus.png">
            </div>
        </div>
    </div>
    <div class="e-pass">
        <form>
            <h6>Request type</h6>

            <div class="form-group">
                <select class="request-type">
                    <option>Coming into Himachal</option>
                    <option>Within State crossing interstate barriers</option>
                    <option>Going out and Coming Back to HP(Round Trip)</option>
                </select>
            </div>

            <h6>Personal information</h6>

            <div class="row">
                <div class="form-group col-xs-6">
                    <label>Name</label>
                    <input type="text" name="e-pass-name" class="form-control" placeholder="Enter Full Name">
                </div>
                <div class="form-group col-xs-6 upload">
                    <!-- <input type="text" name="e-pass-photo" class="form-control" placeholder="Upload Your Photo"> -->
                    <div class="input-group">
                        <span class="input-group-btn">
                            <label class="btn btn-primary btn-file" for="photo_input_group">
                                <div class="input required">
                                    <input id="photo_input_group" type="file" accept="application/pdf">
                                </div> Upload Your Photo
                            </label>
                        </span>
                        <span class="file-input-label"></span>
                        <button class="photo-reset">reset</button>
                    </div>

                    <div>
                        <!-- <h2><i>proofimage.jpeg </i><span>X</span></h2> -->
                        <p>uploaded</p>
                    </div>
                    <!-- <img src="new_img/loan/file-upload-icon.png"> -->
                </div>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select class="e-pass-gender" style="display: block;">
                    <option>Select gender</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mobile number</label>
                <input type="number" name="e-pass-mobile" class="form-control" placeholder="Enter 10 Digit Mobile no.">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="e-pass-email" class="form-control" placeholder="example@email.com">
            </div>

            <label>Date of Birth</label>
            <div class="dob">
                <input type="date" name="" class="form-control" placeholder="dd/mm/yyyy">
                <img src="new_img/icons/calendar.png">
                <div class="form-group col-xs-6 upload">
                    <!-- <input type="text" name="" class="form-control" placeholder="Upload DOB Proof" style="margin: 0;"> -->
                    <div class="input-group" style="margin: 0;">
                        <span class="input-group-btn">
                            <label class="btn btn-primary btn-file" for="dob_input_group">
                                <div class="input required">
                                    <input id="dob_input_group" type="file" accept="application/pdf">
                                </div> Upload DOB Proof
                            </label>
                        </span>
                        <span class="file-input-label"></span>
                        <button class="dob-reset">reset</button>
                    </div>
                    <div>
                        <!-- <h2><i>proofimage.jpeg</i><span>X</span></h2> -->
                        <p>uploaded</p>
                    </div>
                    <!-- <img src="new_img/loan/file-upload-icon.png"> -->
                </div>
            </div>

            <h6>Address information</h6>

            <div class="form-group travelling-from">
                <label>Travelling from</label>
                <input type="text" name="" class="form-control" placeholder="House no./colony/landmark">
                <div class="single-line">
                    <input type="text" name="" class="form-control city" placeholder="City">
                    <input type="number" name="" class="form-control pin" placeholder="Pin Code">
                    <select>
                        <option>State</option>
                    </select>
                </div>
            </div>

            <div class="form-group travelling-to">
                <label>Travelling to</label>
                <input type="text" name="" class="form-control" placeholder="House no./colony/landmark">
                <div class="single-line">
                    <input type="text" name="" class="form-control city" placeholder="City">
                    <input type="number" name="" class="form-control pin" placeholder="Pin Code">
                    <select>
                        <option>State</option>
                    </select>
                </div>
            </div>

            <h6>Id Proof</h6>

            <div class="form-group">
                <label class="bold">Government Id number</label>
                <select class="gov-id" style="width: 100%">
                    <option></option>
                </select>
            </div>

            <div class="row">
                <div class="form-group col-xs-6">
                    <input type="text" name="gov-id-no" class="form-control" placeholder="Enter id number">
                </div>
                <div class="form-group col-xs-6 upload">
                    <!-- <input type="text" name="gov-id-upload" class="form-control" placeholder="Upload id scan copy" style="margin: 0;"> -->
                    <div class="input-group" style="margin: 0;">
                        <span class="input-group-btn">
                            <label class="btn btn-primary btn-file" for="id_input_group">
                                <div class="input required">
                                    <input id="id_input_group" type="file" accept="application/pdf">
                                </div> Upload id scan copy
                            </label>
                        </span>
                        <span class="file-input-label"></span>
                        <button class="id-reset">reset</button>
                    </div>
                    <div>
                        <!-- <h2><i>proofimage.jpeg </i><span>X</span></h2> -->
                        <p>uploaded</p>
                    </div>
                    <!-- <img src="new_img/loan/file-upload-icon.png"> -->
                </div>
            </div>

            <h6>Vehicle details</h6>

            <div class="row">
                <div class="form-group col-xs-6">
                    <label class="bold">Vehicle Number:</label>
                    <input type="text" name="vehicle-no" class="form-control" placeholder="Enter vehicle number">
                </div>
                <div class="form-group col-xs-6 upload">
                    <!-- <input type="text" name="vehicle-rc" class="form-control" placeholder="Upload RC of Vehicle"> -->
                    <div class="input-group">
                        <span class="input-group-btn">
                            <label class="btn btn-primary btn-file" for="rc_input_group">
                                <div class="input required">
                                    <input id="rc_input_group" type="file" accept="application/pdf">
                                </div> Upload RC of Vehicle
                            </label>
                        </span>
                        <span class="file-input-label"></span>
                        <button class="rc-reset">reset</button>
                    </div>
                    <div>
                        <!-- <h2><i>proofimage.jpeg </i><span>X</span></h2> -->
                        <p>uploaded</p>
                    </div>
                    <!-- <img src="new_img/loan/file-upload-icon.png"> -->
                </div>
            </div>

            <div class="form-group additional-person">
                <label class="bold">Additional Accompanying Persons:</label>
                <input type="number" name="" class="form-control" placeholder="0" style="width: 50%;">
            </div>

            <h6>Pass validity</h6>

            <div class="row pass-validity">
                <div class="col-xs-6">
                    <label>Pass valid from</label>
                    <input type="date" name="" class="form-control" placeholder="dd/mm/yyyy">
                    <img src="new_img/icons/calendar.png">
                </div>
                <div class="col-xs-6">
                    <label>Pass valid to</label>
                    <input type="date" name="" class="form-control" placeholder="dd/mm/yyyy">
                    <img src="new_img/icons/calendar.png">
                </div>
            </div>

            <div class="form-group">
                <label class="bold">ePass Required For</label>
                <select class="ePass-required" style="display: block;">
                    <option>One way</option>
                    <option>Round trip</option>
                </select>
            </div>

            <div class="check-terms row">
                <input type="checkbox" name="" class="col-xs-1">
                <h4 class="col-xs-10">I acknowledge that I am fully aware that in case the information furnished by me is found to be incorrect, I shall be liable for prosecution under section 177 & 191 of the Indian Penal Code.</h4>
            </div>

            <div class="row" style="margin-top: 50px;">
                <button type="submit" class="col-xs-2 btn btn-warning">Submit</button>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="js/e-pass.js"></script>
</body>

</html>