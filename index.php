<?php get_header(); ?>
<!---->
<!--    <div id="main" class="site-main">-->
<!--        <div class="container active-sidebar right ">-->
<!---->
<!--            <div id="primary" class="content-area">-->
<!--                <div id="content" class="site-content post " role="main">-->
<!---->
<!--                    --><?php //get_template_part( 'loop' ); ?>
<!---->
<!--                </div>-->
<!---->
<!--                --><?php
//                    global $awesomeTheme, $wp_query;
//                    $awesomeTheme->includeFunction()->awePagination($wp_query->max_num_pages);
//                ?>
<!---->
<!--            </div>-->
<!---->
<!--            <div id="tertiary" class="sidebar-container" role="complementary">-->
<!--                <div class="sidebar-inner">-->
<!--                    <div class="widget-area clearfix">-->
<!--                        --><?php //dynamic_sidebar('blog-sidebar-area'); ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->

    <!-- Content -->
    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">

                        <!-- Recent Products Block -->
                        <div class="restbeef_block restbeef_js_margin" data-margin="-20px 0 99px 0">
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                                <span class="restbeef_up_title">Freshly Taste</span>
                                New in our Menu
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_products restbeef_grig_3columns">
                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/products/recent_product01.jpg" alt="Product 01"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <del>$20</del><span>$15</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Season Menu
													</span>
                                                <a href="product.html">Spring Burger</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/products/recent_product02.jpg" alt="Product 02"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <span>$10</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Dessert Menu
													</span>
                                                <a href="product.html">Light Breeze</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->

                                    <div class="restbeef_recent_product">
                                        <div class="restbeef_recent_product_image">
                                            <a href="product.html">
                                                <img src="img/products/recent_product03.jpg" alt="Product 03"/>
                                            </a>
                                        </div><!-- .restbeef_recent_product_image -->
                                        <div class="restbeef_recent_product_content">
                                            <div class="restbeef_recent_product_price">
                                                <span>$25</span>
                                            </div><!-- .restbeef_recent_product_price -->
                                            <h4>
													<span class="restbeef_up_title">
														Steak Menu
													</span>
                                                <a href="product.html">Steak with fries</a>
                                            </h4>
                                        </div><!-- .restbeef_recent_product_content -->
                                    </div><!-- .restbeef_recent_product -->
                                </div><!-- .restbeef_recent_products -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Story Block -->
                        <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right"
                             data-background="<?php echo get_template_directory_uri() ?>/assets/images/page_backgrounds/index01-1.jpg"
                             data-margin="0 0 71px 0"
                             style="background-image: url(&quot;<?php echo get_template_directory_uri() ?>/assets/images/page_backgrounds/index01-1.jpg&quot;); margin: 0px 0px 71px -181px; width: 1532px;">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_align_middle restbeef_height100">
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px" style="padding: 50px 0px 50px 50px;">

                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0" style="padding: 50px 50px 50px 0px;">
                                        <div class="restbeef_content_box align_center">
                                            <h2>
                                                <span class="restbeef_up_title">Our Story</span>
                                                How We Begin
                                            </h2>
                                            <p class="align_center restbeef_js_margin" data-margin="0 0 43px 0" style="margin: 0px 0px 43px;">The Restbeef Steakhouse was est in 1989 in Chicago City. With more than 30 years of experience and base on traditional recipes, we understand how to best serve our customers through tried service principles. Instead of following trends, we set them. We create steaks and grill we’re proud to serve and deliver it fast, with a smile. No matter where you find us, we’re making sure each meal our clients enjoy is delicious and one-of-a-kind. Our steaks is always perfect and our professional team working hard to make you happy.</p>
                                            <a href="https://demo-storage.com/pm/html/restbeef/about_us.html" class="restbeef_button">Learn More About Us</a>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Testimonials Block -->
                        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 100px 0" style="margin: 0px 0px 100px;">
                            <div class="restbeef_block_inner">
                                <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0" style="padding: 0px 0px 15px;">
                                    <span class="restbeef_up_title">Our Clients Say</span>
                                    Testimonials
                                </h2>
                                <div class="restbeef_testimonials_wrapper restbeef_testimonials_grid restbeef_grig_3columns align_center">

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author01.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                John Smith
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            The Restbeef was one of the first restaurants I discovered upon moving to Chicago last summer. Perfect steaks, service on highest level. I recommend it to all people, who love tasty meat.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author02.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                Megan Knight
                                                <span class="restbeef_stars_review restbeef_stars_review4"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Love so much evening lounge music concert! It’s wonderful. But I’m vegetarian, so i don’t like meat, but there is a lot of salads and very tasty desserts, so i think everyone can find what to taste.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author03.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                Dolores Ford
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Best service i’ve ever seen in Chicago. Very polite staff, beautiful serving and serving dishes. Love their burgers. At weekends they have special offers, that’s are very affordable for me and very tasty!
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author04.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                Emmy Snow
                                                <span class="restbeef_stars_review restbeef_stars_review3"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Very wide range of salads to select, but i don’t like places, where people eat poor animals. But my boyfriend like steaks and beer. That place has very skilled staff and fantasitc salads. Desserts are also best.
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author05.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                Frank Stewart
                                                <span class="restbeef_stars_review restbeef_stars_review5"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Me and my girlfriend are in love with this place. Here we met at first time and go here every week to taste awesome steaks and drink some beer, listening fantastic lounge music. Strongly recommend!
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                    <div class="restbeef_testimonials_item">
                                        <div class="restbeef_testimonials_author">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author06.jpg" alt="John Smith">
                                            <div class="restbeef_testimonials_author_name">
                                                Angela Kelly
                                                <span class="restbeef_stars_review restbeef_stars_review4"></span>
                                            </div><!-- .restbeef_testimonials_author_name -->
                                        </div><!-- .restbeef_testimonials_author -->
                                        <div class="restbeef_testimonial_content">
                                            Me and my friends like spend weekend evenings in the Restbeef. Relaxing lounge music, wide range wine card, perfect meat. What else people need after hard working week? Maybe just more action...
                                        </div><!-- .restbeef_testimonial_content -->
                                    </div><!-- .restbeef_testimonials_item -->

                                </div><!-- .restbeef_testimonials_wrapper -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Contact Block -->
                        <div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left"
                             data-background="<?php echo get_template_directory_uri() ?>/assets/images/page_backgrounds/index01-2.jpg"
                             data-margin="0 0 71px 0"
                             style="background-image: url(&quot;<?php echo get_template_directory_uri() ?>/assets/images/page_backgrounds/index01-2.jpg&quot;); margin: 0px 0px 71px -181px; width: 1532px;">
                            <div class="restbeef_block_inner">
                                <div class="row row_no_gap restbeef_height100">
                                    <div class="col-6 restbeef_js_padding restbeef_align_middle" data-padding="50px 0 50px 50px" style="padding: 50px 0px 50px 50px;">
                                        <div class="restbeef_content_box align_center">
                                            <h2>
                                                <span class="restbeef_up_title">Got Questions?</span>
                                                Get in touch with US
                                            </h2>
                                            <form method="post" id="contact_form">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" placeholder="Enter Your Name" name="your_name">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="email" placeholder="Enter Your Email" name="your_email">
                                                    </div>
                                                </div><!-- .row -->
                                                <textarea placeholder="Enter Your Message" name="your_message"></textarea>
                                                <input type="submit" value="Send Your Message">
                                            </form>
                                        </div><!-- .restbeef_content_box -->
                                    </div><!-- .col-6 -->
                                    <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0" style="padding: 50px 50px 50px 0px;">

                                    </div><!-- .col-6 -->
                                </div>
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                        <!-- Recent Posts Block -->
                        <div class="restbeef_block">
                            <h2 class="align_center restbeef_js_padding" data-padding="0 0 35px 0" style="padding: 0px 0px 35px;">
                                <span class="restbeef_up_title">Fresh News</span>
                                What is going on
                            </h2>
                            <div class="restbeef_block_inner">
                                <div class="restbeef_recent_posts restbeef_grig_3columns">

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_standard.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/recent_post01.jpg" alt="How to select wine">
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
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/recent_post02.jpg" alt="Master Class">
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                23 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="https://demo-storage.com/pm/html/restbeef/post_video.html">Master Class</a>
                                            </h5>
                                            <p>In this video master class you will learn, how to create tasty and awesome meal in your own kitchen. Our chef will explain you some secrets of cooking and serve...</p>
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_video.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                    <div class="restbeef_recent_post">
                                        <div class="restbeef_recent_post_image">
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_image.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/recent_post03.jpg" alt="New Vegetarian Menu">
                                            </a>
                                        </div><!-- .restbeef_recent_post_image -->
                                        <div class="restbeef_recent_post_content">
                                            <div class="restbeef_recent_post_date">
                                                22 Apr
                                            </div><!-- .restbeef_recent_post_date -->
                                            <h5>
                                                <a href="https://demo-storage.com/pm/html/restbeef/post_image.html">New Vegetarian Menu</a>
                                            </h5>
                                            <p>We love all our clients. So we had decided to add this new menu for our clients, who prefer vegetarian meal instead of meat. This new menu will...</p>
                                            <a href="https://demo-storage.com/pm/html/restbeef/post_image.html" class="restbeef_button restbeef_button_small">Learn More</a>
                                        </div><!-- .restbeef_recent_post_content -->
                                    </div><!-- .restbeef_recent_post -->

                                </div><!-- .restbeef_recent_posts -->
                            </div><!-- .restbeef_block_inner -->
                        </div><!-- .restbeef_block -->

                    </div><!-- .restbeef_tiny -->
                </div><!-- .restbeef_content -->

            </div><!-- .restbeef_content_wrapper -->
        </div><!-- .restbeef_container -->
    </div><!-- .restbeef_main_wrapper -->


<?php get_footer(); ?>