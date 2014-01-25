<?php
// Sidebar快去和Wordpress做好朋友!
if ( function_exists('register_sidebar') )

    register_sidebar(array(
    	'name'=>'Sidebar',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

));
?>