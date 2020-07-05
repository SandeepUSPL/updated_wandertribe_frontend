$('.certify .dropdown>a').html('Travel<span class="caret"></span>');

var monthObj = {
    1: "January",
    2: "February",
    3: "March",
    4: "April",
    5: "May",
    6: "June",
    7: "July",
    8: "August",
    9: "September",
    10: "October",
    11: "November",
    12: "December"
}

$.ajax({
    "method": "POST",
    "url": "https://dev.unfoldingskies.com/api/events/category_events",
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify({
        'eventCategory': localStorage.getItem('event-category')
    }),
    beforeSend: function() {
        $('.future-events').html('');
        $('.loader-outer').show();
    },
    success: function(response, textStatus, xhr) {
        $('.loader-outer').hide();

        console.log(response);
        var upEvent;
        for (resp of response) {
            upEvent =
                `<div class="row">
            <div class="col-xs-2">
            <h6>${monthObj[resp.eventDate.startDate.month]}</h6>
            <h4>${resp.eventDate.startDate.day}</h4>
            </div>
            <div class="col-xs-7">
            <h3>${resp.eventTitle}</h3>
            <div style="display: flex; margin-top: 25px;">
                <span>TIME: 01:00 PM</span>
                <pre>|      ${resp.location}</pre>
            </div>
            </div>
            <div class="col-xs-3">
            <img src="${resp.eventImage}" alt="">
            </div>
            </div>`;

            $('.future-events').append(upEvent);
        }
    },
    error: function() {
        console.log("error");
    }
});

var event = document.getElementsByClassName("event");
var arrow = document.querySelector("arrow");
var categoriesResponse = JSON.parse(localStorage.getItem('event-categories-response'));
var countR = 0;

function previousL() {

    if (countR < 1)
        return;

    for (var i = 0; i < 5; i++) {
        //var place = states[i + countR - 1];
        //event[i].style.backgroundImage = 'url(' + links[i + countR - 1] + ')';

        var c = event[i].children;
        c[1].innerText = categoriesResponse[i + countR - 1].toUpperCase();
    }
    countR--;
}

function nextR() {

    if ((countR + 5) < categories.length)
        countR++;

    if ((countR + 5) >= categories.length)
        return;

    for (var i = 0; i < 5; i++) {
        //var place = states[i + countR];
        //event[i].style.backgroundImage = 'url(' + links[i + countR] + ')';

        var c = event[i].children;
        c[1].innerText = categoriesResponse[i + countR].toUpperCase();
    }
}

$('.event').click(function() {
    if ($(this).attr('id') !== null && $(this).attr('id') !== undefined) {
        localStorage.setItem('event-category', $(this).attr('id').split('-').join(' '));
        top.location.href = 'CategoryTravel.php';
    }
});


if (categoriesResponse.length <= 5) {
    $('img.arrow').hide();

    if (categoriesResponse.length === 1) {
        $('div.event:nth-of-type(1), div.event:nth-of-type(2)').css('visibility', 'hidden');
        $('div.event:nth-of-type(3)').attr('id', categoriesResponse[0]._id.split(' ').join('-'));
        $('div.event:nth-of-type(3) h5').html(categoriesResponse[0]._id.toUpperCase());
    } else if (categoriesResponse.length === 2 || categoriesResponse.length === 3) {
        $('div.event:nth-of-type(1)').css('visibility', 'hidden');

        for (var i = 1, j = 0; i <= categoriesResponse.length; i++, j++) {
            event[i].setAttribute('id', categoriesResponse[j]._id.split(' ').join('-'));
            event[i].style.background = 'blue';
            event[i].style.backgroundImage = categoriesResponse[0].events[0].eventImage;
            var c = event[i].children;
            c[1].innerText = categoriesResponse[j]._id.toUpperCase();
        }
    } else {
        for (var i = 0; i <= categoriesResponse.length; i++) {
            event[i].setAttribute('id', categoriesResponse[i]._id.split(' ').join('-'));
            var c = event[i].children;
            c[1].innerText = categoriesResponse[i]._id.toUpperCase();
        }
    }
}