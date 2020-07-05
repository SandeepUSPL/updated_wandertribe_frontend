// the sequence of state name in states & img link in links should be same.
var states = [{ 'Andhra Pradesh': 0 }, { 'Arunachal  Pradesh': 1 }, { 'Assam': 2 }, { 'Bihar': 3 },
    { 'Chhattisgarh': 4 }, { 'Goa': 5 }, { 'Gujarat': 6 }, { 'Haryana': 7 }, { 'Himachal Pradesh': 8 },
    { 'Jharkhand': 9 }, { 'Karnataka': 10 }, { 'Kerala': 11 }, { 'Madhya Pradesh': 12 }, { 'Maharashtra': 13 },
    { 'Manipur': 14 }, { 'Meghalaya': 15 }, { 'Mizoram': 16 }, { 'Nagaland': 17 }, { 'Odisha': 18 },
    { 'Punjab': 19 }, { 'Rajasthan': 20 }, { 'Sikkim': 21 }, { 'Tamil Nadu': 22 }, { 'Hyderabad': 23 },
    { 'Tripura': 24 }, { 'Uttar Pradesh': 25 }, { 'Uttarakhand': 26 }, { 'West Bengal': 27 },
    { 'Andaman and Nicobar Islands': 28 }, { 'Chandigarh': 29 }, { 'Dadra and Nagar Haveli and Daman and Diu': 30 }, { 'Delhi': 31 }, { 'Jammu and Kashmir': 32 },
    { 'Lakshadweep': 33 }, { 'Ladakh': 34 }, { 'Puducherry': 35 }
];

var links = ["new_img/road-trip/AndhraPradesh.png", "new_img/road-trip/arunachal.png", "new_img/road-trip/assam.png",
    "new_img/road-trip/bihar.png", "new_img/road-trip/chhattisgarh.png", "new_img/road-trip/goa.png",
    "new_img/road-trip/gujarat.png", "new_img/road-trip/haryana.png", "new_img/road-trip/himachal.png",
    "new_img/road-trip/jharkhand.png", "new_img/road-trip/karnataka.png", "new_img/road-trip/kerela.png",
    "new_img/road-trip/MadhyaPradesh.png", "new_img/road-trip/maharashtra.png", "new_img/road-trip/manipur.png",
    "new_img/road-trip/meghalaya.png", "new_img/road-trip/mizoram.png", "new_img/road-trip/nagaland.png",
    "new_img/road-trip/odisha.png", "new_img/road-trip/punjab.png", "new_img/road-trip/rajasthan.png",
    "new_img/road-trip/sikkim.png", "new_img/road-trip/TamilNadu.png", "new_img/road-trip/hyderabad.png",
    "new_img/road-trip/tripura.png", "new_img/road-trip/UttarPradesh.png", "new_img/road-trip/uttarakhand.png",
    "new_img/road-trip/WestBengal.png", "new_img/road-trip/AndamanandNicobarIslands.png", "new_img/road-trip/chandigarh.png",
    "new_img/road-trip/dadra.png", "new_img/road-trip/Delhi.png", "new_img/road-trip/jammu.png",
    "new_img/road-trip/lakshwadeep.png", "new_img/road-trip/ladakh.png", "new_img/road-trip/puducherry.png"
]

function details(element) {
    localStorage.setItem('state_id', element.id);
    localStorage.setItem('state_name', element.children[1].textContent);
    localStorage.setItem("road_type", '');
    top.location.href = 'StateTrips.php';
}
var upTrips;
$('.future-treks > div.row').html('');
states.forEach(function(item, index) {
        upTrips = `<div class="col-xs-6 col-sm-4 col-md-3" id=${index} 
            onclick="details(this)">
            <img src=${links[index]} class="trek-bg">
            <h2>${Object.keys(item)[0]}</h2>   
            </div>`
        $('.future-treks > div.row').append(upTrips);
    })
    /*var state = document.getElementsByClassName("state");

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
        localStorage.setItem("road_type",'')
        console.log(localStorage.getItem('state_name'));

        top.location.href = 'stateTrips.php';
    });
    */

/*var upTrips;
var settings = {
    "url": "https://dev.unfoldingskies.com/api/RTrips/upcoming_RTrips",
    "method": "GET",
    "timeout": 0,
    "headers": {
        "Content-Type": "application/json"
    },
    beforeSend: function() {
        $('.loader-outer').show();
    },
    success: function() {
        $('.loader-outer').hide();
    }
};

$.ajax(settings).done(function(response) {
    console.log(response);
    $('.future-treks > div.row').html('');

    for (resp of response) {
        console.log(resp.RTripTitle);
        console.log(resp._id);

        var trekImage = resp.RTripImage;
        if (typeof(trekImage) == "undefined" || typeof(trekImage) == null) {
            upTrips = `<div class="col-xs-6 col-sm-4 col-md-3" id=${resp._id}
            onclick="details(this)">
            <img src="new_img/road-trip/trip.png" class="trek-bg">
            <h2>${resp.RTripTitle}</h2>   
            </div>`;
        } else if (resp.RTripImage.length != 0) {
            trekImage = resp.RTripImage[0];
            if (typeof(trekImage) == "object") {
                var n = Math.floor((Math.random() * 4) + 1);
                trekImage = resp.RTripImage[n].url;
                upTrips = `<div class="col-xs-6 col-sm-4 col-md-3" id=${resp._id} 
                onclick="details(this)">
                <img src=${trekImage} class="trek-bg">
                <h2>${resp.RTripTitle}</h2>   
                </div>`;
            } else if (typeof(trekImage) == "string") {
                //trekImage = resp.RTripImage[0].url;
                upTrips = `<div class="col-xs-6 col-sm-4 col-md-3" id=${resp._id} 
                onclick="details(this)">
                <img src=${resp.RTripImage[0].split(' ').join('%20')} class="trek-bg">
                <h2>${resp.RTripTitle}</h2>   
                </div>`;
                console.log(typeof resp.RTripImage[0]);
            }

        } else {
            upTrips = `<div class="col-xs-6 col-sm-4 col-md-3" id=${resp._id} 
            onclick="details(this)">
            <img src="new_img/road-trip/trip.png" class="trek-bg">
            <h2>${resp.RTripTitle}</h2>   
            </div>`;
        }

        $('.future-treks > div.row').append(upTrips);
    }
});*/