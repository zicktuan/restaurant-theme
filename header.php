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

<!--    <link href="https://fonts.googleapis.com/css?family=Great+Vibes%7COpen+Sans:400,700%7CRoboto%7CRoboto+Condensed:400,700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.png'?>">

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
<?php global $wp_query; ?>
<body>
<div class="restbeef_site_wrapper">
    <?php
        $pageId = get_the_ID();
        $bannerPage = get_post_meta($pageId, 'awe_banner_page', true);
    ?>
    <!-- Header -->
    <div class="restbeef_header_wrapper restbeef_js_bg_image <?php echo is_front_page() ? 'restbeef_height100' : ''?>"
         <?php if(1 == $wp_query->is_posts_page): ?>
             data-background="<?php echo !empty($optionTheme['blog_bg']) ? esc_url($optionTheme['blog_bg']) : ''; ?>"
         <?php elseif(is_single() || is_category() || is_tag()):?>
             data-background="<?php echo !empty($optionTheme['single_blog_bg']) ? esc_url($optionTheme['single_blog_bg']) : ''; ?>"
         <?php else:?>
             data-background="<?php echo !empty($bannerPage) ? esc_url($bannerPage) : ''; ?>"
         <?php endif;?>
         style="background-image: url(<?php echo !empty($optionTheme['awe_header_bg']) ? esc_url($optionTheme['awe_header_bg']) : ''; ?>);"
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
                            <?php echo !empty($optionTheme['awe_social_fb']) ? '<li><a href="'.$optionTheme['awe_social_fb'].'"><i class="fa fa-facebook"></i></a></li>' : '' ?>
                            <?php echo !empty($optionTheme['awe_social_ins']) ? '<li><a href="'.$optionTheme['awe_social_ins'].'"><i class="fa fa-instagram"></i></a></li>' : '' ?>
                            <?php echo !empty($optionTheme['awe_social_you']) ? '<li><a href="'.$optionTheme['awe_social_you'].'"><i class="fa fa-youtube-play"></i></a></li>' : '' ?>
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
                            <?php
                            wp_nav_menu(
                                [
                                    'theme_location' => 'awe-header-menu',
                                    'walker'         => new CustomPrimaryMenuWalker(),
                                    'container' => 'ul',
                                    'menu_class' => 'restbeef_menu',
                                    'menu_id' => 'menu-main-menu',
                                ]
                            );
                            ?>
                            <a href="#" class="btn_restbeef btn_book_table awe-btn-opend-popup-js"><?php _e('Book a Table', 'bookawesome') ?></a>
                        </nav>
                    </div>

                </div>

            </div>
        </header>

        <?php
            $titlePage    = get_post_meta($pageId, 'awe_title_page', true);
            $subTitlePage = get_post_meta($pageId, 'awe_sub_title_page', true);
        ?>
        <div class="restbeef_header_title restbeef_container">
            <?php if(1 == $wp_query->is_posts_page): ?>
                <h1>
                    <?php echo !empty($optionTheme['blog_header_sub_title_bg']) ? '<span class="restbeef_up_title">'.$optionTheme['blog_header_sub_title_bg'].'</span>' : ''?>
                    <?php echo !empty($optionTheme['blog_header_title_bg']) ? $optionTheme['blog_header_title_bg'] : '' ?>
                </h1>
            <?php elseif(is_single() || is_category()):?>
                <h1>
                    <?php echo !empty($optionTheme['single_blog_header_sub_title_bg']) ? '<span class="restbeef_up_title">'.$optionTheme['single_blog_header_sub_title_bg'].'</span>' : ''?>
                    <?php echo !empty($optionTheme['single_blog_header_title_bg']) ? $optionTheme['single_blog_header_title_bg'] : '' ?>
                </h1>
            <?php else: ?>
                <h1>
                    <?php echo !empty($subTitlePage) ? '<span class="restbeef_up_title">'.$subTitlePage.'</span>' : ''?>
                    <?php echo !empty($titlePage) ? $titlePage : '' ?>
                </h1>
            <?php endif ?>
            <?php if(is_front_page()): ?>
                <p class="restbeef_header_description"><?php echo !empty($optionTheme['awe_header_desc']) ? $optionTheme['awe_header_desc'] : '' ?></p>

                <?php if($optionTheme['awe_header_link_menu']): ?>
                    <a href="<?php echo $optionTheme['awe_header_link_menu'] ?>" class="restbeef_button restbeef_button_small restbeef_button_white">
                        <?php echo !empty($optionTheme['awe_header_btn_menu']) ? $optionTheme['awe_header_btn_menu'] : ''?>
                    </a>
                <?php endif ?>

                <?php if($optionTheme['awe_header_link_reservation']): ?>
                    <a href="<?php echo $optionTheme['awe_header_link_reservation'] ?>" class="restbeef_button restbeef_button_small restbeef_button_white restbeef_button_reverse awe-btn-opend-popup-js">
                        <?php echo !empty($optionTheme['awe_header_btn_reservation']) ? $optionTheme['awe_header_btn_reservation'] : ''?>
                    </a>
                <?php endif ?>
            <?php endif ?>
        </div>

    </div>

