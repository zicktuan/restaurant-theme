<?php get_header(); ?>
<div class="restbeef_main_wrapper <?php echo (is_front_page() || is_page( 'Contact' ) || is_page( 'Liên hệ' ) || is_page( 'Liên Hệ' )) ? '' : 'restbeef_no_top_padding'?>">
    <div class="restbeef_container">
        <div class="restbeef_content_wrapper restbeef_no_sidebar">

            <!-- Content Inner -->
            <div class="restbeef_content">
                <div class="restbeef_tiny">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('page', 'content');  ?>
                    <?php endwhile; endif; ?>

                    <?php get_template_part('reservation') ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
