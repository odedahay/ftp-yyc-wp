<?php

function ftp_yyc_styles() {

    
    wp_enqueue_style('ftp_yyc_custom_googlefont', 'https://fonts.googleapis.com');
    wp_enqueue_style('ftp_yyc_custom_googlefont', 'https://fonts.gstatic.com" crossorigin);');
    wp_enqueue_style('ftp_yyc_font_inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Fraunces:wght@600;700&display=swap"
    rel="stylesheet');
    wp_enqueue_style('ftp_yyc_font_gothic', 'https://fonts.googleapis.com/css2?family=Special+Gothic+Expanded+One&display=swap');
    wp_enqueue_style('ftp_yyc_main_styles', get_theme_file_uri('output.css'));
    // wp_enqueue_style('ftp_yyc_extra_styles', get_theme_file_uri('/output.css'));
}

add_action('wp_enqueue_scripts', 'ftp_yyc_styles');