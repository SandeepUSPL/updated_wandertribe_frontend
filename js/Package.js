document.querySelector('.trek-pagination h2').innerHTML =
    `Treks > ${localStorage.getItem('pay_state')} > ${localStorage.getItem('pay_title')} > <span>Package Details</span>`;

document.querySelector('.restrict-people h5:nth-of-type(1)').textContent =
    `Min - ${localStorage.getItem('pay_minPeople')}`;
document.querySelector('.restrict-people h5:nth-of-type(2)').textContent =
    `Max - ${localStorage.getItem('pay_maxPeople')}`;

// JSON.parse(localStorage.getItem('pay_dates')).forEach(function(item) {
//     //console.log(item);
//     var date = item.startDate.day + '/' + item.startDate.month + '/' + item.startDate.year + ' to ' +
//         item.toDate.day + '/' + item.toDate.month + '/' + item.toDate.year;
//
//     var dateFinal = new Date();
//     dateFinal.setDate(item.startDate.day);
//     dateFinal.setMonth(item.startDate.month - 1);
//     dateFinal.setYear(item.startDate.year);
//     //console.log(dateFinal);
//     var today = new Date();
//     if (today < dateFinal) {
//         document.querySelector('.form-query form select').insertAdjacentHTML('beforeend',
//             '<option>' + date + '</option>');
//     }
// });
JSON.parse(localStorage.getItem('pay_dates')).map(function(dates) {
    var dateFinal = new Date(dates.startDate);
    var today = new Date();
    if (today < dateFinal) {
        console.log("---");
        console.log(dates.startDate + '+' + dates.toDate);
        $('#sel')
            .append($("<option></option>")
                .attr("id", dates.itemId)
                .text(dates.startDate + ' to ' + dates.toDate));
    }

});
document.querySelector('.form-query form select').value =
    localStorage.getItem('pay_dates_value');

document.getElementById("people").value =
    localStorage.getItem('pay_people');

document.querySelector('.packPlace>h1').innerHTML =
    `${localStorage.getItem('pay_title')} @₹ ${localStorage.getItem('pay_PricePP')} <span> per adult only! </span>`;

document.querySelector('.packPlace>div>div>span').textContent =
    `${localStorage.getItem('pay_days')} D`;

document.querySelector('.packPlace>div>div:nth-of-type(2)>span').textContent =
    `${+localStorage.getItem('pay_days')-1} N`;

document.querySelector('.packPlace>div>div:nth-of-type(3)>span').textContent =
    `${localStorage.getItem('pay_location')}`;

document.querySelector('.packPlace>h2').innerHTML =
    (document.querySelector("#sel").value !== "Choose your date") ?
    `(From ${document.querySelector("#sel").value})` : '';

document.querySelector('#price-breakdown').innerHTML =
    `Adult ${document.getElementById("people").value} x ${localStorage.getItem('pay_PricePP')}`;

var price = document.getElementById("people").value * localStorage.getItem('pay_PricePP');
document.querySelector('#total-price').innerHTML =
    '₹' + (price);

document.querySelector('.packPlace .accomodation h5').innerHTML =
    `Total Payable amount including 5% GST = <span> ₹ ${1.05*price}</span>`;

document.querySelector("#sel").addEventListener('change', function(e) {
    document.querySelector('.packPlace>h2').innerHTML =
        (document.querySelector("#sel").value !== "Choose your date") ?
        `(From ${document.querySelector("#sel").value})` : '';
})

$('#plusCircle').click(function() {
    var max = localStorage.getItem('pay_maxPeople');
    // console.log(typeof (max));
    if (document.getElementById("people").value < parseInt(max)) {
        var val = document.getElementById("people").value;
        var num = +val + 1;

        document.getElementById("people").value = num;
    }
})

$('#minusCircle').click(function() {
    var min = localStorage.getItem('pay_minPeople');
    if (document.getElementById("people").value > parseInt(min)) {
        var val = document.getElementById("people").value;
        var num = +val - 1;
        document.getElementById("people").value = num;
    }
});

document.querySelector('.packPlace button').addEventListener('click', function() {
    localStorage.setItem('grand_total', document.querySelector('.packPlace .accomodation h5 span').textContent);
    localStorage.setItem('trek_people', document.getElementById("people").value);
    top.location.href = 'Traveller.php';
})