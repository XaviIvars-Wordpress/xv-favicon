<?php
/*
Plugin Name: XV Favicon
Plugin URI: http://xavi.ivars.me
Description: Adds favicon.ico to the head for themes that don't have it
Version: 0.1
Author: Xavi Ivars
Author URI: http://xavi.ivars.me
License: GPLv3
*/
add_action('wp_head','xv_favicon');

function xv_favicon()
{
    echo '<link rel="shortcut icon" href="/favicon.ico" />';
}
