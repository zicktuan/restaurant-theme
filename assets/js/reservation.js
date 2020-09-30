$(document).ready(function() {

    $('.awe-btn-opend-popup-js').click(function() {
        $('.awe-res-popup-reservation').css('display', 'block')
    });


    $('.awe-close-popup').click(function() {
        $('.awe-res-popup-reservation').css('display', 'none')
    });

    $('.awn-btn-submit-form-reservation').click(function() {

        let reservationDate = $('.awe-reservation-date').val(),
            reservationTime = $('.awe-reservation-time').val(),
            reservationHour = $('.awe-reservation-hour').val(),
            reservationAdult = $('.awe-reservation-adult').val(),
            reservationChild = $('.awe-reservation-child').val(),
            reservationName = $('.awe-reservation-name').val(),
            reservationEmail = $('.awe-reservation-email').val(),
            reservationPhone = $('.awe-reservation-phone').val(),
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
                    reservationHour,
                    reservationAdult,
                    reservationChild,
                    reservationName,
                    reservationEmail,
                    reservationPhone,
                    reservationDesc,
                },
                success: (data) => {
                    console.log(1)
                }
            })
        }



    })
});