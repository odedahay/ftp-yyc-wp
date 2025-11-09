<?php

function ftp_yyc_styles() {
    wp_enqueue_style('ftp_yyc_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ftp_yyc_styles');