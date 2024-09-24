<?php
function load_resources()
{
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), true);
}
add_action("wp_enqueue_scripts", "load_resources");

function hstngr_register_widget()
{
    register_sidebar( array(
		"name"          => "Footer Sidebar",
		"id"            => "footer_sidebar",
		"before_widget" => "<div>",
		"after_widget"  => "</div>",
		"before_title"  => "<h2>",
		"after_title"   => "</h2>",
	));
    register_widget("hstngr_widget");
}