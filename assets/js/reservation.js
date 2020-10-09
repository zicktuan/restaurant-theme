$(document).ready(function() {

    $('#datepicker').datepicker();

    $('.awe-time-js').change(function(e) {
        let getVal = $(e.currentTarget).val();

        if (1 == getVal) {
            $('#awe-hour-s').css('display', 'none');
            $('#awe-hour-t').css('display', 'block');
        } else {
            $('#awe-hour-s').css('display', 'block');
            $('#awe-hour-t').css('display', 'none');
        }
    });

    $('.awe-btn-opend-popup-js').click(function() {
        $('.awe-res-popup-reservation').css('display', 'block')
    });

    $('.awe-close-popup-reservation-tk').click(function() {
        $('.awe-res-popup-reservation-thanks').css('display', 'none')
    });


    $('.awe-close-popup').click(function() {
        $('.awe-res-popup-reservation').css('display', 'none')
    });

    $('.awe-close-popup-tk').click(function() {
        $('.awe-res-popup-thanks').css('display', 'none');
        location.reload();
    });

    $('.awn-btn-submit-form-reservation').click(function(e) {

        let reservationDate = $('.awe-reservation-date').val(),
            reservationTime = $('.awe-reservation-time').val(),
            reservationHours = $('.awe-reservation-hour-s').val(),
            reservationHourt = $('.awe-reservation-hour-t').val(),
            reservationAdult = $('.awe-reservation-adult').val(),
            reservationChild = $('.awe-reservation-child').val(),
            reservationName = $('.awe-reservation-name').val(),
            reservationEmail = $('.awe-reservation-email').val(),
            reservationPhone = $('.awe-reservation-phone').val(),
            reservationBranch = $('.awe-reservation-cs').val(),
            reservationDesc = $('.awe-reservation-desc').val();

        if( '' ===  reservationDate ) {
            $('.restbeef_input_placeholder').addClass('awe-required');
        } else {
            $('.restbeef_input_placeholder').removeClass('awe-required');
        }

        if( '' ===  reservationName ) {
            $('.awe-reservation-name').addClass('awe-required');
        } else {
            $('.awe-reservation-name').removeClass('awe-required');
        }

        if( '' ===  reservationEmail ) {
            $('.awe-reservation-email').addClass('awe-required');
        } else {
            $('.awe-reservation-email').removeClass('awe-required');
        }

        if( '' ===  reservationPhone ) {
            $('.awe-reservation-phone').addClass('awe-required');
        } else {
            $('.awe-reservation-phone').removeClass('awe-required');
        }

        if ('' !==  reservationDate && '' !==  reservationName && '' !==  reservationEmail && '' !==  reservationPhone) {
            $.ajax({
                type: 'post',
                url: awe_admin.url + 'admin-ajax.php',
                data: {
                    action: 'awe_reservation',
                    reservationDate,
                    reservationTime,
                    reservationHours,
                    reservationHourt,
                    reservationAdult,
                    reservationChild,
                    reservationName,
                    reservationEmail,
                    reservationPhone,
                    reservationBranch,
                    reservationDesc,
                },
                success: (data) => {
                    let dataResult = JSON.parse(data);
                    if (true === dataResult) {
                        $('.awe-res-popup-reservation').css('display', 'none');
                        $('.awe-res-popup-reservation-thanks').css('display', 'block')
                    }
                }
            })
        }

    });


    $('.awe-send-mess-js').click(function() {
        let getName = $('.awe-mess-name-js').val(),
            getEmail = $('.awe-mess-email-js').val(),
            getDesc = $('.awe-mess-desc-js').val();

        if( '' ===  getName ) {
            $('.awe-mess-name-js').addClass('awe-required');
        } else {
            $('.awe-mess-name-js').removeClass('awe-required');
        }

        if( '' ===  getEmail ) {
            $('.awe-mess-email-js').addClass('awe-required');
        } else {
            $('.awe-mess-email-js').removeClass('awe-required');
        }

        if( '' ===  getDesc ) {
            $('.awe-mess-desc-js').addClass('awe-required');
        } else {
            $('.awe-mess-desc-js').removeClass('awe-required');
        }

        let data = [];
        data['name'] = getName;
        data['email'] = getEmail;
        data['desc'] = getDesc;

        if ('' !==  getName && '' !==  getEmail && '' !==  getDesc) {
            loadAjax(data)
        }
    });

    $('.awe-contact-send-mess-js').click(function() {
        let getName = $('.awe-contact-name-mess-js').val(),
            getEmail = $('.awe-contact-email-mess-js').val(),
            getDesc = $('.awe-contact-send-desc-js').val();

        if( '' ===  getName ) {
            $('.awe-contact-name-mess-js').addClass('awe-required');
        } else {
            $('.awe-contact-name-mess-js').removeClass('awe-required');
        }

        if( '' ===  getEmail ) {
            $('.awe-contact-email-mess-js').addClass('awe-required');
        } else {
            $('.awe-contact-email-mess-js').removeClass('awe-required');
        }

        if( '' ===  getDesc ) {
            $('.awe-contact-send-desc-js').addClass('awe-required');
        } else {
            $('.awe-contact-send-desc-js').removeClass('awe-required');
        }

        let data = [];
        data['name'] = getName;
        data['email'] = getEmail;
        data['desc'] = getDesc;

        if ('' !==  getName && '' !==  getEmail && '' !==  getDesc) {
            loadAjax(data)
        }
    });

    function loadAjax(argsData) {
        let name = argsData['name'];
        let email = argsData['email'];
        let desc = argsData['desc'];
        $.ajax({
            type: 'post',
            url: awe_admin.url + 'admin-ajax.php',
            data: {
                action: 'awe_submit_mess',
                name,
                email,
                desc,
            },
            success: (data) => {
                let dataResult = JSON.parse(data);
                if (true === dataResult) {
                    $('.awe-res-popup-thanks').css('display', 'block')
                }
            }
        })
    }
});