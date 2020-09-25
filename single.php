<?php get_header();?>

    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_right_sidebar">

                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <?php $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true ); ?>
                            <?php if ( !empty( $idVideo ) ): ?>
                                <div class="restbeef_single_post_pf restbeef_blog_pf_video_wrapper">
                                    <iframe width="840" height="472" src="https://www.youtube.com/embed/<?php echo $idVideo ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            <?php endif; ?>


                            <div class="restbeef_post_content">
                                <?php the_content() ?>
                            </div>

                        <?php endwhile; ?>
                        <?php endif; ?>

                        <?php
                        $tags = get_the_tags(get_the_ID());
                        $i = 0;
                        $countTag = count($tags);
                        ?>
                        <?php if ( !empty( $tags ) ): ?>
                            <div class="restbeef_post_tags">
                                <?php foreach ($tags as $tag): ?>
                                    <?php if(++$i !== $countTag): ?>
                                        <a href="<?php echo get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                        <span class="delimiter">,</span>
                                    <?php else: ?>
                                        <a href="<?php echo get_tag_link( $tag->term_id ) ?>" rel="tag"><?php echo $tag->name ?></a>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        <?php endif; ?>

                        <div class="restbeef_post_navigation">
                            <div class="restbeef_prev_post_wrapper">
                                <span class="restbeef_prev_post_button restbeef_post_nav_button">
                                    <?php previous_post_link('<i class="fa fa-arrow-left"></i> &nbsp;&nbsp;&nbsp; %link ', 'Bài Trước', 'yes'); ?>
                                </span>
                            </div>

                            <div class="restbeef_next_post_wrapper">
                                <span class="restbeef_next_post_button restbeef_post_nav_button">
                                    <?php next_post_link('%link &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-right"></i>   ', 'Bài Tiếp Theo', 'yes'); ?>
                                </span>
                            </div>

                        </div>

                        <div class="restbeef_comments_cont">
                            <div class="restbeef_comments_wrapper">
                                <h2 class="align_center">
                                    <span class="restbeef_up_title">People Say</span>
                                    Post Comments
                                </h2>

                                <?php if (comments_open() && !post_password_required()) {comments_template('', true);}?>

                            </div>
                        </div>

                        <div class="restbeef_block restbeef_single_recents">
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 10px 0" style="padding: 0px 0px 10px;">
                                <span class="restbeef_up_title">You May Like</span>
                                Recent Posts
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_posts restbeef_grig_2columns">
                                    <?php
                                        $args = array(
                                            'numberposts' => 2
                                        );
                                        $latestPosts = get_posts( $args );
                                    ?>
                                    <?php if (!empty($latestPosts)): ?>
                                        <?php foreach ($latestPosts as $post):
                                            $thumbnail = get_the_post_thumbnail_url($post->ID, '');
                                            ?>
                                            <div class="restbeef_recent_post">
                                                <div class="restbeef_recent_post_image">
                                                    <a href="<?php echo get_the_permalink($post->ID)?>">
                                                        <img src="<?php echo esc_url($thumbnail) ?>" alt="<?php echo $post->post_title ?>"/>
                                                    </a>
                                                </div>
                                                <div class="restbeef_recent_post_content">
                                                    <div class="restbeef_recent_post_date">
                                                        25 Apr
                                                    </div>
                                                    <h5>
                                                        <a href="<?php echo get_the_permalink($post->ID)?>">
                                                            <?php echo $post->post_title ?>
                                                        </a>
                                                    </h5>
                                                    <p><?php echo wp_trim_words( $post->post_content, 40, '...' ); ?></p>
                                                    <a href="<?php echo get_the_permalink($post->ID)?>" class="restbeef_button restbeef_button_small"><?php _e('Xem Tiếp', 'bookawesome') ?></a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif ?>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Content Sidebar -->
                <div class="restbeef_sidebar">
                    <?php dynamic_sidebar('blog-sidebar-area'); ?>
                </div>
                <!--end sidebar-->

            </div>
        </div>
    </div>


<?php get_footer();?>