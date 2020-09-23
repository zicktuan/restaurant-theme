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
                            <?php else: ?>
                                <div class="restbeef_single_post_pf restbeef_blog_pf_slider owl-carousel owl-theme">
                                    <?php if(has_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"/>
                                    <?php endif;?>
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
                                        <?php previous_post_link('<i class="fa fa-arrow-left"></i> &nbsp;&nbsp;&nbsp; %link ', 'Previous Post', 'yes'); ?>
									</span>
                            </div>

                            <div class="restbeef_next_post_wrapper">
									<span class="restbeef_next_post_button restbeef_post_nav_button">
                                        <?php next_post_link('%link &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-right"></i>   ', 'Next Post', 'yes'); ?>
									</span>
                            </div>

                        </div>


                        <div class="restbeef_comments_cont">
                            <div class="restbeef_comments_wrapper">
                                <h2 class="align_center">
                                    <span class="restbeef_up_title">People Say</span>
                                    Post Comments
                                </h2>

                                <div class="restbeef_comment_list">
                                    <div class="comment restbeef_comment_item">
                                        <div class="restbeef_comment_body">
                                            <div class="restbeef_comment_text">
                                                <p>Very informative article. I learned a lot of new things for myself, now I will be more aware in this question. Many thanks for author for his work! I will be waiting for another articles about that theme.</p>
                                            </div><!-- .restbeef_comment_text -->

                                            <div class="restbeef_comment_footer">
                                                <div class="restbeef_comment_meta">
                                                    <div class="innertitle restbeef_comment_author">
                                                        John Smith
                                                    </div><!-- .restbeef_comment_author -->
                                                    <div class="restbeef_comment_date">
                                                        May 20, 2019
                                                    </div><!-- .restbeef_comment_date -->
                                                </div><!-- .restbeef_comment_meta -->

                                                <div class="restbeef_comment_tools">
                                                    <div class="restbeef_comment_reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Reply on Comment</a>
                                                    </div><!-- .restbeef_comment_reply -->
                                                </div><!-- .restbeef_comment_tools -->
                                            </div><!-- .restbeef_comment_footer -->
                                        </div><!-- .restbeef_comment_body -->

                                        <div class="comment restbeef_comment_item">
                                            <div class="restbeef_comment_body">
                                                <div class="restbeef_comment_text">
                                                    <p>Very informative article. I learned a lot of new things for myself, now I will be more aware in this question. Many thanks for author for his work! I will be waiting for another articles about that theme.</p>
                                                </div><!-- .restbeef_comment_text -->

                                                <div class="restbeef_comment_footer">
                                                    <div class="restbeef_comment_meta">
                                                        <div class="innertitle restbeef_comment_author">
                                                            Renzo Alvari <span class="restbeef_post_author_label">(Author)</span>
                                                        </div><!-- .restbeef_comment_author -->
                                                        <div class="restbeef_comment_date">
                                                            May 20, 2019
                                                        </div><!-- .restbeef_comment_date -->
                                                    </div><!-- .restbeef_comment_meta -->

                                                    <div class="restbeef_comment_tools">
                                                        <div class="restbeef_comment_reply">
                                                            <a rel="nofollow" class="comment-reply-link" href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Reply on Comment</a>
                                                        </div><!-- .restbeef_comment_reply -->
                                                    </div><!-- .restbeef_comment_tools -->
                                                </div><!-- .restbeef_comment_footer -->
                                            </div><!-- .restbeef_comment_body -->
                                        </div><!-- .restbeef_comment_item -->

                                    </div><!-- .restbeef_comment_item -->

                                    <div class="comment restbeef_comment_item">
                                        <div class="restbeef_comment_body">
                                            <div class="restbeef_comment_text">
                                                <p>Thank you for your feedback! It is very important for me that you liked my article.</p>
                                            </div><!-- .restbeef_comment_text -->

                                            <div class="restbeef_comment_footer">
                                                <div class="restbeef_comment_meta">
                                                    <div class="innertitle restbeef_comment_author">
                                                        Liza Morgan
                                                    </div><!-- .restbeef_comment_author -->
                                                    <div class="restbeef_comment_date">
                                                        May 20, 2019
                                                    </div><!-- .restbeef_comment_date -->
                                                </div><!-- .restbeef_comment_meta -->

                                                <div class="restbeef_comment_tools">
                                                    <div class="restbeef_comment_reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Reply on Comment</a>
                                                    </div><!-- .restbeef_comment_reply -->
                                                </div><!-- .restbeef_comment_tools -->
                                            </div><!-- .restbeef_comment_footer -->
                                        </div><!-- .restbeef_comment_body -->
                                    </div><!-- .restbeef_comment_item -->
                                </div><!-- .restbeef_comment_list -->

                                <div id="respond" class="comment-respond">
                                    <h2 class="align_center">
                                        <span class="restbeef_up_title">Let Us Know</span>
                                        Leave the Comment
                                    </h2>

                                    <form method="post" id="commentform" class="comment-form">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" placeholder="Enter Your Name">
                                            </div><!-- .col-6 -->
                                            <div class="col-6">
                                                <input type="email" placeholder="Enter Your Email">
                                            </div><!-- .col-6 -->
                                        </div><!-- .row -->
                                        <textarea name="comment" cols="45" rows="5" placeholder="Comment" id="comment-message" class="form-field"></textarea>
                                        <input name="submit" type="submit" id="submit" class="submit" value="Send Your Message">
                                    </form><!-- .comment-form -->
                                </div>

                            </div>
                        </div>

                        <!-- Recent Posts Block -->
                        <div class="restbeef_block restbeef_single_recents">
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 10px 0" style="padding: 0px 0px 10px;">
                                <span class="restbeef_up_title">You May Like</span>
                                Recent Posts
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_posts restbeef_grig_2columns">

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_standard.html">
                                                <img src="assets/images/recent_post01.jpg" alt="How to select wine">
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                25 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="https://demo-storage.com/pm/html/restbeef/post_standard.html">How to select wine</a>
                                            </h5>
                                            <p>In this article we will teach you to choose best wine. At first we must learn to determine which wine is suitable for what kind of dishes. We will start...</p>
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_standard.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_image.html">
                                                <img src="assets/images/recent_post03.jpg" alt="New Vegetarian Menu">
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                22 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="https://demo-storage.com/pm/html/restbeef/post_image.html">New Vegetarian Menu</a>
                                            </h5>
                                            <p>We love all our clients. So we had decided to add this new menu for our clients, who prefer vegetarian meal instead of meat. This new menu will also be interesting for those...</p>
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_image.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                </div><!-- .restbeef_recent_posts -->
                            </div><!-- .restbeef_block_inner -->
                        </div>
                        <!-- .restbeef_block -->

                    </div>
                </div>

                <!-- Content Sidebar -->
                <div class="restbeef_sidebar">
                    <!-- Widget Search -->
                    <div class="widget widget_search">
                        <form name="search_form" method="get" id="search_form01" class="restbeef_search_form">
								<span class="restbeef_icon_search" onclick="javascript:document.getElementById(&#39;search_form01&#39;).submit();">
									<i class="fa fa-search"></i>
								</span>
                            <input type="text" name="s" value="" placeholder="Search..." title="Search the site..." class="restbeef_field_search">
                            <div class="clear"></div>
                        </form>
                    </div><!-- .widget_search -->

                    <!-- Widget Featured Posts -->
                    <div class="widget widget_restbeef_featured_posts">
                        <h5 class="widgettitle"><span>Featured Posts</span></h5>
                        <div class="restbeef_recent_posts_widget">
                            <div class="restbeef_posts_item restbeef_block_with_fi">
                                <a href="https://demo-storage.com/pm/html/restbeef/post_standard.html" class="restbeef_posts_item_image"><img class="restbeef_fimage" src="assets/images/thmb01_xs.jpg" alt="Post 01"></a>
                                <div class="restbeef_posts_item_content">
                                    <a class="restbeef_featured_post_widget_title" href="https://demo-storage.com/pm/html/restbeef/post_standard.html">How to select wine</a>
                                    <div class="restbeef_widget_meta">
                                        <div>April 25, 2019</div>
                                    </div><!-- .restbeef_widget_meta -->
                                </div><!-- .restbeef_posts_item_content -->
                            </div><!-- .restbeef_posts_item -->

                            <div class="restbeef_posts_item restbeef_block_with_fi">
                                <a href="https://demo-storage.com/pm/html/restbeef/post_video.html" class="restbeef_posts_item_image"><img class="restbeef_fimage" src="assets/images/thmb02_xs.jpg" alt="Post 02"></a>
                                <div class="restbeef_posts_item_content">
                                    <a class="restbeef_featured_post_widget_title" href="https://demo-storage.com/pm/html/restbeef/post_video.html">Master Class</a>
                                    <div class="restbeef_widget_meta">
                                        <div>May 05, 2019</div>
                                    </div><!-- .restbeef_widget_meta -->
                                </div><!-- .restbeef_posts_item_content -->
                            </div><!-- .restbeef_posts_item -->
                        </div><!-- .restbeef_recent_posts_widget -->
                    </div><!-- .widget_restbeef_featured_posts -->

                    <!-- Widget Categories -->
                    <div class="widget widget_categories">
                        <h5 class="widgettitle"><span>Categories</span></h5>
                        <ul>
                            <li class="cat-item"><a href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Stories</a></li>
                            <li class="cat-item"><a href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Articles</a></li>
                            <li class="cat-item"><a href="https://demo-storage.com/pm/html/restbeef/post_video.html#">Training</a></li>
                            <li class="cat-item"><a href="https://demo-storage.com/pm/html/restbeef/post_video.html#">New Menu</a></li>
                            <li class="cat-item"><a href="https://demo-storage.com/pm/html/restbeef/post_video.html#">News</a></li>
                        </ul>
                    </div><!-- .widget_categories -->

                    <!-- Widget Popular Tags -->
                    <div class="widget widget_tag_cloud">
                        <h5 class="widgettitle"><span>Popular Tags</span></h5>
                        <div class="tagcloud">
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Training</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Stories</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Articles</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Menu</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Events</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Restaurant</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Catering</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Food</a>
                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html#" class="tag-cloud-link">Delivery</a>
                        </div>
                    </div><!-- .widget_tag_cloud -->

                    <!-- Widget Instagram -->
                    <div class="widget widget_instagram">
                        <h5 class="widgettitle"><span>Gallery Widget</span></h5>
                        <div class="gallery_widget_wrapper restbeef_photoswipe_wrapper" data-uniqid="pswp_instagram">
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/01.jpg" data-size="1920x1440" data-count="0" class="restbeef_pswp_slide"><img src="assets/images/thmb_01.jpg" alt="Gallery Item 01"></a>
                            </div><!-- .gallery_widget_item -->
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/02.jpg" data-size="1920x1280" data-count="1" class="restbeef_pswp_slide"><img src="assets/images/thmb_02.jpg" alt="Gallery Item 02"></a>
                            </div><!-- .gallery_widget_item -->
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/03.jpg" data-size="1920x1280" data-count="2" class="restbeef_pswp_slide"><img src="assets/images/thmb_03.jpg" alt="Gallery Item 03"></a>
                            </div><!-- .gallery_widget_item -->
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/04.jpg" data-size="1920x1280" data-count="3" class="restbeef_pswp_slide"><img src="assets/images/thmb_04.jpg" alt="Gallery Item 04"></a>
                            </div><!-- .gallery_widget_item -->
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/05.jpg" data-size="1920x1280" data-count="4" class="restbeef_pswp_slide"><img src="assets/images/thmb_05.jpg" alt="Gallery Item 05"></a>
                            </div><!-- .gallery_widget_item -->
                            <div class="gallery_widget_item">
                                <a href="https://demo-storage.com/pm/html/restbeef/img/instagram/06.jpg" data-size="1920x1280" data-count="5" class="restbeef_pswp_slide"><img src="assets/images/thmb_06.jpg" alt="Gallery Item 06"></a>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget_text">
                        <h5 class="widgettitle"><span>Banner Spot</span></h5>
                        <div class="textwidget">
                            <img src="assets/images/banner.jpg" alt="Banner Spot">
                        </div>
                    </div>

                    <div class="widget widget_text">
                        <h5 class="widgettitle"><span>Text widget</span></h5>
                        <div class="textwidget">
                            <p>Our Steakhouse orient not only on beefs and other kind of meat. We also care about our vegetarian clients, so we can offer to you wide range of fresh salads, grilled vegetables, desserts and more!</p>
                        </div>
                    </div>

                </div>
                <!--end sidebar-->

            </div>
        </div>
    </div>


<?php get_footer();?>