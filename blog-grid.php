<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true );
    $dateEvent = get_post_meta(get_the_ID(), 'awe_event_meta', true);
    ?>
    <div class="restbeef_blog_item">
        <div class="restbeef_grid_blog_item_image">
            <?php if( !empty( $idVideo ) ): ?>
                <iframe src="https://www.youtube.com/embed/<?php echo $idVideo ?>" width="370" height="350" title="<?php the_title() ?>"></iframe>
            <?php else: ?>
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                <?php endif;?>
            <?php endif ?>
            <div class="restbeef_grid_blog_item_content">
                <h4>
                    <span class="restbeef_up_title"><?php the_title(); ?></span>
                </h4>
                <?php if(!empty($dateEvent)): ?>
                    <ul class="restbeef_grid_post_meta">
                        <li><?php echo date('MM d, Y', strtotime($dateEvent))?></li>
                    </ul>
                <?php else: ?>
                    <ul class="restbeef_grid_post_meta">
                        <li><?php echo the_date() ?></li>
                    </ul>
                <?php endif ?>
            </div>
            <a href="<?php the_permalink()?>"></a>
        </div>
        <a href="<?php the_permalink()?>" class="restbeef_grid_post_more restbeef_button restbeef_button_small restbeef_button_reverse restbeef_button_white">
            <?php _e('Xem Tiếp', 'bookawesome') ?>
        </a>
    </div>
<?php endwhile; endif; ?>
