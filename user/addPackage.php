<html>
<head>
    <title>Add Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>

    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/rickshaw.min.css">
    <link rel="stylesheet" href="css/bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/summernote.css">
    <link rel="stylesheet" href="css/summernote-bs3.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/chosen-bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="js/plugins/tabdrop/css/tabdrop.css">
    <link href="css/minoral.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>

        .add-form {
            margin-top: 30px;
        }

        .add-form input {
            border-radius: 10px !important;

        }

        .form-group {
            margin: 12px 0px !important;
        }

        .form-group label {
            text-align: right;
        }

        .form-nav {
            margin-top: 40px;
        }

        .form-nav input {
            width: 30%;
            background: #2d0829;
            color: white;
        }

        .form-nav > div:first-child {
            text-align: -webkit-center;
        }

        .show-image-div {
            height: 406px;
            overflow-y: scroll;
            overflow: auto;
            background: whitesmoke;
            background-clip: content-box;
        }

        .show-tent-image-div {
            height: 336px;
            overflow-y: scroll;
            overflow: auto;
            background: whitesmoke;
            background-clip: content-box;
        }

        .show-image-div img {
            margin: 10px;
            width: 40%;
        }

        .show-tent-image-div img {
            margin: 10px;
            width: 40%;
        }

        @media screen and (max-width: 600px) {
            .form-group label {
                text-align: left;
            }

            .show-tent-image-div {
                height: 150px;
            }

            .show-image-div {
                height: 150px;
            }

            .form-nav input {
                width: 100%;
                margin: 10px;
            }

            .navbar-collapse {
                display: none;
            }

            .tablinks img {
                float: none;
            }

            #content {
                padding-left: 5px !important;
                padding-right: 5px !important;
            }
        }

        .bg-error {
            background-color: antiquewhite !important;
        }

        @media screen and (min-width: 601px) {
            .add-form {
                margin-top: 30px;
                font-size: 0.85vw;
            }

            .navbar-collapse {
                display: block !important;
            }
        }

    </style>
</head>
<body class="brownish-scheme">

<!-- Preloader -->
<div class="mask">
    <div id="loader"></div>
</div>
<!--/Preloader -->

<!-- Wrap all page content here -->
<div id="wrap">


    <!-- Make page fluid -->
    <div class="row">


        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">


            <!-- Branding -->
            <div class="navbar-header col-md-2">
                <div onclick="show_nav()">
                    <img src="images/favicon.ico">
                </div>
                <a class="navbar-brand" href="index.php" style="background: none">

                    <strong>Menu</strong>
                    <!--<strong>ADMIN</strong> <span class="divider vertical"></span> Panel-->
                </a>
            </div>
            <!-- Branding end -->

            <div class="navbar-logout" onclick="logout_owner()">
                <img src="../img/logout.png" title="logout">
            </div>


            <!-- .nav-collapse -->
            <div class="navbar-collapse">


                <!-- Content collapsing at 768px to sidebar -->
                <div class="collapsing-content">

                </div>
                <!-- /Content collapsing at 768px to sidebar -->


                <!-- Sidebar -->
                <ul class="nav navbar-nav side-nav text-center" id="navigation">
                    <li class="collapsed-content">
                        <!-- Collapsed content pasting here at 768px -->
                    </li>
                    <li class="user-status status-online block" id="user-status">
                        <div class="profile-photo">
                            <img src="images/profile-photo.jpg" alt/>
                        </div>
                        <div class="user-detail" id="user">
                            <p id="user_name" style="font-weight: bolder"></p>
                            <p>(<span id="user_mobile"></span>)</p>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="../index.php" title="Home">
                            <i class="fa fa-dashboard">
                                <span class="overlay-label red"></span>
                            </i>
                            Home <b class="fa fa-angle-left dropdown-arrow"></b>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="addPackage.php" title="Add Package">
                            <i class="fa fa-dashboard">
                                <span class="overlay-label red"></span>
                            </i>
                            Add Package <b class="fa fa-angle-left dropdown-arrow"></b>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="myPackage.php" title="Add Package">
                            <i class="fa fa-dashboard">
                                <span class="overlay-label red"></span>
                            </i>
                            My Packages <b class="fa fa-angle-left dropdown-arrow"></b>
                        </a>
                    </li>

                    <li class="dropdown" onclick="logout_owner()">
                        <a href="#" title="Logout">
                            <i class="fa fa-dashboard">
                                <span class="overlay-label red"></span>
                            </i>
                            Logout <b class="fa fa-angle-left dropdown-arrow"></b>
                        </a>
                    </li>


                </ul>
                <!-- Sidebar end -->


            </div>
            <!--/.nav-collapse -->


        </div>
        <!-- Fixed navbar end -->


        <!-- Page content -->
        <div id="content" class="col-md-12">

            <!-- submenu -->
            <div class="submenu">
                <h1><strong>Add Package</strong></h1>
                <div class="collapsed">
                    <a href="#" id="submenutoggle"><h1>Add Package<i class="fa fa-bars"></i></h1></a>
                </div>
            </div>
            <!-- /submenu -->

            <!-- content main container -->
            <div class="main row">

                <form class="add-form" enctype="multipart/form-data" id="formId">

                    <div id="first_part" style="">

                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="col-md-5 col-sm-5 col-xs-12 control-label">Search Your Destination</label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <select class="form-control" name="destination_name" id="destination_name">
                                        <option value="Pangot">Pangot</option>
                                        <option value="Bir Billing">Bir Billing</option>
                                        <option value="Kanatal">Kanatal</option>
                                        <option value="Leh">Leh</option>
                                        <option value="Kasol">Kasol</option>
                                        <option value="McLeod Ganj">McLeod Ganj</option>
                                        <option value="Naggar">Naggar</option>
                                        <option value="Rishikesh">Rishikesh</option>
                                        <option value="Jibhi">Jibhi</option>
                                        <option value="Chail">Chail</option>
                                        <option value="Tirthan Valley">Tirthan Valley</option>
                                        <option value="Mukteshwar">Mukteshwar</option>
                                        <option value="Shoghi">Shoghi</option>
                                        <option value="Barot">Barot</option>
                                        <option value="Naldehra">Naldehra</option>
                                        <option value="Narkanda">Narkanda</option>
                                        <option value="Dehradun">Dehradun</option>
                                        <option value="Dharamshala">Dharamshala</option>
                                        <option value="Manali">Manali</option>
                                        <option value="Shimla">Shimla</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="package_name" class="col-md-5 col-sm-5 col-xs-12 control-label">Package
                                    Name* </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" class="form-control" id="package_name" name="package_name"
                                           value=""
                                           required>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="property_name" class="col-md-5 col-sm-5 col-xs-12 control-label">Property
                                    Name* </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" class="form-control" id="property_name" name="property_name"
                                           value=""
                                           required>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="days" class="col-md-5 col-sm-5 col-xs-12 control-label">No of Days
                                </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="number" class="form-control" id="days" name="days"
                                           value="" required>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="address" class="col-md-5 col-sm-5 col-xs-12 control-label">Address </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" class="form-control" id="address" name="address" value="">
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="highlights"
                                       class="col-md-5 col-sm-5 col-xs-12 control-label">Highlights </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" class="form-control" id="highlights" name="highlights" value="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="col-md-5 col-sm-5 col-xs-12 control-label">Price per Person</label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <input type="number" class="form-control" id="price_per_person"
                                               name="price_per_person" value="" min="0"
                                               oninput="validity.valid||(value='');">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="col-md-5 col-sm-5 col-xs-12 control-label">Price per couple</label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <input type="number" class="form-control" id="price_per_couple"
                                               name="price_per_couple" value="" min="0"
                                               oninput="validity.valid||(value='');">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label for="highlights"
                                       class="col-md-5 col-sm-5 col-xs-12 control-label">Category </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="checkbox" name="tour" value="tour"
                                           id="tour">
                                    Local Tour <br>
                                    <input type="checkbox" name="cuisine" value="cuisine"
                                           id="cuisine">
                                    Local Cuisine <br>
                                    <input type="checkbox" name="art" value="art"
                                           id="art">
                                    Local Art <br>
                                    <input type="checkbox" name="shopping" value="shopping"
                                           id="shopping">
                                    Local Shopping <br>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label class="col-md-5 col-sm-5 col-xs-12 control-label">Inclusions</label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="checkbox" name="breakfast" value="breakfast"
                                           id="breakfast">
                                    Breakfast <br>
                                    <input type="checkbox" name="lunch" value="lunch"
                                           id="lunch">
                                    Lunch <br>
                                    <input type="checkbox" name="dinner" value="dinner"
                                           id="dinner">
                                    Dinner <br>
                                    <input type="checkbox" name="guide" value="guide"
                                           id="guide">
                                    Guide <br>
                                    <input type="checkbox" name="cab" value="cab"
                                           id="cab">
                                    Cab
                                </div>
                            </div>


                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-12">

                            <div class="row form-group">
                                <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align: left">Add
                                    Image </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="file" class="form-control dropzone" id="package_image"
                                           name="package_image[]"
                                           placeholder="" onchange="show_camp_image(this);" multiple required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 show-image-div" id="camp_image_div">
                                <!--                                <img src="images/wall.jpg" alt="Camp image" />-->
                                <p>
                                    Please Upload all images at once...
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12" id="second_part">


                        <div class="col-md-12 col-sm-12 col-xs-12 form-group" style="margin-top: 100px !important;">
                            <label class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-2 control-label"
                                   style="text-align: left !important;">
                                To complete your registration, please tick the boxes below:
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-xs-2 text-right">
                                    <input type="checkbox" name="consent1" value="consent1" id="consent1" required>
                                </div>
                                <div class="col-xs-10">
                                    I hereby certify that I am the property owner and/or manager for the previous
                                    referenced address.
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-xs-2 text-right">
                                    <input type="checkbox" name="consent2" value="consent2" id="consent2" required>
                                </div>
                                <div class="col-xs-10">
                                    I certify that this is a legitimate accommodation business with all necessary
                                    licenses and permits, which can be shown upon first request. Wandertribe.in reserves
                                    the right to verify and investigate any details provided in this registration.
                                </div>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-xs-2 text-right">
                                    <input type="checkbox" name="consent3" value="consent3" id="consent3" required>
                                </div>
                                <div class="col-xs-10">
                                    I have read, accepted and agreed to the <a
                                            href="https://www.wandertribe.in/terms.php?terms=terms" target="_blank">General
                                        Terms & Conditions</a>.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-nav">
                            <!--                            <div class="col-md-6 col-sm-6 col-xs-12">-->
                            <!--                                <input type="button" value="Previous" class="form-control" onclick="get_first_part()">-->
                            <!--                            </div>-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" value="submit" class="form-control">
                            </div>
                        </div>

                    </div>


                </form>

            </div>
            <!-- /content container -->


        </div>
        <!-- Page content end -->


    </div>
    <!-- Make page fluid-->


</div>
<!-- Wrap all page content end -->

<!--  loader -->
<div class="loader-outer-progress">
    <div class="loader-icon">
        <div class="loader-inner">
            <img src='../img/fullscreen-loader.gif'>
            <p style="font-size: 30px;">Progress...<span id="progress_percent">0</span>%</p>
        </div>
    </div>
</div>

<!-- ! loader -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qn71MFToKOPARXqmGQj60564ddiSFv0&libraries=places&callback=initAutocomplete"
        async defer></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>

<script>
    $(document).ready(function xyz() {
        $('#gst_no').val((localStorage.getItem('user_gst_no') != "null" && localStorage.getItem('user_gst_no') != "undefined") ? localStorage.getItem('user_gst_no') : "");
    });
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>-->

<script src="js/plugins/jquery.nicescroll.min.js"></script>

<script src="js/plugins/blockui/jquery.blockUI.js"></script>

<script src="js/plugins/jquery.easypiechart.min.js"></script>

<script src="js/plugins/jquery.animateNumbers.js"></script>

<script src="js/plugins/flot/jquery.flot.min.js"></script>
<script src="js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="js/plugins/flot/jquery.flot.selection.min.js"></script>
<script src="js/plugins/flot/jquery.flot.animator.min.js"></script>
<script src="js/plugins/flot/jquery.flot.orderBars.js"></script>

<script src="js/plugins/rickshaw/raphael-min.js"></script>
<script src="js/plugins/rickshaw/d3.v2.js"></script>
<script src="js/plugins/rickshaw/rickshaw.min.js"></script>

<script src="js/plugins/skycons/skycons.js"></script>

<script src="js/plugins/jquery.sparkline.min.js"></script>

<script src="js/plugins/summernote/summernote.min.js"></script>

<script src="js/plugins/chosen/chosen.jquery.min.js"></script>

<script src="js/plugins/owl-carousel/owl.carousel.min.js"></script>

<script src="js/plugins/tabdrop/bootstrap-tabdrop.min.js"></script>

<script src="js/charts.js"></script>
<script src="js/dropzone.js"></script>

<script src="js/minoral.min.js"></script>
<script src="js/minoral.js"></script>

<script>

    function show_nav() {
        $('.navbar-collapse').toggle();
    }

</script>

<script>

    function show_camp_image(input) {

        if (input.files) {
            $("#camp_image_div").html("");
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo("#camp_image_div");
                    console.log(event.target);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    }

    $("#manager_mobile_no").change(function () {
        if ($("#manager_mobile_no").val() != "") {
            $('#manager_name').attr('required', true);
        } else {
            $('#manager_name').attr('required', false);
        }
    });

    $("#manager_email_id").change(function () {
        if ($("#manager_email_id").val() != "") {
            $('#manager_name').attr('required', true);
        } else {
            $('#manager_name').attr('required', false);
        }
    });

    var auth_key = localStorage.getItem("auth_key");
    var frm = $('#formId');
    frm.submit(function (e) {
        e.preventDefault();

        if (auth_key != undefined) {
            $.ajax({

                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = (percentComplete * 100).toFixed(0);

                            $("#progress_percent").html(percentComplete);
                        }
                    }, false);

                    return xhr;
                },

                url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/new_package',
                type: 'post',
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "auth_key": auth_key
                },
                beforeSend: function () {
                    $('.loader-outer-progress').show();
                },
                success: function (data, textStatus, xhr) {
                    $('.loader-outer-progress').hide();
                    if (xhr.status == 200) {
                        // localStorage.setItem('user_gst_no', $('#gst_no').val());
                        top.location.href = 'myPackage.php';
                    } else if (xhr.status == 201) {
                        alert('Package Already Found!!');
                    }
                },
                error: function (data) {
                    $('.loader-outer-progress').hide();
                    alert('An error occurred');
                }
            });
        } else {
            alert("Please Login Again");
            top.location.href = '../index.php';
        }

    });

    $(':input[type="number"]').keydown(function () {
        return event.keyCode == 69 ? false : true;
    });


</script>


</body>
</html>
