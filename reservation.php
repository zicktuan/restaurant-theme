<div class="awe-res-popup-reservation scrollbar-measure">
    <div class="awe-res-popup-reservation-content">

        <div class="restbeef_block restbeef_js_margin restbeef_intro_block">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 align_center awe-desc-wrap-css">
                    <p>If you plan your leisure in advance and do not want to get into a situation when the planned dinner is canceled due to the lack of free seats, reserve a table in advance. You can reserve a table by filling out the form below.</p>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
            <div class="restbeef_block_inner awe-form-reservation-wrap">
                <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                    <div class="row">
                        <div class="col-4">
                            <input type="date" data-placeholder="Ngày đặt bàn" class="awe-reservation-date" name="awe-reservation-date"/>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <select class="awe-reservation-time" name="awe-reservation-time">
                                        <option value="0">Sáng</option>
                                        <option value="1">Tối</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="awe-reservation-hour" name="awe-reservation-hour">
                                        <option value="11h00">11:00</option>
                                        <option value="11h30">11:30</option>
                                        <option value="12h00">12:00</option>
                                        <option value="12h30">12:30</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" min="1" class="awe-reservation-adult" name="awe-reservation-adult" placeholder="Số người lớn">
                                </div>
                                <div class="col-6">
                                    <input type="number" min="0" class="awe-reservation-child" name="awe-reservation-child" placeholder="Số trẻ em">
                                </div>
                            </div>
                        </div><!-- .col-4 -->
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-4">
                            <input type="text" placeholder="Họ và tên" class="awe-reservation-name" name="awe-reservation-name"/>
                        </div><!-- .col-4 -->
                        <div class="col-4">
                            <input type="email" placeholder="Địa chỉ email" class="awe-reservation-email" name="awe-reservation-email"/>
                        </div><!-- .col-4 -->
                        <div class="col-4">
                            <input type="tel" placeholder="Số điện thoại" class="awe-reservation-phone" name="awe-reservation-phone"/>
                        </div><!-- .col-4 -->
                    </div><!-- .row -->
                    <textarea placeholder="Yêu cầu thêm" class="awe-reservation-desc" name="awe-reservation-desc"></textarea>
                    <input type="submit" class="awn-btn-submit-form-reservation" value="Đặt Bàn"/>
                </form>
            </div>
        </div>

        <a href="#" class="close awe-close-popup"></a>
    </div>
<!--    <div class="scrollbar" id="style-1">-->
<!--        <div class="force-overflow"></div>-->
<!--    </div>-->
</div>