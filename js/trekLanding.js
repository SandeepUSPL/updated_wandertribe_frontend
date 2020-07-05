// the sequence of state name in states & img link in links should be same.
var states = [{ 'Himachal Pradesh': 8 }, { 'Karnataka': 10 }, { 'Kerala': 11 }, { 'Maharashtra': 13 },
    { 'Meghalaya': 15 }, { 'Uttarakhand': 26 }, { 'West Bengal': 27 }, { 'others': 28 }
];

var links = ['new_img/state-bg/himachal.png', 'new_img/state-bg/karnataka.png', 'new_img/state-bg/kerala.png', 'new_img/state-bg/maharashtra.png',
    'new_img/state-bg/meghalaya.png', 'new_img/state-bg/uttarakhand.png', 'new_img/state-bg/westbengal.png', 'new_img/state-bg/others.png'
]

var state = document.getElementsByClassName("state");

for (var i = 0; i < 5; i++) {
    var place = states[i];
    state[i].style.backgroundImage = 'url(' + links[i] + ')';

    var c = state[i].childNodes;
    c[1].innerText = Object.keys(place)[0].toUpperCase();
}

var arrow = document.querySelector("arrow");
var countR = 0;

function previousL() {

    if (countR < 1)
        return;

    for (var i = 0; i < 5; i++) {
        var place = states[i + countR - 1];
        state[i].style.backgroundImage = 'url(' + links[i + countR - 1] + ')';

        var c = state[i].childNodes;
        c[1].innerText = Object.keys(place)[0].toUpperCase();
    }
    countR--;
}

function nextR() {

    if ((countR + 5) < states.length)
        countR++;

    //console.log(JSON.parse(localStorage.getItem("response")).length)

    if ((countR + 5) > states.length)
        return;

    for (var i = 0; i < 5; i++) {
        var place = states[i + countR];
        state[i].style.backgroundImage = 'url(' + links[i + countR] + ')';

        var c = state[i].childNodes;
        c[1].innerText = Object.keys(place)[0].toUpperCase();
    }
}

$('.state').click(function() {
    var bimg = this.style.backgroundImage;
    var bimgArr = bimg.split('"');
    console.log(bimgArr);
    var index = links.indexOf(bimgArr[1]);
    var stateId = Object.values(states[index])[0];
    var stateName = Object.keys(states[index])[0];
    localStorage.setItem('state_id', stateId);
    localStorage.setItem('state_name', stateName);
    console.log(localStorage.getItem('state_name'));
    localStorage.setItem('trekDifficulty', '');
    localStorage.setItem('sort', '');
    top.location.href = 'stateTreks.php';
});

var uptreks, trekDifficulty, trekTitle, trekLocation, trekDays;

$('.future-treks > div.row').html('');

var settings = {
    "url": "https://dev.unfoldingskies.com/api/treks/upcoming_treks",
    "method": "GET",
    "timeout": 0,
    "headers": {
        "Content-Type": "application/json",
        "Authorization": "$2y$10$c1aPWd41DDEDVnsl9E58aeaL.hMHOThloXLsEXwrpbctkOU/hrMem"
    },
    beforeSend: function() {
        $('.loader-outer').show();
    },
    success: function() {
        $('.loader-outer').hide();
    }
};

$.ajax(settings).done(function(response) {
    console.log(response.length);
    diff = "easy";
    for (resp of response) {
        trekDifficulty = resp.difficultyLevel;
        trekTitle = resp.trekTitle;
        trekLocation = resp.location;
        trekDays = resp.totalDays;
        trekImage = resp.trekImage[0];
        if (typeof(trekImage) == "object") {
            trekImage = resp.trekImage[0].url;
        }
        if (typeof(trekImage) == "undefined" || typeof(trekImage) == null) {
            trekImage = "new_img/trek/trek.png";
        }
        maxAltitude = resp.maxAltitude;
        if (maxAltitude == 'null' || maxAltitude == undefined) maxAltitude = "not provided";
        pricePerPerson = resp.pricePerPerson;
        id = resp._id;
        if (diff == 'Moderate') {
            $("#trekDifficulty").attr("id", "Moderate");
        }
        if (diff == 'Hard') {
            $("#trekDifficulty").attr("id", "Hard");
        }
        if (diff == 'Easy') {
            $("#trekDifficulty").attr("id", "Easy");
        }
        uptreks = `<div class="col-xs-6 col-sm-4 col-md-3">
        <h3 id="trekDifficulty">${trekDifficulty}</h3>
        <img src="${trekImage}" class="trek-bg" alt="">
        <div class="white">
        <h2 >${trekTitle}</h2>
        <div class="where">
        <img src="new_img/icons/destination.png" alt="">
        <h4>${trekLocation}</h4>
        </div>
        <div class="fixed-info">
        <div class="extra-info">
        <img src="new_img/trek/up-alt.png" alt="">
        <span>${maxAltitude}</span>
        <img src="new_img/trek/sunny.png" alt="">
        <span>${trekDays}</span>
        <img src="new_img/trek/moon.png" alt="">
        <span>${trekDays-1}</span>
        </div>
        <div class="row" style="margin: 0; display: flex;">
        <div class="col-xs-5">
        <h6>Starting from</h6>
        <h5>INR <span style="color: #039BE5;">${pricePerPerson}</span> </h5>
        </div>
        <div class="col-xs-7">
        <button class="detail-btn">
        <img src="new_img/trek/detail-btn.png" id="${id}" onclick="detail(this)">
        </button> 
        </div>
        </div>
        </div>
        </div>
        </div>`;

        if (trekDifficulty == 'Moderate') {
            diff = 'Moderate';
        }
        if (trekDifficulty == 'Hard') {
            diff = 'Hard';
        }
        if (trekDifficulty == 'Easy') {
            diff = 'Easy';
        }

        $('.future-treks > div.row').append(uptreks);
    }
    if (diff == 'Moderate') {

        $("#trekDifficulty").attr("id", "Moderate");
    }
    if (diff == 'Hard') {
        $("#trekDifficulty").attr("id", "Hard");
    }
    if (diff == 'Easy') {
        $("#trekDifficulty").attr("id", "Easy");
    }
});

function detail(element) {
    localStorage.setItem('_id', element.id);
    console.log(element, element.id);
    top.location.href = 'trekDetail.php';
}