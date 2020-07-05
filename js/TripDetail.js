var roadType;
var m;
var itineraryShowFn;
var resizeDetail = function() {
    if (window.innerWidth < 880) {
        $('.trek-place > div:first-child').removeClass('col-sm-8').addClass('col-sm-7');
        $('.trek-place > div:last-child').removeClass('col-sm-4').addClass('col-sm-5');

        $('.impDetail .form-query').removeClass('col-sm-offset-1 col-sm-4').addClass('col-sm-5');
    } else {
        $('.trek-place > div:first-child').removeClass('col-sm-7').addClass('col-sm-8');
        $('.trek-place > div:last-child').removeClass('col-sm-5').addClass('col-sm-4');
        $('.impDetail .form-query').removeClass('col-sm-5').addClass('col-sm-4 col-sm-offset-1');
    }
}
window.onload = function() {
    document.querySelector('a#itineraryShow').textContent === 'Collapse Itinerary';
    resizeDetail();
}

$.ajax({
    "method": "POST",
    "url": "https://dev.unfoldingskies.com/api/RTrips/RTripDetails",
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify({
        "_id": localStorage.getItem('trip_id')
    }),
    beforeSend: function() {
        $('.loader-outer').show();
        //console.log('Hi')
    },
    success: function(response, textStatus, xhr) {
        $('.loader-outer').hide();
        console.log(response);
        m = response;
        roadType = response.RType;

        document.querySelector('.trek-pagination').innerHTML =
            `<h2>Road trips > <span> ${response.RTripTitle}</span></h2>`;

        tripImage = response.RTripImage[1];
        if (typeof(tripImage) == "object") {
            tripImage = response.RTripImage;
            var i = 0;
            length = tripImage.length;

            var timeOut = function() {
                setTimeout(next, 5000);
            }

            var next = function() {

                var slide = document.getElementById("trip_image");
                var slides = response.RTripImage;
                slide.src = response.RTripImage[i].url;

                timeOut();
                i++;
                if (i >= length) {
                    i = 0;
                };
            };

            next();

            // document.getElementById("trek_image").src = trekImage;
        }
        // if(typeof (trekImage) == "undefined" || typeof (trekImage) == null){
        // 	trekImage = "new_img/trek-image.png";
        // 	document.getElementById("trek_image").src = "new_img/trek-image.png";
        // }
        if (typeof(tripImage) == "string") {
            tripImage = response.tripImage;
            var i = 0;
            //length = tripImage.length;

            var timeOut = function() {
                setTimeout(next, 5000);
            }

            var next = function() {

                var slide = document.getElementById("trip_image");
                var slides = response.RTripImage;
                slide.src = response.RTripImage[i];
                timeOut();
                i++;
                if (i >= length) {
                    i = 0;
                };
            };

            next();
            // document.getElementById("trek_image").src = trekImage;
        }

        document.querySelector('.trekDifficulty').textContent = roadType;
        if (roadType == 'SMOOTH HIGHWAY') {
            $(".trekDifficulty").css('background-color', '#E5CF08');
        } else if (roadType == 'TWIST AND TURN') {
            $(".trekDifficulty").css('background-color', '#00C51C');
        } else if (roadType == 'BUMPY RIDES') {
            $(".trekDifficulty").css('background-color', '#FF5700');
        } else if (roadType == 'OFFROADING') {
            $(".trekDifficulty").css('background-color', '#4E5AFF');
        }

        document.querySelector('.trek-place-detail > h1').textContent = response.RTripTitle;

        document.querySelector('#weatherDetail1 > span').textContent = response.totalDays + ' D';
        document.querySelector('#weatherDetail2 > span').textContent = response.totalDays - 1 + ' N';

        if (response.totalDistance == undefined || response.totalDistance == null) {
            document.querySelector('#weatherDetail3 > span').textContent = 'Not provided';
            $('#weatherDetail3 > span').css({ fontSize: '12px', color: 'red' });
        } else {
            document.querySelector('#weatherDetail3 > span').textContent = response.totalDistance + ' km';
        }

        if (!(/stay/i).test(response.provided)) {
            $('.inc>div:nth-of-type(1)').css('display', 'none');
        }

        if (!(/food/i).test(response.provided)) {
            $('.inc>div:nth-of-type(2)').css('display', 'none');
        }

        if (response.vehicleProvided !== "Yes") {
            $('.inc>div:nth-of-type(3)').css('display', 'none');
        }

        document.querySelector('.amount h5').textContent = '₹ ' + response.pricePerPerson;

        if (response.company == undefined || response.company == null) {
            document.querySelector('.impDetail h2 > span').textContent = 'Not provided';
            $('.impDetail h2 > span').css({ fontSize: '20px', color: 'red' });
        } else {
            document.querySelector('.impDetail h2 > span').textContent = response.company;
        }

        document.querySelector('.impDetail p.overview').textContent = response.about;

        itineraryShowFn = function() {
            console.log('itineraryShowFn');
            var itineraryShowLink = document.querySelector('a#itineraryShow');

            if (response.RTripDayDetails === null || response.RTripDayDetails === undefined) {
                document.querySelector('#listItinerary').innerHTML =
                    'Itinerary Details is not provided by company.';
                itineraryShowLink.style.display = 'none';
            } else {
                var listItineraryHTML = '';

                if (itineraryShowLink.textContent === 'Collapse Itinerary') {
                    console.log('Collapse Itinerary');

                    var item = response.RTripDayDetails[0];
                    var attractions =
                        (item.attractions === null || item.attractions == undefined) ? 'Not Provided' : item.attractions;
                    var distance =
                        (item.distance === null || item.distance == undefined) ? 'Not Provided' : item.distance;
                    var carry =
                        (item.carry === null || item.carry == undefined) ? 'Not Provided' : item.carry;

                    listItineraryHTML = `<li>
					<h4>Day 1 - ${item.startPoint} to ${item.endPoint}</h4>
					<h4 class="location">Attractions : ${attractions}</h4>
					<h4 class="location">Distance : ${distance} km</h4>
					<h4 class="location">Carry : ${carry}</h4>
					<img src=${item.RTripDayImage} alt="Image not provided.">

					<p>${item.notes}</p>
					</li>`;

                    $('ul#listItinerary p').addClass('hidden');

                    if (response.RTripDayDetails.length == 1) {
                        itineraryShowLink.style.display = 'none';
                        return;
                    }
                } else {
                    response.RTripDayDetails.forEach(function(item, index) {
                        var attractions =
                            (item.attractions === null || item.attractions == undefined) ? 'Not Provided' : item.attractions;
                        var distance =
                            (item.distance === null || item.distance == undefined) ? 'Not Provided' : item.distance;
                        var carry =
                            (item.carry === null || item.carry == undefined) ? 'Not Provided' : item.carry;

                        listItineraryHTML += `<li>
                        <h4>Day ${index+1} - ${item.startPoint} to ${item.endPoint}</h4>
                        <h4 class="location">Attractions : ${attractions}</h4>
                        <h4 class="location">Distance : ${distance} km</h4>
                        <h4 class="location">Carry : ${carry}</h4>
                        <img src=${item.RTripDayImage} alt="Image not provided.">
    
                        <p>${item.notes}</p>
                        </li>`;
                    });

                    $('ul#listItinerary p').removeClass('hidden');
                }

                //listItineraryHTML+= '<h2 class="line"></h2>';

                document.querySelector('ul#listItinerary').innerHTML = listItineraryHTML;

                itineraryShowLink.textContent === 'Collapse Itinerary' ?
                    itineraryShowLink.textContent = 'Expand Itinerary' :
                    itineraryShowLink.textContent = 'Collapse Itinerary';

            }
        }
        itineraryShowFn();

        response.RTripDates.forEach(function(item) {
            //console.log(item);
            var date = item.startDate.day + '/' + item.startDate.month + '/' + item.startDate.year + ' to ' +
                item.toDate.day + '/' + item.toDate.month + '/' + item.toDate.year;

            var dateFinal = new Date();
            dateFinal.setDate(item.startDate.day);
            dateFinal.setMonth(item.startDate.month - 1);
            dateFinal.setYear(item.startDate.year);
            //console.log(dateFinal);
            var today = new Date();

            if (today < dateFinal) {
                document.querySelector('.form-query form select').insertAdjacentHTML('beforeend',
                    '<option>' + date + '</option>');
            }
        });

        $('.form-query form button').click(function(event) {
            event.preventDefault();

            localStorage.setItem('pay_state', response.state);
            localStorage.setItem('pay_minPeople', response.minPeople);
            localStorage.setItem('pay_maxPeople', response.maxPeople);
            localStorage.setItem('pay_dates', JSON.stringify(response.trekDates));
            if (document.querySelector('.form-query form select').value !== "Choose your date") {
                localStorage.setItem('pay_dates_value', document.querySelector('.form-query form select').value);
            } else {
                localStorage.setItem('pay_dates_value', "Choose your date");
            }
            //localStorage.setItem('pay_people', document.getElementById("people").value);
            localStorage.setItem('pay_title', response.trekTitle);
            localStorage.setItem('pay_PricePP', response.pricePerPerson);
            localStorage.setItem('pay_days', response.totalDays);
            localStorage.setItem('pay_location', response.location);

            top.location.href = 'Package.php';
        });
    },
    error: function() {
        console.log('error');
    }
});

// $('.form-query form button').click(function(e) {
//     e.preventDefault();
//     console.log(document.querySelector("#sel").value);
//     var checkboxes = Array.from(document.querySelectorAll('.form-query form input[type="checkbox"]'));
//     var i = 0;
//     var checkValues = [];
//     checkboxes.forEach(function(item) {
//         checkValues[i] = item.checked;
//         i++;
//     })
// });