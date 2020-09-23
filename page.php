<?php get_header(); ?>
<div class="restbeef_main_wrapper">
    <div class="restbeef_container">
        <div class="restbeef_content_wrapper restbeef_no_sidebar">

            <!-- Content Inner -->
            <div class="restbeef_content">
                <div class="restbeef_tiny">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('page', 'content');  ?>
                    <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
