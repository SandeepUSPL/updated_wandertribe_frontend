$('.certify .dropdown>a').html('Experiences<span class="caret"></span>');

var resizeDetail = function() {
    if (window.innerWidth < 880) {
        console.log('resizeDetaillll');
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

window.onresize = resizeDetail();

$.ajax({
    "method": "POST",
    "url": "https://dev.unfoldingskies.com/api/experience/event_details",
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify({
        "_id": localStorage.getItem('exp_id')
    }),
    beforeSend: function() {
        $('.loader-outer').show();
        //console.log('Hi')
    },
    success: function(response, textStatus, xhr) {
        $('.loader-outer').hide();
        console.log(response);
        var expImage;

        document.querySelector('.trek-pagination>h2').innerHTML =
            `Experiences > ${response.category.toLowerCase()} > <span> Details</span>`;

        expImage = response.eventImage[1];
        if (typeof(expImage) == "object") {
            expImage = response.eventImage;
            var i = 0;
            length = expImage.length;

            var timeOut = function() {
                setTimeout(next, 5000);
            }

            var next = function() {

                var slide = document.getElementById("trip_image");
                var slides = response.eventImage;
                slide.src = response.eventImage[i].url;

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
        if (typeof(expImage) == "string") {
            expImage = response.expImage;
            var i = 0;
            //length = tripImage.length;

            var timeOut = function() {
                setTimeout(next, 5000);
            }

            var next = function() {

                var slide = document.getElementById("trip_image");
                var slides = response.eventImage;
                slide.src = response.eventImage[i];
                timeOut();
                i++;
                if (i >= length) {
                    i = 0;
                };
            };

            next();
            // document.getElementById("trek_image").src = trekImage;
        }

        document.querySelector('.trek-place-detail > h1').textContent = response.eventTitle;
        document.querySelector('.trek-place-detail > h2').innerHTML =
            `<span>Location: </span> ${response.location}`;

        document.querySelector('.trek-place-detail > h2:nth-of-type(2)').textContent =
            `Duration: ${response.totalDays} D`;

        if (response.provided.accommodation === false) {
            $('.inc>div:nth-of-type(1)').css('display', 'none');
        }

        if (response.provided.food === false) {
            $('.inc>div:nth-of-type(2)').css('display', 'none');
        }

        if (response.provided.transport === false) {
            $('.inc>div:nth-of-type(3)').css('display', 'none');
        }

        document.querySelector('.amount h5').textContent = '₹ ' + response.pricePerPerson;

        itineraryShowFn = function() {
            console.log('itineraryShowFn');
            var itineraryShowLink = document.querySelector('a#itineraryShow');

            if (response.eventDayDetails === null || response.eventDayDetails === undefined) {
                document.querySelector('#listItinerary').innerHTML =
                    'Itinerary Details is not provided by company.';
                itineraryShowLink.style.display = 'none';
            } else {
                var listItineraryHTML = '';

                if (itineraryShowLink.textContent === 'Collapse Itinerary') {
                    console.log('Collapse Itinerary');

                    var item = response.eventDayDetails[0];
                    var locations =
                        (item.locations === null || item.locations == undefined) ? 'Not Provided' : item.locations;
                    var transport =
                        (item.transport === null || item.transport == undefined) ? 'Not Provided' : item.transport;
                    var carry =
                        (item.carry === null || item.carry == undefined) ? 'Not Provided' : item.carry;

                    listItineraryHTML = `<li>
					<h4>Day 1 - ${item.title}</h4>
					<h4 class="location">Location : ${locations}</h4>
					<h4 class="location">Transport : ${transport} km</h4>
					<h4 class="location">Carry : ${carry}</h4>
					<img src=${item.eventDayImage} alt="Image not provided.">

					<p>${item.notes}</p>
					</li>`;

                    $('ul#listItinerary p').addClass('hidden');

                    if (response.eventDayDetails.length == 1) {
                        itineraryShowLink.style.display = 'none';
                        return;
                    }
                } else {
                    response.eventDayDetails.forEach(function(item, index) {
                        var locations =
                            (item.locations === null || item.locations == undefined) ? 'Not Provided' : item.locations;
                        var transport =
                            (item.transport === null || item.transport == undefined) ? 'Not Provided' : item.transport;
                        var carry =
                            (item.carry === null || item.carry == undefined) ? 'Not Provided' : item.carry;

                        listItineraryHTML += `<li>
                        <h4>Day ${index+1} - ${item.title}</h4>
                        <h4 class="location">Location : ${locations}</h4>
                        <h4 class="location">Transport : ${transport} km</h4>
                        <h4 class="location">Carry : ${carry}</h4>
                        <img src=${item.eventDayImage} alt="Image not provided.">
    
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

        response.eventDates.forEach(function(item) {
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

        document.getElementById("people").placeholder = response.minPeople;
        document.getElementById("people").value = response.minPeople;

        $('#pmsign-plus').click(function() {
            if (document.getElementById("people").value < response.maxPeople) {
                var val = document.getElementById("people").value;
                var num = +val + 1;
                document.getElementById("people").value = num;
            }
        });

        $('#pmsign-minus').click(function() {
            if (document.getElementById("people").value > response.minPeople) {
                var val = document.getElementById("people").value;
                var num = +val - 1;
                document.getElementById("people").value = num;
            }
        });
    },
    error: function() {
        console.log('error');
    }
});