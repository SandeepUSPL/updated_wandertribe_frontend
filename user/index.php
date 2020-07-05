<html>
<head>
    <title>Dashboard</title>
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
    <script>
        var auth_key = '<?php echo !is_null($_GET['auth_key']) ? $_GET['auth_key'] : 'NULL'?>';
        var user_type = '<?php echo !is_null($_GET['user_type']) ? $_GET['user_type'] : 'NULL'?>';
        if (auth_key != 'NULL') {
            localStorage.setItem('auth_key', auth_key)
        }
        if (user_type != 'NULL') {
            localStorage.setItem('user_type', user_type)
        }


    </script>
    <style>

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
                <h1>Dashboard</h1>
                <div class="collapsed">
                    <a href="#" id="submenutoggle"><h1>Dashboard <i class="fa fa-bars"></i></h1></a>
                </div>
            </div>
            <!-- /submenu -->

            <!-- content main container -->
            <div class="main">

                <!-- row -->
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <!--//tile-->
                        <section class="tile">
                            <h3 style="text-align: center">Bookings</h3>

                            <!--//tile body-->
                            <div class="tile-body nopadding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order Id</th>
                                        <th>Booking From</th>
                                        <th>Booking To</th>
                                        <th>Booking Amount</th>
                                        <th>Booking Status</th>
                                        <th>Transaction Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="my_booking">

                                    <!--                                    <tr>-->
                                    <!--                                        <td>#</td>-->
                                    <!--                                        <td>Booking Id</td>-->
                                    <!--                                        <td>From</td>-->
                                    <!--                                        <td>To</td>-->
                                    <!--                                        <td>Amount</td>-->
                                    <!--                                        <td>Status</td>-->
                                    <!--                                    </tr>-->

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


        </div>
        <!-- /content container -->


    </div>
    <!-- Page content end -->


</div>
<!-- Make page fluid-->


</div>
<!-- Wrap all page content end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    var auth_key = localStorage.getItem("auth_key");
    $(document).ready(get_bookings());

    function get_bookings() {

        var book_row = '';
        console.log('data');
        $.ajax({
            type: "GET",
            url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/user/getUserBooking',
            headers: {
                "auth_key": auth_key
            },
            success: function (data, textStatus, xhr) {
                console.log(data);
                if (xhr.status == 200) {
                    $.each(data.result, function (index, india) {
                        book_row += ' <tr>\n' +
                            '                                        <td>' + (parseFloat(index) + 1) + '</td>\n' +
                            '                                        <td>' + india.order_id + '</td>\n' +
                            '                                        <td>' + india.from_date + '</td>\n' +
                            '                                        <td>' + india.to_date + '</td>\n' +
                            '                                        <td>' + india.amount + '</td>\n' +
                            '                                        <td>' + india.booking_status + '</td>\n' +
                            '                                        <td>' + india.status + '</td>\n' +
                            '                                        <td>\n' +
                            '                                            <button class="btn btn-success btn-file"  onclick="cancel_booking(' + india.transaction_id + ');"  '+ (india.status == 'CANCELLED' ? 'disabled' : '') +'>Cancel</button>\n' +
                            '                                        </td> \n' +
                            '                                    </tr>';

                    });

                    $("#my_booking").html(book_row);

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


    function cancel_booking(b_id) {
        console.log(b_id);
        $.ajax({
            type: 'POST',
            crossDomain: true,
            url: '<?php echo $_SERVER['API_ENDPOINTS'];?>/api/cancel_booking',
            headers: {
                "auth_key": auth_key
            },
            data: {
                'transaction_id': b_id,
            },
            dataType: 'json',

            beforeSend: function () {
                $('.loader-outer').show();
            },

            success: function (response, textStatus, xhr) {
                $('.loader-outer').hide();
                if (xhr.status == 200) {
                    alert('Refund processed successfully');
                } else if ((xhr.status == 201)) {
                    alert('Not eligible for refund');
                }
            },
            error: function (error) {
                $('.loader-outer').hide();
                alert('Some error occured');
            }
        });
    }

</script>


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
