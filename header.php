<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<!DOCTYPE html>
<!-- saved from url=(0042)https://demo-storage.com/pm/html/restbeef/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('title')?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <link href="./Restbeef - Steakhouse HTML Template_files/css" rel="stylesheet">-->
    <?php wp_head() ?>

    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5G6PPWB');
    </script>
</head>

<body>
<div class="restbeef_site_wrapper">

    <!-- Header -->
    <div class="restbeef_header_wrapper restbeef_js_bg_image restbeef_height100"
         <?php if(is_home() || is_front_page()): ?>
         data-background="<?php echo !empty($optionTheme['awe_header_bg']) ? esc_url($optionTheme['awe_header_bg']) : ''; ?>"
         style="background-image: url(<?php echo !empty($optionTheme['awe_header_bg']) ? esc_url($optionTheme['awe_header_bg']) : ''; ?>);"
         <?php endif; ?>
    >
        <header class="restbeef_main_header">
            <div class="restbeef_header_inner">
                <div class="restbeef_header_tagline restbeef_container_wide">
                    <div class="restbeef_header_contacts">
                        <ul class="restbeef_header_contacts_list">
                            <?php echo !empty($optionTheme['awe_header_address']) ? '<li><i class="fa fa-map-marker"></i>'.$optionTheme['awe_header_address'].'</li>' : '' ?>
                            <?php echo !empty($optionTheme['awe_header_phone']) ? '<li><i class="fa fa-phone"></i>'.$optionTheme['awe_header_phone'].'</li>' : '' ?>
                            <?php echo !empty($optionTheme['awe_header_time']) ? '<li><i class="fa fa-clock-o"></i>'.$optionTheme['awe_header_time'].'</li>' : '' ?>
                        </ul>
                    </div>

                    <div class="restbeef_header_socials">
                        <ul class="restbeef_header_socials_list">
                            <li><a href="https://demo-storage.com/pm/html/restbeef/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://demo-storage.com/pm/html/restbeef/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://demo-storage.com/pm/html/restbeef/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://demo-storage.com/pm/html/restbeef/#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="restbeef_header_content restbeef_container_wide">
                    <div class="restbeef_logo_part">
                        <div class="restbeef_logo_cont">
                            <a href="<?php echo home_url() ?>" class="restbeef_image_logo restbeef_retina" style="background: url(<?php echo !empty($optionTheme['awe_header_logo']) ? esc_url($optionTheme['awe_header_logo']) : '' ?>) no-repeat;"></a>
                        </div>
                    </div>

                    <div class="restbeef_mobile_menu_part">
                        <a href="javascript:void(0)" class="restbeef_mobile_menu_toggler">
                            <span></span>
                        </a>
                    </div>

                    <div class="restbeef_menu_part">
                        <nav class="restbeef_nav">
                            <ul id="menu-main-menu" class="restbeef_menu">
                                <li class="menu-item menu-item-has-children current-menu-ancestor">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item"><a href="index.html">Home 01</a></li>
                                        <li class="menu-item"><a href="index02.html">Home 02</a></li>
                                        <li class="menu-item"><a href="index03.html">Home 03</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about_us.html">About Us</a></li>
                                        <li class="menu-item"><a href="our_events.html">Our Events</a></li>
                                        <li class="menu-item"><a href="our_team.html">Our Team</a></li>
                                        <li class="menu-item"><a href="team_member.html">Team Member</a></li>
                                        <li class="menu-item"><a href="table_reservation.html">Table Reservation</a></li>
                                        <li class="menu-item"><a href="food_delivery.html">Food Delivery</a></li>
                                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Products</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="our_menu.html">Our Menu</a></li>
                                        <li class="menu-item"><a href="product.html">Single Product</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Stories</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog_grid.html">Blog Grid</a></li>
                                        <li class="menu-item"><a href="blog_masonry.html">Blog Masonry</a></li>
                                        <li class="menu-item"><a href="blog_simple.html">Blog Simple</a></li>
                                        <li class="menu-item"><a href="blog_sidebar.html">Blog with Sidebar</a></li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Blog Posts</a>
                                            <ul class="sub-menu">
                                                <li><a href="post_standard.html">Standard Post</a></li>
                                                <li><a href="post_image.html">Image Post</a></li>
                                                <li><a href="post_gallery.html">Gallery Post</a></li>
                                                <li><a href="post_video.html">Video Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Contacts</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="contacts01.html">Fullwidth</a></li>
                                        <li class="menu-item"><a href="contacts02.html">With Sidebar</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <a href="table_reservation.html" class="btn_restbeef btn_book_table"><?php _e('Book a Table', 'bookawesome') ?></a>
                        </nav>
                    </div>

                </div>

            </div>
        </header>

<!--        --><?php //if(is_home() || is_front_page()): ?>
<!--            <div class="restbeef_header_title restbeef_container">-->
<!--                --><?php //if(!empty($optionTheme['awe_header_title'])): ?>
<!--                <h1>-->
<!--                    --><?php //echo !empty($optionTheme['awe_header_sub_title']) ? '<span class="restbeef_up_title">'.$optionTheme['awe_header_sub_title'].'</span>' : ''?>
<!--                    --><?php //echo $optionTheme['awe_header_title'] ?>
<!--                </h1>-->
<!--                --><?php //endif ?>
<!---->
<!--                --><?php //echo !empty($optionTheme['awe_header_desc']) ? '<p class="restbeef_header_description">'.$optionTheme['awe_header_desc'].'</p>' : '' ?>
<!---->
<!--                --><?php //if($optionTheme['awe_header_link_menu']): ?>
<!--                    <a href="--><?php //echo $optionTheme['awe_header_link_menu'] ?><!--" class="restbeef_button restbeef_button_small restbeef_button_white">-->
<!--                        --><?php //echo !empty($optionTheme['awe_header_btn_menu']) ? $optionTheme['awe_header_btn_menu'] : ''?>
<!--                    </a>-->
<!--                --><?php //endif ?>
<!---->
<!--                --><?php //if($optionTheme['awe_header_link_reservation']): ?>
<!--                    <a href="--><?php //echo $optionTheme['awe_header_link_reservation'] ?><!--" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse">-->
<!--                        --><?php //echo !empty($optionTheme['awe_header_btn_reservation']) ? $optionTheme['awe_header_btn_reservation'] : ''?>
<!--                    </a>-->
<!--                --><?php //endif ?>
<!--            </div>-->
<!--        --><?php //endif ?>

    </div>

    <?php if(is_home() || is_front_page()): ?>
    <div class="restbeef_main_wrapper">
        <div class="restbeef_container">
            <div class="restbeef_content_wrapper restbeef_no_sidebar">

                <!-- Content Inner -->
                <div class="restbeef_content">
                    <div class="restbeef_tiny">
                        <?php endif;?>
