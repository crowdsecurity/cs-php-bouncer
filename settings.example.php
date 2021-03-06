<?php

use CrowdSecBouncer\Constants;

$crowdSecStandaloneBouncerConfig = [
    'api_url' => 'http://127.0.0.1:8080', // Default local API is 127.0.0.1:8080. Example in the docker-compose dev context, use http://crowdsec:8080
    'api_key' => '${API_KEY}', // [FILL ME] Set a bouncer key here
    'debug_mode' => false, // [FILL ME] Set to true to enable debug log
    'display_errors' => false, // [FILL ME] Set to true to stop the process and display errors if any
    'log_directory_path' => __DIR__.'/.logs', // [FILL ME] Important note: be sur this path won't be publicly accessible!
    'fs_cache_path' => __DIR__.'/.cache', // [FILL ME] Important note: be sur this path won't be publicly accessible!

    'bouncing_level' => 'normal_bouncing',

    'stream_mode' => false,

    'cache_system' => 'phpfs',
    'redis_dsn' => '',
    'memcached_dsn' => '',

    'clean_ip_cache_duration' => 5,
    'bad_ip_cache_duration' => 10,
    'fallback_remediation' => 'captcha',

    'hide_mentions' => false,
    'trust_ip_forward' => '',
    'trust_ip_forward_array' => [],

    'theme_color_text_primary' => 'black',
    'theme_color_text_secondary' => '#AAA',
    'theme_color_text_button' => 'white',
    'theme_color_text_error_message' => '#b90000',
    'theme_color_background_page' => '#eee',
    'theme_color_background_container' => 'white',
    'theme_color_background_button' => '#626365',
    'theme_color_background_button_hover' => '#333',

    'theme_text_captcha_wall_tab_title' => 'Oops..',
    'theme_text_captcha_wall_title' => 'Hmm, sorry but...',
    'theme_text_captcha_wall_subtitle' => 'Please complete the security check.',
    'theme_text_captcha_wall_refresh_image_link' => 'refresh image',
    'theme_text_captcha_wall_captcha_placeholder' => 'Type here...',
    'theme_text_captcha_wall_send_button' => 'CONTINUE',
    'theme_text_captcha_wall_error_message' => 'Please try again.',
    'theme_text_captcha_wall_footer' => '',

    'theme_text_ban_wall_tab_title' => 'Oops..',
    'theme_text_ban_wall_title' => '🤭 Oh!',
    'theme_text_ban_wall_subtitle' => 'This page is protected against cyber attacks and your IP has been banned by our system.',
    'theme_text_ban_wall_footer' => '',
    'theme_custom_css' => '',
];
