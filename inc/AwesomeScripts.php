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
	}

	public function frontendScripts()
	{
		global $awesomeTheme;

		wp_enqueue_script('analytics', get_template_directory_uri() . '/assets/js/analytics.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('gtm', get_template_directory_uri() . '/assets/js/gtm.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('photoswipe', get_template_directory_uri() . '/assets/js/photoswipe.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('photoswipe-default', get_template_directory_uri() . '/assets/js/photoswipe-ui-default.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), $awesomeTheme->version, true);
	}

	public function frontendStyles()
	{
		global $awesomeTheme;
        wp_enqueue_style('kube', get_template_directory_uri() . '/assets/css/kube.css', $awesomeTheme->version, true);
        wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('photoswipe', get_template_directory_uri() . '/assets/css/photoswipe.css', $awesomeTheme->version, true);
		wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', $awesomeTheme->version, true);
		wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', $awesomeTheme->version, true);
	}
}
?>