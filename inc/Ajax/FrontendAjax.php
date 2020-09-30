<?php

    class FrontendAjax {

        public function __construct()
        {
            $argsAction = [
                'awe_reservation'  => array($this, 'aweReservation'),
            ];

            foreach ($argsAction as $key => $value) {
                add_action('wp_ajax_'.$key, $value);
                add_action('wp_ajax_nopriv_'.$key, $value);
            }
        }

        public function aweReservation() {
            $reservationDate = $_POST['reservationDate'];
            $reservationName = $_POST['reservationName'];
            $reservationEmail = $_POST['reservationEmail'];
            $reservationPhone = $_POST['reservationPhone'];
            $reservationTime = !empty($_POST['reservationTime']) ? $_POST['reservationTime'] : '';
            $reservationHour = !empty($_POST['reservationHour']) ? $_POST['reservationHour'] : '';
            $reservationAdult = !empty($_POST['reservationAdult']) ? $_POST['reservationAdult'] : 0;
            $reservationChild = !empty($_POST['reservationChild']) ? $_POST['reservationChild'] : 0;
            $reservationDesc = !empty($_POST['reservationDesc']) ? $_POST['reservationDesc'] : '';

            $argsData = array(
                'date' => $reservationDate,
                'name' => $reservationName,
                'mail' => $reservationEmail,
                'phone' => $reservationPhone,
                'time' => $reservationTime,
                'hour' => $reservationHour,
                'adult' => $reservationAdult,
                'child' => $reservationChild,
                'content' => $reservationDesc,
                'status' => 0,
            );

            $dataReservation = array(
                'post_content'          => $reservationDesc,
                'post_title'            => $reservationName,
                'post_type'             => 'post',
            );

            if($id = wp_insert_post($dataReservation)) {
                update_post_meta($id, 'awe_reservation', $argsData);
                echo 'ok';
            }
        }
    }