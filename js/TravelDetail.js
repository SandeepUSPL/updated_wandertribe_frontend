$('.certify .dropdown>a').html('Travel<span class="caret"></span>');

var resizeDetail = function() {
    if (window.innerWidth < 880) {
        console.log('resizeDetaillll');
        $('.trek-place > div:first-child').removeClass('col-sm-8').addClass('col-sm-7');
        $('.trek-place > div:last-child').removeClass('col-sm-4').addClass('col-sm-5');

        //$('.impDetail .form-query').removeClass('col-sm-offset-1 col-sm-4').addClass('col-sm-5');
    } else {
        $('.trek-place > div:first-child').removeClass('col-sm-7').addClass('col-sm-8');
        $('.trek-place > div:last-child').removeClass('col-sm-5').addClass('col-sm-4');
        //$('.impDetail .form-query').removeClass('col-sm-5').addClass('col-sm-4 col-sm-offset-1');
    }
}
window.onload = resizeDetail();

window.onresize = resizeDetail();

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
    "url": "https://dev.unfoldingskies.com/api/events/event_details",
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify({
        "_id": localStorage.getItem('event_id')
    }),
    beforeSend: function() {
        $('.loader-outer').show();
        //console.log('Hi')
    },
    success: function(response, textStatus, xhr) {
        $('.loader-outer').hide();
        //console.log(response);

        document.querySelector('.trek-pagination>h2').innerHTML =
            `Events > ${response.eventCategory} > <span> Details</span>`;

        document.querySelector('.trek-place-detail h1').textContent = response.eventTitle;
        document.querySelector('.trek-place-detail h2').innerHTML =
            `<span>Location: </span> ${response.location}`;

        document.querySelector('.trek-place-detail h6').textContent =
            monthObj[response.eventDate.startDate.month];
        document.querySelector('.trek-place-detail h4').textContent =
            response.eventDate.startDate.day;
        document.querySelector('.trek-place-detail h6:nth-of-type(2)').textContent =
            response.eventDate.startDate.year;

        if (response.eventTitle.length > 15 || response.location.length > 40) {
            $('.guide-amount').addClass('guide-amount-dynamic').removeClass('.guide-amount');
        }

        $('form.form-query button').click(function(event) {
            event.preventDefault();

            /*
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
            */

            top.location.href = 'Package.php';
        });
    },
    error: function() {
        console.log('error');
    }
});

document.getElementById("people").placeholder = 0;
document.getElementById("people").value = 0;

$('#pmsign-plus').click(function() {
    var val = document.getElementById("people").value;
    var num = +val + 1;
    document.getElementById("people").value = num;

});

$('#pmsign-minus').click(function() {
    var val = document.getElementById("people").value;
    var num = +val - 1;
    document.getElementById("people").value = num;
});