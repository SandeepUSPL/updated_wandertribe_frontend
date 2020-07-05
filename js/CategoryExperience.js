$('.certify .dropdown>a').html('Experiences<span class="caret"></span>');

$('.holiday-text>h2').text(localStorage.getItem('category'));
if (localStorage.getItem('category').length > 20) {
    $('.holiday-text').css('top', '10px');
}

document.getElementById('pac-input').value = localStorage.getItem('location');

localStorage.getItem('startDate') ? document.getElementById('date').value = localStorage.getItem('startDate') : '';

var dateSearch = localStorage.getItem('startDate');
var dateSearchArr = dateSearch.split('-');
var dateSearchReal = dateSearchArr[2] + '-' + dateSearchArr[1] + '-' + dateSearchArr[0];
//$('.show-exp>h3>span').html(dateSearchReal);

localStorage.getItem('startDate') ?
    $('.show-exp>h3').html(`Available ${localStorage.getItem('category')? localStorage.getItem('category'):'Experience'} on <span>${dateSearchReal}</span> ${ localStorage.getItem('location') ? 'in ' + '<span>'+localStorage.getItem('location')+'</span>' : '' }`) :
    $('.show-exp>h3').html(`Upcoming ${localStorage.getItem('category')? localStorage.getItem('category'):'Experience'} ${ localStorage.getItem('location') ? 'in ' + '<span>'+localStorage.getItem('location')+'</span>' : '' }`);

localStorage.getItem('category') ?
    $('.select-exp button').html(`${ localStorage.getItem('category')}<span class = "caret" ></span>`) :
    $('.select-exp button').html(`Select<span class="caret"></span>`);

$('.select-exp ul>li:even').css('background-color', 'greenyellow');
$('.select-exp ul>li:odd').css('background-color', 'lightseagreen');

$('.show-exp>div.row').html('');

//$('.experiences>div').find('h2').text() === localStorage.getItem('category')

$.ajax({
    "method": 'POST',
    "url": 'https://dev.unfoldingskies.com/api/experience/event_query',
    "headers": {
        "Content-Type": "application/json"
    },
    "data": JSON.stringify({
        'location': localStorage.getItem('location'),
        'category': localStorage.getItem('category').toUpperCase(),
        'startDate': localStorage.getItem('startDate')
    }),
    dataType: 'json',
    beforeSend: function() {
        $('.loader-outer').show();
    },
    success: function(response, textStatus, xhr) {
        $('.loader-outer').hide();
        //console.log(response)

        if (xhr.status == 200 || xhr.status == 201) {
            if (xhr.status == 201) {
                $('.show-exp>h3').html(`Available ${localStorage.getItem('category')? localStorage.getItem('category'): 'Experience'} after <span>${dateSearchReal}</span> as there are no ${localStorage.getItem('category')? localStorage.getItem('category'): 'Experience'} on <span>${dateSearchReal}</span> ${ localStorage.getItem('location') ? 'in ' + '<span>'+localStorage.getItem('location')+'</span>' : '' }`)
            }
            for (resp of response) {
                var upExp = `<div class="col-sm-5" style="padding: 0;">
                <img src="new_img/experiences/rafting.png" id="curr-exp-img">
                </div>
                <div class="col-sm-7 show-exp-detail" id="curr-exp-detail">
                <h1>${resp.eventTitle}</h1>
                <h2>Location: <span>${resp.location}</span></h2>
                <h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</h5>
                <div class="row">
                <div class="col-xs-8">
                    <h2>Duration: ${resp.totalDays}</h2>
                    <h4>By: <span>Organiser Name</span></h4>
                </div>
                <div class="col-xs-4">
                    <h6>From</h6>
                    <h3>₹ ${resp.pricePerPerson}</h3>
                    <button id="${resp._id}" onclick="details(this)">More Details</button>
                </div>
                </div>
                </div>`;

                $('.show-exp>div.row').append(upExp);
                var height = $('#curr-exp-detail').css('height');

                $('#curr-exp-img').css('height', height)
                $('#curr-exp-detail').attr('id', '');
                $('#curr-exp-img').attr('id', '');

            }
        } else {
            $('.show-exp>h3').html('No Experiences Found');

            $('#noPropertyModal').removeClass('fade').addClass('show');

            $('.future-treks').html('');
            $('.noTreksFound').show();

            setTimeout(function() {
                $('#noPropertyModal').removeClass('show').addClass('fade');
            }, 3000);
        }

    },
    error: function() {
        console.log('error occured...');
    }

});

$('.select-exp ul#drop1 li').click(
    function() {
        localStorage.setItem('category', $(this).text());
        $('.select-exp button').html(`${localStorage.getItem('category')}<span class="caret"></span>`);
        search();
    }
);

function details(element) {
    localStorage.setItem('exp_id', element.id);
    top.location.href = 'ExperienceDetail.php';
}

function search() {
    var loc = document.getElementById('pac-input').value;
    var startDate = document.getElementById('date').value;
    localStorage.setItem('location', loc);
    localStorage.setItem('startDate', startDate);
    top.location.href = 'CategoryExperience.php';
}

$('.experiences>div').click(function() {
    var loc = document.getElementById('pac-input').value;
    localStorage.setItem('location', loc);
    var category = $(this).find('h2').text();
    localStorage.setItem('category', category);
    var startDate = document.getElementById('date').value;
    localStorage.setItem('startDate', startDate);
    top.location.href = 'CategoryExperience.php';
});