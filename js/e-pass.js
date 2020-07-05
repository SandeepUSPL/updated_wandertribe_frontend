/* $('input[name="e-pass-photo"], .dob>div>input, input[name="gov-id-upload"], input[name="vehicle-rc"]').click(function() {
    $(this).attr('type', 'file');
    $(this).attr('accept', "application/pdf");
    $(this).css('background-color', 'white');
});
*/

/* $('.dob>div>input').click(function() {
    $(this).attr('type', 'file');
    $(this).attr('accept', "application/pdf");
});
$('input[name="gov-id-upload"]').click(function() {
    $(this).attr('type', 'file');
    $(this).attr('accept', "application/pdf");
});
$('input[name="vehicle-rc"]').click(function() {
    $(this).attr('type', 'file');
    $(this).attr('accept', "application/pdf");
});
*/
$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready(function() {
    $('.upload p').hide();
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        console.log("teste");
        $(this).closest('.upload').find('p').show();
        var input_label = $(this).closest('.input-group').find('.file-input-label'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input_label.length) {
            input_label.text(log);
        } else {
            if (log) alert(log);
        }
    });
});

function inputManipulation(event, target, id) {
    event.preventDefault();
    $('#' + id + '_input_group').val('');
    target.closest('.input-group').find('.file-input-label').text('');
    target.closest('.upload').find('p').hide();
}
$('.photo-reset').click(function(event) {
    inputManipulation(event, $(this), 'photo');
});
$('.dob-reset').click(function(event) {
    inputManipulation(event, $(this), 'dob');
});
$('.id-reset').click(function(event) {
    inputManipulation(event, $(this), 'id');
});
$('.rc-reset').click(function(event) {
    inputManipulation(event, $(this), 'rc');
});

document.querySelector('.e-pass button[type="submit"]').addEventListener('click', function(event) {

    event.preventDefault();

    var request_type = document.querySelector('.request-type').value;
    var e_pass_name = document.querySelector('input[name="e-pass-name"]').value;

    var e_pass_gender = document.querySelector('.e-pass-gender').value;
    var e_pass_mobile = document.querySelector('input[name="e-pass-mobile"]').value;
    var e_pass_email = document.querySelector('input[name="e-pass-email"]').value;

    var e_pass_dob = document.querySelector('.dob>input').value;

    var from_house = document.querySelector('.travelling-from>input').value;
    var from_city = document.querySelector('.travelling-from .city').value;
    var from_pin = document.querySelector('.travelling-from .pin').value;
    var from_state = document.querySelector('.travelling-from select').value;

    var to_house = document.querySelector('.travelling-to>input').value;
    var to_city = document.querySelector('.travelling-to .city').value;
    var to_pin = document.querySelector('.travelling-to .pin').value;
    var to_state = document.querySelector('.travelling-to select').value;

    var gov_id = document.querySelector('.gov-id').value;
    var gov_id_no = document.querySelector('input[name="gov-id-no"]').value;

    var vehicle_no = document.querySelector('input[name="vehicle-no"]').value;

    var additional_person = document.querySelector('.additional-person input').value;

    var pass_valid_from = document.querySelector('.pass-validity>div input').value;
    var pass_valid_to = document.querySelector('.pass-validity>div:nth-of-type(2) input').value;

    var ePass_required = document.querySelector('.ePass-required').value;

    var check_terms = document.querySelector('.check-terms input').checked;

});

$('input[name="e-pass-mobile"]').blur(function() {
    var Number = $(this).value;
    var IndNum = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;

    if (IndNum.test(Number)) {
        $('.e-pass button[type="submit"]').removeAttr('disabled');
    } else {
        alert('Please enter a valid number');
        $('.e-pass button[type="submit"]').attr('disabled', 'disabled');
    }
});

$('input[name="e-pass-email"]').blur(function() {
    var email = $(this).value;
    var email_reg =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email_reg.test(email)) {
        $('.e-pass button[type="submit"]').removeAttr('disabled');
    } else {
        alert('Please enter a valid email');
        $('.e-pass button[type="submit"]').attr('disabled', 'disabled');
    }
});