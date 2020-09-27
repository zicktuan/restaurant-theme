<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
$showBlog = !empty($optionTheme['awe_config_show_blog']) ? $optionTheme['awe_config_show_blog'] : '0';
?>

<?php if(0 == $showBlog): ?>
<div class="restbeef_main_wrapper">
    <div class="restbeef_container">
        <div class="restbeef_content_wrapper restbeef_no_sidebar">

            <div class="restbeef_content">
                <div class="restbeef_tiny">
                    <div class="restbeef_block">
                        <div class="restbeef_block_inner">
                            <div class="restbeef_grid_blog restbeef_grid_blog_3columns">
                                <?php get_template_part('blog', 'grid') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else:?>

<div class="restbeef_main_wrapper">
    <div class="restbeef_container">
        <div class="restbeef_content_wrapper restbeef_right_sidebar">
            <div class="restbeef_content">
                <div class="restbeef_tiny">
                    <div class="restbeef_block">
                        <div class="restbeef_block_inner">
                            <div class="restbeef_simple_blog">
                                <?php get_template_part('blog', 'sidebar') ?>
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

<?php endif ?>

