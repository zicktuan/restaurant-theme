<?php

/**
 * 
 */
class AwesomeScripts
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));
		add_action('wp_enqueue_scripts', array($this, 'frontendStyles'));
        add_action( 'admin_enqueue_scripts', array($this, 'backendScripts') );
	}

	public function frontendScripts()
	{
		global $awesomeTheme;

		wp_enqueue_script('analytics', get_template_directory_uri() . '/assets/js/analytics.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('gtm', get_template_directory_uri() . '/assets/js/gtm.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery-ui-min', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('photoswipe', get_template_directory_uri() . '/assets/js/photoswipe.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('photoswipe-default', get_template_directory_uri() . '/assets/js/photoswipe-ui-default.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('reservation', get_template_directory_uri() . '/assets/js/reservation.js', array('jquery'), $awesomeTheme->version, true);

        wp_localize_script('photoswipe', 'awe_admin',
            array(
                'url' => admin_url(),
            )
        );
	}

	public function frontendStyles()
	{
		global $awesomeTheme;
        wp_enqueue_style('kube', get_template_directory_uri() . '/assets/css/kube.css', $awesomeTheme->version, true);
        wp_enqueue_style('jquery-ui-style', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('photoswipe', get_template_directory_uri() . '/assets/css/photoswipe.css', $awesomeTheme->version, true);
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', $awesomeTheme->version, true);
        wp_enqueue_style('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.css', $awesomeTheme->version, true);
		wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', $awesomeTheme->version, true);
		wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', $awesomeTheme->version, true);
	}

	public function backendScripts() {
        global $awesomeTheme;
        wp_enqueue_script('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_style('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.css', $awesomeTheme->version, true);
    }
}
?>
