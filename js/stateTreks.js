if(localStorage.getItem('trekDifficulty') !== null){
    $('#btn_'+localStorage.getItem('trekDifficulty').toLowerCase())
        .css({color: "#024959", "background-color": "#FFFFFF"});
}

console.log(localStorage);
window.addEventListener('load', function(){ 
var uptreks, trekDifficulty, trekTitle, trekLocation, trekDays, id;

document.querySelector('.trek-text > h3').textContent = localStorage.getItem('state_name');
console.log(localStorage.getItem('state_name'))
//$('.future-treks > div.row').html('');
$('.noTreksFound').hide();

var stateId =  localStorage.getItem('state_id');
var sort = localStorage.getItem('sort');
var dataObj = {'state_id': +stateId,'sort':+sort};//stateId converted to no.
var difficulty = localStorage.getItem('trekDifficulty');
switch (difficulty) {
    case 'Easy':
        // $("#btn_easy").attr('color','#024959');
        // $("#btn_easy").attr( 'background-color', '#FFFFFF');
        var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['trekDifficulty'] = difficulty;

    case 'Moderate':
        // $("#btn_moderate").attr('color','#024959');
        // $("#btn_moderate").attr( 'background-color', '#FFFFFF');
        var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['trekDifficulty'] = difficulty;
    case 'Hard':
        // $("#btn_hard").attr('color','#024959');
        // $("#btn_hard").attr( 'background-color', '#FFFFFF');
        var difficulty = localStorage.getItem('trekDifficulty');
        dataObj['trekDifficulty'] = difficulty;
}
console.log(dataObj);

var settings = {
    "url": "https://dev.unfoldingskies.com/api/treks/trek_by_state",
    "method": "POST",
    "timeout": 0,
    "headers": {
        "Content-Type": "application/json",
        "Authorization": "$2y$10$c1aPWd41DDEDVnsl9E58aeaL.hMHOThloXLsEXwrpbctkOU/hrMem"
    },
    "data": JSON.stringify(dataObj),
    beforeSend: function(){
        $('.loader-outer').show();
    },
    success: function(){
        $('.loader-outer').hide();
    }
};

$.ajax(settings).done(function(response) {
    console.log(response.length);
    if (response.length === 0) {
        $('#noPropertyModal').removeClass('fade').addClass('show');

        $('.future-treks').html('');
        $('.noTreksFound').show();

        setTimeout(function(){
            $('#noPropertyModal').removeClass('show').addClass('fade');
        }, 3000);
    }
    diff = "easy";
    for (resp of response) {
        trekDifficulty = resp.difficultyLevel;
        trekTitle = resp.trekTitle;
        trekLocation = resp.location;
        trekDays = resp.totalDays;
        trekImage = resp.trekImage[0];
        if(typeof (trekImage) == "object"){
            trekImage = resp.trekImage[0].url;
        }
        if(typeof (trekImage) == "undefined" || typeof (trekImage) == null){
            trekImage = "new_img/trek/trek.png";
        }
        maxAltitude = resp.maxAltitude;
        if(maxAltitude == 'null' || maxAltitude == undefined) maxAltitude = "not provided";
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
        <img src="${trekImage}" class="trek-bg">
        <div class="white">
        <h2 >${trekTitle}</h2>
        <div class="where">
        <img src="new_img/icons/destination.png" alt="">
        <h4>${trekLocation}</h4>
        </div>
        <div class="fixed-info">
        <div class="extra-info">
        <img src="new_img/trek/up-alt.png" alt="">
        <span>${maxAltitude} ft</span>
        <img src="new_img/trek/sunny.png" alt="">
        <span>${trekDays} D</span>
        <img src="new_img/trek/moon.png" alt="">
        <span>${trekDays-1} N</span>
        </div>
        <div class="row" style="margin: 0; display: flex;">
        <div class="col-xs-5">
        <h6>Starting from</h6>
        <h5>INR<span style="color: #039BE5; font-weight: 900;">${pricePerPerson}</span> </h5>
        </div>
        <div class="col-xs-7">
        <button class="detail-btn"><img src="new_img/trek/detail-btn.png" id="${id}" onclick="detail(this)" ></button> 
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

});


function detail(element){
    localStorage.setItem('_id', element.id);
    console.log(element, element.id);
    top.location.href = 'trekDetail.php';
}

function asc() {
    localStorage.setItem('sort',0);
    top.location = "stateTreks.php";
}

function desc() {
    localStorage.setItem('sort',1);
    top.location = "stateTreks.php";

}

function difficulty(_this) {
    if(_this.id == 'btn_easy'){
        localStorage.setItem('trekDifficulty','Easy')
        top.location = "stateTreks.php";
    }
    if(_this.id == 'btn_moderate'){
        localStorage.setItem('trekDifficulty','Moderate');
        top.location = "stateTreks.php";
    }
    if(_this.id == 'btn_hard'){
        localStorage.setItem('trekDifficulty','Hard')
        top.location = "stateTreks.php";
    }
    // $("#btn_easy").attr('color','#024959');
    // style="color: #024959; background-color: #FFFFFF;"
}

