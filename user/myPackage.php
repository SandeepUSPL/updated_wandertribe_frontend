<html>
<head>
    <title>My Property</title>
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

        .BOOKED {
            filter: invert(28%) sepia(87%) saturate(2733%) hue-rotate(358deg) brightness(97%) contrast(112%);
        }

        .HOLD {
            filter: invert(8%) sepia(87%) saturate(6620%) hue-rotate(245deg) brightness(118%) contrast(150%);
        }

        .HOLD-ADMIN {
            filter: invert(13%) sepia(58%) saturate(4254%) hue-rotate(287deg) brightness(80%) contrast(117%);
        }

        .AVAILABLE {
            filter: invert(58%) sepia(43%) saturate(822%) hue-rotate(71deg) brightness(101%) contrast(94%);
        }


        .inventory_camps {
            padding: 20px;
            height: 250px;
            overflow: scroll;
            overflow: auto;
        }

        .inventory_camps img {
            width: 50px;
            margin: 10px;
            cursor: pointer;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            padding-top: 50px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-header {
            padding: 0;
            background-color: #fff !important;
        }

        /* Modal Content */
        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            height: 95%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        @media screen and (max-width: 600px) {
            .navbar-collapse {
                display: none;
            }
        }

        @media screen and (min-width: 601px) {
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
                <h1><strong>My Packages</strong></h1>
                <div class="collapsed">
                    <a href="#" id="submenutoggle"><h1>My Packages<i class="fa fa-bars"></i></h1></a>
                </div>
                <!--<ul class="nav nav-tabs">-->
                <!--<li class="active"><a href="#">Upcoming Booking</a></li>-->
                <!--</ul>-->
            </div>
            <!-- /submenu -->

            <!-- content main container -->
            <div class="main">

                <!-- row -->
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <!--//tile-->
                        <section class="tile">

                            <!--//tile header-->
                            <!--                            <button class="btn btn-primary" type="submit">Export</button>-->

                            <div class="tile-header">
                                <div class="controls">
                                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <!--// /tile header-->

                            <!--//tile body-->
                            <div class="tile-body nopadding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Name</th>
                                        <th>Property Name</th>
                                        <th>Price per person</th>
                                        <th>Price per couple</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody id="myProperty">


                                    </tbody>
                                </table>

                            </div>
                            <!--// /tile body-->

                        </section>
                        <!--// /tile-->
                    </div>

                </div>
                <!-- /row -->


            </div>
            <!-- /content container -->


        </div>
        <!-- Page content end -->


    </div>
    <!-- Make page fluid-->


</div>


<!-- The Modal -->
<div id="manage_inventory" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="close_modal">&times;</span>
            <h2 class="text-center">Manage Inventory</h2>
        </div>
        <div class="modal-body text-center">
            <div class="col-lg-12">
                <div class="col-lg-4" id="inventory_count1" style="visibility: hidden">
                    <h5 style="color: black">TOTAL : <span id="inventory_total"></span></h5>
                    <h5 style="color: green">AVAILABLE : <span id="inventory_available"></span></h5>
                    <h5 style="color: red">BOOKED : <span id="inventory_booked"></span></h5>

                </div>
                <div class="col-lg-4">
                    <h3 id="inventory_name"></h3>
                    <h5 id="inventory_code"></h5>
                    <h5 id="inventory_id" style="display: none;"></h5>
                </div>
                <div class="col-lg-4" id="inventory_count2" style="visibility: hidden">
                    <h5 style="color: blue">ON HOLD : <span id="inventory_hold"></span></h5>
                    <h5 style="color: purple">ON HOLD BY ADMIN : <span id="inventory_hold_admin"></span></h5>
                </div>
            </div>
            <div class="col-lg-12" style="margin-top: 20px">
                <h5>Pick a Date</h5>
                <input type="date" id="inventory_date">
            </div>
            <div id="inventory_camps" class="col-lg-12 inventory_camps">

                <!--                <img src="../img/cottage-tent.png" class="" >-->

            </div>
        </div>
        <!--        <div class="modal-footer">-->
        <!--            <h3>Modal Footer</h3>-->
        <!--        </div>-->
    </div>


</div>


<!-- The Modal -->
<div id="change_inventory" class="modal change-inventory">

    <!-- Modal content -->
    <div class="modal-content text-center">

        <div class="modal-header">
            <span class="close" id="close_modal_change">&times;</span>
            <h2 class="text-center">Update Status</h2>
        </div>

        <div class="col-lg-12">
            <h5 style="display: none"><span id="change_inventory_id"></span></h5>
            <h5><span id="change_inventory_code"></span></h5>
            <h5>Room no.<span id="change_inventory_room"></span></h5>
            <h5><span id="change_inventory_date"></span></h5>
        </div>

        <div class="modal-body text-center">

            <div class="col-md-6 col-sm-6 col-xs-12 margin-top-10 margin-bottom-20 col-lg-offset-3">
                <select class="form-control" name="new_status" id="new_status">
                    <option>BOOKED</option>
                    <option>AVAILABLE</option>
                    <option>HOLD</option>
                </select>
            </div>

        </div>

        <div class="col-lg-12">
            <img src="../img/inventory.png" class="" width="64px" id="change_inventory_icon">
            <h4 id="updated_status">BOOKED</h4>
        </div>

        <div class="col-lg-12 margin-top-10">
            <button class="btn btn-default" onclick="update_inventory();">Update</button>
        </div>


    </div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    var id = '';
    var code = '';
    var typ = '';

    var auth_key = localStorage.getItem("auth_key");
    console.log(auth_key);
    $("#myProperty").html();
    var number = 1;
    var abc = '';
    $(document).ready(list_property);

    function list_property() {
        abc = '';
        console.log('data');
        $.ajax({
            type: "post",
            url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/get_package',
            headers: {
                "auth_key": auth_key
            },
            success: function (data, textStatus, xhr) {
                console.log(data);
                if (xhr.status == 200) {
                    $.each(data.result, function (index, india) {
                        console.log(india);
                        abc += '   <tr> \n ' +
                            '                                        <td>' + number + '</td>\n' +
                            '                                        <td>' + india.package_name + '</td>\n' +
                            '                                        <td>' + india.property_name + '</td>\n' +
                            '                                        <td>' + india.price_per_person + '</td>\n' +
                            '                                        <td>' + india.price_per_couple + '</td>\n' +
                            '                                        <td>' + india.destination.destination_name + '</td>\n' +
                            '                                        <td>Active</td>\n' +
                            '                                        <td>\n' +
                            '                                            <button disabled class="btn btn-success btn-file" onclick="edit_property_type(\'' + india.camp_id + '\',\'' + india.camp_code + '\',\'' + india.camp_type + '\');">Edit</button>\n' +
                            '                                        </td> \n'+
                            '                                    </tr> ';
                        number++;
                    });
                    $("#myProperty").html(abc);
                }

                if (xhr.status == 202) {
                    alert("Please login again");
                    logout_owner();
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    }

    function show_nav() {
        $('.navbar-collapse').toggle();
    }

    $('.loader-outer').show();


</script>
<script>


    function show_manage_inventory(i_id, i_code, i_name) {

        $("#inventory_date").val("");
        $("#inventory_name").html(i_name);
        $("#inventory_code").html(i_code);
        $("#inventory_id").html(i_id);
        $("#inventory_camps").html("");
        $("#manage_inventory").show();
        $("#inventory_count1").css('visibility', 'hidden');
        $("#inventory_count2").css('visibility', 'hidden');
    }

    $("#close_modal").click(function () {
        $("#manage_inventory").hide();
    });

    $("#close_modal_change").click(function () {
        $("#change_inventory").hide();
    });

    $("#inventory_date").change(get_inventory_details);

    function get_inventory_details() {

        $("#inventory_camps").html("");

        var camp_code = $("#inventory_code").html();
        var camp_id = $("#inventory_id").html();
        var date_of_booking = $("#inventory_date").val();

        $.ajax({
            type: 'POST',
            url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/dashboard/inventory_details',
            data: {
                "camp_code": $("#inventory_code").html(),
                "camp_id": $("#inventory_id").html(),
                "date_of_booking": $("#inventory_date").val()

                // "camp_code":"WANDERTRIBE12510D",
                // "camp_id":"25",
                // "date_of_booking":"2019-07-08"
            },

            dataType: 'json',

            beforeSend: function () {
                $('.mask').show();
                $('.loader').show();
            },

            success: function (data, textStatus, xhr) {
                if (xhr.status == 200) {

                    console.log(data);
                    $('.mask').hide();
                    $('.loader').hide();

                    var cls = '';
                    var indx = '';
                    var inventory_detail = JSON.parse(data.result.inventory_detail);
                    var total_inventory = Object.keys(data.result.inventory_detail).length

                    for (i = 0; i < total_inventory; i++) {

                        cls = inventory_detail[i + 1];

                        var camp = '<img src="../img/inventory.png" class=" ' + cls + '" onclick="change_inventory(\'' + date_of_booking + '\',\'' + camp_code + '\',\'' + camp_id + '\',\'' + cls + '\',' + (1 + i) + ')">';

                        $("#inventory_camps").append(camp);

                        console.log('added');
                    }

                    $("#inventory_total").html(total_inventory);
                    $("#inventory_available").html($(".inventory_camps").find(".AVAILABLE").length);
                    $("#inventory_booked").html($(".inventory_camps").find(".BOOKED").length);
                    $("#inventory_hold").html($(".inventory_camps").find(".HOLD").length);
                    $("#inventory_hold_admin").html($(".inventory_camps").find(".HOLD-ADMIN").length);
                    $("#inventory_count1").css('visibility', 'visible');
                    $("#inventory_count2").css('visibility', 'visible');


                } else {
                    console.log('error');
                }
            },
            error:

                function (error) {
                    $('.mask').hide();
                    $('.loader').hide();
                    console.log('error');
                }
        });

    }

    function add_camp(c_id) {
        top.location.href = 'addPropertyType.php?c_id=' + c_id;
    }

    function edit_property_type(c_id, c_code, c_type) {
        top.location.href = 'editPropertyType.php?c_id=' + c_id +
            '&c_code=' + c_code +
            '&c_type=' + c_type
        ;
    }

    function change_inventory(i_date, i_code, i_id, i_status, i_room) {
        $("#change_inventory_id").html(i_id);
        $("#change_inventory_code").html(i_code);
        $("#change_inventory_room").html(i_room);
        $("#change_inventory_date").html(i_date);
        $("#change_inventory_icon").addClass(i_status);
        $("#updated_status").html(i_status);
        $("#new_status").val(i_status);
        $("#manage_inventory").hide();
        $("#change_inventory").show();
    }

    $("#new_status").change(function () {

        $("#updated_status").html(this.value);
        $("#change_inventory_icon").removeClass();
        $("#change_inventory_icon").addClass(this.value);

    });

    function update_inventory() {

        var camp_code = $("#change_inventory_code").html();
        var camp_id = $("#change_inventory_id").html();
        var date_of_booking = $("#change_inventory_date").html();
        var room_no = $("#change_inventory_room").html();
        var room_status = $("#updated_status").html();

        $.ajax({
            type: 'POST',
            url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/dashboard/update_status_of_inventory',
            data: {
                "camp_code": $("#change_inventory_code").html(),
                "camp_id": $("#change_inventory_id").html(),
                "date_of_booking": $("#change_inventory_date").html(),
                "room_no": $("#change_inventory_room").html(),
                "room_status": $("#updated_status").html()
            },

            dataType: 'json',

            beforeSend: function () {
                $('.mask').show();
                $('.loader').show();
            },

            success: function (data, textStatus, xhr) {
                if (xhr.status == 200) {

                    console.log(data);
                    $('.mask').hide();
                    $('.loader').hide();

                    $('#change_inventory').hide();
                    list_property();
                    show_manage_inventory(camp_id, camp_code, $("#inventory_name").html());
                    $('#inventory_date').val(date_of_booking);
                    get_inventory_details();


                } else {
                    console.log('error');
                }
            },
            error:

                function (error) {
                    $('.mask').hide();
                    $('.loader').hide();
                    console.log('error');
                }
        });

    }


</script>

<!-- Wrap all page content end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>

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

<script src="js/minoral.min.js"></script>
<script src="js/minoral.js"></script>
</body>
</html>
