<div class="restbeef_footer_widgets">
    <a href="https://demo-storage.com/pm/html/restbeef/#" class="restbeef_back_to_top"><i class="fa fa-chevron-up"></i></a>
    <div class="restbeef_container">
        <div class="row">

            <div class="col-4 align_center">
                <?php
                if (is_active_sidebar('awe-footer-text-area')) {
                    dynamic_sidebar('awe-footer-text-area');
                }
                ?>
            </div>

            <div class="col-4 align_center">
                <?php
                if (is_active_sidebar('awe-footer-social-area')) {
                    dynamic_sidebar('awe-footer-social-area');
                }
                ?>
            </div>

            <div class="col-4 align_center">
                <?php
                if (is_active_sidebar('awe-footer-address-area')) {
                    dynamic_sidebar('awe-footer-address-area');
                }
                ?>
            </div>

        </div>
    </div>
</div>

<div class="restbeef_footer restbeef_container_wide">
    <div class="restbeef_copyright">
        © 2019 Restbeef Steakhouse. All Rights Reserved.
    </div>

</div>

</div>

<?php wp_footer() ?>


</body></html>