<?php get_header();?>
<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
$showBlog = !empty($optionTheme['awe_config_show_blog']) ? $optionTheme['awe_config_show_blog'] : '0';
?>
    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper <?php echo (1 == $showBlog) ? 'restbeef_right_sidebar' : 'restbeef_no_sidebar' ?> ">
                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <?php
                                $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true );
                                $getIdGallery = get_post_meta(get_the_ID(), 'awe_post_gallery', true);
                                $galleryId = explode(',', $getIdGallery);
                            ?>
                            <?php if ( !empty( $idVideo ) ): ?>
                                <div class="restbeef_single_post_pf restbeef_blog_pf_video_wrapper">
                                    <iframe width="<?php echo (1 == $showBlog) ? '840' : '100%' ?>" height="472" src="https://www.youtube.com/embed/<?php echo $idVideo ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            <?php endif; ?>

                            <?php if(isset($getIdGallery) && !empty($getIdGallery)): ?>
                                <?php if(0 == $showBlog):?>
                                <div class="restbeef_single_post_pf restbeef_blog_pf_gallery" >
                                    <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="8726">
                                        <?php foreach ($galleryId as $id): ?>
                                            <div class="restbeef_grig_gallery_item">
                                                <a href="<?php echo wp_get_attachment_url($id) ?>" class="restbeef_pswp_slide" data-size="740x700" data-count="0">
                                                    <img src="<?php echo wp_get_attachment_url($id) ?>" alt="<?php the_title() ?>"/>
                                                </a>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                    <div class="restbeef_single_post_pf restbeef_blog_pf_slider owl-carousel owl-theme">
                                        <?php foreach ($galleryId as $id): ?>
                                            <div class="item">
                                                <img src="<?php echo wp_get_attachment_url($id) ?>" alt="<?php the_title() ?>"/>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>


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
                                <div class="restbeef_recent_posts <?php echo (1 == $showBlog) ? 'restbeef_grig_2columns' : 'restbeef_grig_3columns' ?>">

                                    <?php
                                        if(1 == $showBlog) {
                                            $args = array(
                                                'numberposts' => 2
                                            );
                                        } else {
                                            $args = array(
                                                'numberposts' => 3
                                            );
                                        }

                                        $latestPosts = get_posts( $args );
                                    ?>
                                    <?php if (!empty($latestPosts)): ?>
                                        <?php foreach ($latestPosts as $post):
                                            $thumbnail = get_the_post_thumbnail_url($post->ID, '');
                                            $dateEvent = get_post_meta($post->ID, 'awe_event_meta', true);
                                            ?>
                                            <div class="restbeef_recent_post">
                                                <div class="restbeef_recent_post_image">
                                                    <a href="<?php echo get_the_permalink($post->ID)?>">
                                                        <img src="<?php echo esc_url($thumbnail) ?>" alt="<?php echo $post->post_title ?>"/>
                                                    </a>
                                                </div>
                                                <div class="restbeef_recent_post_content">
                                                    <?php if(!empty($dateEvent)): ?>
                                                        <div class="restbeef_recent_post_date">
                                                            <?php echo date('d M', strtotime($dateEvent))?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="restbeef_recent_post_date">
                                                            <?php echo date('d M', strtotime($post->post_date))?>
                                                        </div>
                                                    <?php endif ?>
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

                        <?php get_template_part('reservation') ?>

                    </div>
                </div>

                <!-- Content Sidebar -->
                <?php if (1 == $showBlog):?>
                <div class="restbeef_sidebar">
                    <?php dynamic_sidebar('blog-sidebar-area'); ?>
                </div>
                <?php endif ?>
                <!--end sidebar-->

            </div>
        </div>
    </div>


<?php get_footer();?>