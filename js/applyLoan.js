function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.fill img')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

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
$('.address-reset').click(function(event) {
    inputManipulation(event, $(this), 'address');
});
$('.scan-reset').click(function(event) {
    inputManipulation(event, $(this), 'scan');
});
$('.statement-reset').click(function(event) {
    inputManipulation(event, $(this), 'statement');
});

document.querySelector('.loan-form button[type="submit"]').addEventListener('click', function(event) {

    event.preventDefault();

    var e_pass_name = document.querySelector('input[name="loan-name"]').value;

    var e_pass_email = document.querySelector('input[name="loan-email"]').value;
    var e_pass_mobile = document.querySelector('input[name="loan-mobile"]').value;

    var my_house = document.querySelector('.address>input').value;
    var my_city = document.querySelector('.address .city').value;
    var my_pin = document.querySelector('.address .pin').value;
    var my_state = document.querySelector('.address select').value;

    var pan_no = document.querySelector('input[name="pan-no"]').value;

    var aadhaar_no = document.querySelector('input[name="aadhaar-no"]').value;

    var loan_amount = document.querySelector('input[name="loan-amount"]').value;

    var emiType = document.querySelector('input[name="emiOption"]').value;

    var bank_holder = document.querySelector('input[name="bank-holder"]').value;
    var bank_name = document.querySelector('input[name="bank-name"]').value;
    var bank_branch = document.querySelector('input[name="bank-branch"]').value;
    var account_no = document.querySelector('input[name="account-no"]').value;
    var confirm_account_no = document.querySelector('input[name="confirm-account-no"]').value;
    var ifsc_code = document.querySelector('input[name="ifsc-code"]').value;

    var bank_address = document.querySelector('.bank-address>input').value;
    var bank_city = document.querySelector('.bank-address .city').value;
    var bank_pin = document.querySelector('.bank-address .pin').value;
    var bank_state = document.querySelector('.bank-address select').value;

    var check_terms = document.querySelector('.check-terms input').checked;

});

$('input[name="loan-mobile"]').blur(function() {
    var Number = $(this).value;
    var IndNum = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;

    if (IndNum.test(Number)) {
        $('.loan-form button[type="submit"]').removeAttr('disabled');
    } else {
        alert('Please enter a valid number');
        $('.loan-form button[type="submit"]').attr('disabled', 'disabled');
    }
});

$('input[name="loan-email"]').blur(function() {
    var email = $(this).value;
    var email_reg =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email_reg.test(email)) {
        $('.loan-form button[type="submit"]').removeAttr('disabled');
    } else {
        alert('Please enter a valid email');
        $('.loan-form button[type="submit"]').attr('disabled', 'disabled');
    }
});