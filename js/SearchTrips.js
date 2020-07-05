var resizeDetail = function() {
    if (window.innerWidth < 880) {
        $('.trip-img').removeClass('col-sm-6').addClass('col-sm-5');
        $('.trip-detail').removeClass('col-sm-6').addClass('col-sm-7');
    } else {
        $('.trip-img').removeClass('col-sm-5').addClass('col-sm-6');
        $('.trip-img').removeClass('col-sm-7').addClass('col-sm-6');
    }
}

window.onload = function() {
    this.resizeDetail();
}

var x;
if (localStorage.getItem('road_type') !== null) {
    $('#btn_' + localStorage.getItem('road_type'))
        .css({ color: "#024959", "background-color": "#FFFFFF" });
}
document.querySelector('.visual input[name="date-in"]').value =
    localStorage.getItem('startDate');
document.getElementById('pac-input').value = localStorage.getItem('meetupPoint');
var selectRType = document.querySelectorAll('select.item-info > option');
var selectOpArr = Array.from(selectRType);

for (var i = 0; i < selectOpArr.length; i++) {
    console.log(selectOpArr[i].value);
    if (selectOpArr[i].value === localStorage.getItem('road_type')) {
        console.log('selected', i);
        selectOpArr[i].setAttribute('selected', 'selected');
        break;
    }
}

var dataObj = {
    "meetupPoint": localStorage.getItem('meetupPoint'),
    "startDate": localStorage.getItem('startDate')
};

var rType = localStorage.getItem('road_type');
switch (rType) {
    case 'smooth':
        //var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['RType'] = 'SMOOTH HIGHWAY';
        break;

    case 'twist':
        //var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['RType'] = 'TWIST AND TURN';
        break;
    case 'bumpy':
        //var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['RType'] = 'BUMPY RIDES';
        break;

    case 'offroading':
        //var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['RType'] = 'OFFROADING';
}

$.ajax({
    "method": "POST",
    "url": "https://dev.unfoldingskies.com/api/RTrips/RTrip_query",
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify(dataObj),
    beforeSend: function() {
        $('.loader-outer').show();
    },
    success: function(response, textStatus, xhr) {
        x = response;
        console.log(response);
        $('.loader-outer').hide();

        if (response.length === 0) {
            $('#noPropertyModal').removeClass('fade').addClass('show');

            $('.future-treks').html('');
            $('.noTreksFound').show();

            setTimeout(function() {
                $('#noPropertyModal').removeClass('show').addClass('fade');
            }, 3000);
        }

        var upTrips, upTripsImg, i = 0,
            j = 0;
        $('.future-trips').html('');
        //$('.trek-text > h3').text('')
        var r_type = 'smuth';
        for (resp of response) {

            i++;
            var trekImage = resp.RTripImage;
            if (typeof(trekImage) == "undefined" || typeof(trekImage) == null) {
                upTripsImg = `<div class="col-sm-6 trip-img">
                <img src="new_img/road-trip/trip.png">
                </div>
                `;
            } else if (resp.RTripImage.length != 0) {
                trekImage = resp.RTripImage[0];
                if (typeof(trekImage) == "object") {
                    var n = Math.floor((Math.random() * 4) + 1);
                    trekImage = resp.RTripImage[n].url;
                    upTripsImg = `<div class="col-sm-6 trip-img">
                    <img src=${trekImage}>
                    </div>`;
                } else if (typeof(trekImage) == "string") {
                    //trekImage = resp.RTripImage[0].url;
                    upTripsImg = `<div class="col-sm-6 trip-img">
                    <img src=${resp.RTripImage[0].split(' ').join('%20')}>
                    </div>`;
                    console.log(typeof resp.RTripImage[0]);
                }

            } else {
                upTripsImg = `<div class="col-sm-6 trip-img">
                <img src="new_img/road-trip/trip.png">
                </div>`;
            }

            var path = [],
                dayDetails = resp.RTripDayDetails;
            if (dayDetails !== null && dayDetails !== undefined) {
                for (var i = 0, j = 0; i < dayDetails.length; i++) {
                    if (dayDetails[i] !== null && dayDetails[i] !== undefined)
                        if ((i !== dayDetails.length - 1) &&
                            (dayDetails[i].startPoint !== null) && (dayDetails[i].startPoint !== undefined)) {
                            path[j] = dayDetails[i].startPoint + '(1)';
                            j++;
                        } else if (dayDetails[i].endPoint !== null && dayDetails[i] !== undefined) {
                        path[j] = dayDetails[i].endPoint + '(2)';
                    }
                }
            }
            var pLengthClass;
            if (resp.RTripTitle.length > 60 || path.join(' > ').length > 90) {
                pLengthClass = 'inc-amt-dynamic';
            } else {
                pLengthClass = 'inc-amt';
            }

            if (r_type === 'SMOOTH HIGHWAY') {
                $('#rt100').attr("id", "rt1");
            } else if (r_type === 'TWIST AND TURN') {
                $('#rt100').attr("id", "rt2");
            } else if (r_type === 'BUMPY RIDES') {
                $('#rt100').attr("id", "rt3");
            } else if (r_type === 'OFFROADING') {
                $('#rt100').attr("id", "rt4");
            } else {
                $('#rt100').attr("id", "rt5");
            }

            // if (r_type === 'SMOOTH HIGHWAY') {
            //     j = 1;
            //     $('.future-trips .rt' + (i - 1)).attr("id", "rt1");
            // } else if (r_type === 'TWIST AND TURN') {
            //     j = 2;
            //     $(".future-trips .rt" + (i - 1)).attr("id", "rt2");
            // } else if (r_type === 'BUMPY RIDES') {
            //     j = 3;
            //     $(".future-trips .rt" + (i - 1)).attr("id", "rt3");
            // } else if (r_type === 'OFFROADING') {
            //     j = 4;
            //     $(".future-trips .rt" + (i - 1)).attr("id", "rt4");
            // }

            upTrips = `${upTripsImg}
            <div class="col-sm-6 trip-detail">
            <h3 id="rt100">${resp.RType}</h3>
            <h1>${resp.RTripTitle}</h1>
            
            <div class="days">
            <img src="new_img/icons/sunny.png">
            <span>${resp.totalDays} Days</span>
            </div>
            <h4>${path.join(' > ')}</h4>
            
            <div class="row ${pLengthClass}">
            <div class="col-xs-6">
            <h2>Inclusions</h2>
            <div class=" inclusions row">
            <div class="col-xs-3">
            <img src="new_img/icons/campground.png">
            <h5>STAYS</h5>
            </div>
            <div class="col-xs-3">
            <img src="new_img/icons/food.png">
            <h5>FOOD</h5>
            </div>
            <div class="col-xs-3">
            <img src="new_img/icons/vehicle.png">
            <h5>VEHICLE</h5>
            </div>
            </div>
            </div>
            <div class="col-xs-6 amt">
            <h6>Starts from</h6>
            <span>₹${resp.pricePerPerson}</span><br/>
            <button id=${resp._id} onclick="details(this)">View Details</button>
            </div>
            </div>
            </div>`;

            r_type = resp.RType;
            $('.future-trips').append(upTrips);

            // if (resp.RTripTitle.length > 60 || path.join(' > ').length > 90) {} else if (resp.RTripTitle.length > 40 || path.join(' > ').length > 60) {
            //     $('.inc-amt').removeClass('inc-amt-dynamic').addClass('inc-amt');
            // }

            if ((/stay/i).test(resp.provided) !== true) {
                $('.future-trips>div:last-child .inclusions>div:nth-of-type(1)').css('display', 'none');
            }

            if ((/food/i).test(resp.provided) !== true) {
                $('.future-trips>div:last-child .inclusions>div:nth-of-type(2)').css('display', 'none');
            }

            if (resp.vehicleProvided !== "Yes") {
                $('.future-trips>div:last-child .inclusions>div:nth-of-type(3)').css('display', 'none');
            }
        }

        if (r_type === 'SMOOTH HIGHWAY') {
            $('#rt100').attr("id", "rt1");
        } else if (r_type === 'TWIST AND TURN') {
            $('#rt100').attr("id", "rt2");
        } else if (r_type === 'BUMPY RIDES') {
            $('#rt100').attr("id", "rt3");
        } else if (r_type === 'OFFROADING') {
            $('#rt100').attr("id", "rt4");
        } else {
            $('#rt100').attr("id", "rt5");
        }

        // var tripH3 = document.querySelectorAll("div.future-trips h3");
        // var tripH3Last = tripH3[tripH3.length - 1];
        // if (r_type === 'SMOOTH HIGHWAY') {
        //     tripH3Last.setAttribute("id", "rt1");
        // } else if (r_type === 'TWIST AND TURN') {
        //     tripH3Last.setAttribute("id", "rt2");
        // } else if (r_type === 'BUMPY RIDES') {
        //     tripH3Last.setAttribute("id", "rt3");
        // } else if (r_type === 'OFFROADING') {
        //     tripH3Last.setAttribute("id", "rt4");
        // }

        // var rt = Array.from(document.querySelectorAll('.trip-detail .rt'));
        // rt.forEach(function(item) {
        //     if (item.textContent === 'SMOOTH HIGHWAY') {
        //         item.setAttribute("id", "rt1");
        //     } else if (item.textContent === 'TWIST AND TURN') {
        //         item.setAttribute("id", "rt2");
        //     } else if (item.textContent === 'BUMPY RIDES') {
        //         item.setAttribute("id", "rt3");
        //     } else if (item.textContent === 'OFFROADING') {
        //         item.setAttribute("id", "rt4");
        //     }
        // });

        resizeDetail();
    }
});

function details(element) {
    //console.log('trip-detail trip-detail');
    localStorage.setItem('trip_id', element.id);
    top.location.href = 'TripDetail.php';
}

function roadType(_this) {
    if (_this.id == 'btn_smooth') {
        localStorage.setItem('road_type', 'smooth')
        top.location = "SearchTrips.php";
    }
    if (_this.id == 'btn_bumpy') {
        localStorage.setItem('road_type', 'bumpy');
        top.location = "SearchTrips.php";
    }
    if (_this.id == 'btn_twist') {
        localStorage.setItem('road_type', 'twist')
        top.location = "SearchTrips.php";
    }
    if (_this.id == 'btn_offroading') {
        localStorage.setItem('road_type', 'offroading')
        top.location = "SearchTrips.php";
    }
    // $("#btn_easy").attr('color','#024959');
    // style="color: #024959; background-color: #FFFFFF;"
}

$('.search-trek button').click(function() {
    var location = document.getElementById('pac-input').value;
    var startDate = document.getElementById('date').value;
    var roadType = document.getElementById('roadType').value;
    var roadTypeObj = {
        'smooth': "SMOOTH HIGHWAY",
        'twist': "TWIST AND TURN",
        'bumpy': "BUMPY RIDES",
        'offroading': "OFFROADING"
    };
    var roadTypeF;
    if (roadType === '') {
        roadTypeF = '';
    } else {
        roadTypeF = roadTypeObj[roadType].includes(' ') === true ?
            roadTypeObj[roadType].split(' ').join('%20') : roadTypeObj.roadType;
    }

    localStorage.setItem('meetupPoint', location);
    localStorage.setItem('startDate', startDate);
    localStorage.setItem('road_type', roadType);

    top.location = "SearchTrips.php";
});